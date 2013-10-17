<?php
$this->load->helper('file');

$codename_cidade = CODENAME_CIDADE;

/***** População por bairro ******/

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

if ( ! write_file('js/maps/populacao_por_bairro.js', $data))
{
     echo 'Unable to write the file';
}
else
{
     echo 'Arquivo populacao_por_bairro.js gerado!<br />';
}

/***** END - População por bairro - END ******/


/***** Requerimentos por bairro ******/

$max=0;
$segments = 10;

if (!empty($requerimentos_bairro))
{
    foreach ($requerimentos_bairro as $r_b):
        $max = max($r_b->count_requerimentos_bairro, $max);
    endforeach;    
}

$max = $max + 1;

$data = <<<EOF
$(function() {
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            width: 700,
            defaultArea: {
                attrs: {
                    fill: "#c9ffc9"
                }
            }
        },
        legend: {
            area: {
                display: true,
                title: "Requerimentos por bairro",
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

if (!empty($requerimentos_bairro))
{        
    foreach ($requerimentos_bairro as $r_b):
        if ($r_b->code_name!=NULL)
        {
            $data .= <<<EOF
                    "$r_b->code_name":{
                        value: "$r_b->count_requerimentos_bairro",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">$r_b->nome_bairro </span><br />Requerimentos: $r_b->count_requerimentos_bairro"},
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
     echo 'Arquivo requerimentos_por_bairro.js gerado!<br />';
}

/***** END - Requerimentos por bairro - END ******/

function rgb2hex($rgb) {
   $hex = "#";
   $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

   return $hex; // returns the hex value including the number sign (#)
}

?>