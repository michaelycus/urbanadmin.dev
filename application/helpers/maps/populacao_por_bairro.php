<?php
/***** População por bairro *****/

$max=0;
$segments = 20;

if (!empty($bairros))
{
    foreach ($bairros as $bairro):
        $max = max($bairro->populacao, $max);
    endforeach;
}

$max++;

$data = <<<EOF
$(function() {
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            width: 700
        },
        legend: {
            area: {
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
        if ($bairro->codename!=NULL)
        {
            $data .= <<<EOF
                    "$bairro->codename":{
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

/***** END - População por bairro - END *****/
?>
