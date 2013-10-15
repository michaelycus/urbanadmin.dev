<?php
$this->load->helper('file');

$codename_cidade = CODENAME_CIDADE;

$max=0;
$segments = 20;

if (!empty($bairros))
{
    foreach ($bairros as $bairro):
        $max = max($bairro->populacao, $max);
    endforeach;    
}

$max = $max + 1;

$data = <<<EOF
$(function() {
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            width: 700
        },
        legend: {
            area: {
                display: true,
                title: "População de Lajeado por bairros",
                slices: [
EOF;

for ($i=1; $i<=$segments; $i++)
{
    $data .= '{
                min: '. round( ($max/$segments)*$i - ($max/$segments) )  .',
                max: '. round( ($max/$segments)*$i ) .',
                attrs: {
                    fill: "'. rgb2hex(array(50, (255 - 10 * $i), 50) ) .'"}
              },';
}

$data .=']
    }
},
areas: {';

//$data .='        
//        {
//            max: 1000,
//            attrs: {
//                fill: "#97e766"
//            },
//            label: "Com menos que 1000 habitantes"
//        },
//        {
//            min: 1000,
//            max: 2500,
//            attrs: {
//                fill: "#7fd34d"
//            },
//            label: "Entre 1000 e 2500 habitantes"
//        },
//        {
//            min: 2500,
//            max: 5000,
//            attrs: {
//                fill: "#5faa32"
//            },
//            label: "Entre 2500 e 5000 habitantes"
//        },
//        {
//            min: 5000,
//            attrs: {
//                fill: "#3f7d1a"
//            },
//            label: "Mais que 5000 habitantes"
//        }]
//    }
//},
//areas: {';


if (!empty($bairros))
{        
    foreach ($bairros as $bairro):
        if ($bairro->code_name!=NULL)
        {
            $data .= <<<EOF
                    "$bairro->code_name":{
                        value: "$bairro->populacao",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">$bairro->nome </span><br />População: $bairro->populacao"},
                    },
EOF;
            
        }
    endforeach;
    
    $data .='}
    });
});';
}

if ( ! write_file('js/maps/requerimentos_por_bairro.js', $data))
{
     echo 'Unable to write the file';
}
else
{
     echo 'File written!';
}

function rgb2hex($rgb) {
   $hex = "#";
   $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

   return $hex; // returns the hex value including the number sign (#)
}

?>
