<?php

/***** Requerimentos por bairro *****/

$requerimentos_bairro = $ci->requerimento_model->count_requerimentos_with_bairros();

$max=0;

if (!empty($requerimentos_bairro))
{
    foreach ($requerimentos_bairro as $r_b):
        $max = max($r_b->count_requerimentos_bairro, $max);
    endforeach;
}

$segments = ($max > 10) ? 10 : $max;

$max++;

$data = <<<EOF
$(function() {
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            defaultArea: {
                attrs: {
                    fill: "#cadbed", stroke: "#204a87"
                },
                text : {
                    attrs: {
                        fill: "#ce5c00",
                        "font-weight": "bold"
                    },
                    attrsHover: {
                        fill: "#ce5c00",
                        "font-weight": "normal"
                    }
                }
            }
        },
        legend: {
            area: {
                title: "Requerimentos por bairro",
                slices: [
EOF;

$difR = 82 / $segments; // #729fcf
$difG = 85 / $segments; // to
$difB = 72 / $segments; // #204a87

for ($i=1; $i<=$segments; $i++)
{
    $data .= '{
                min: '. round( ($max/$segments)*$i - ($max/$segments) )  .',
                max: '. round( ($max/$segments)*$i ) .',
                attrs: {
                    fill: "'. rgb2hex(array(114 - $i * $difR, 159 - $i * $difG, 207 - $i * $difB )) .'"}
              },';
}

$data .=']
    }
},
areas: {';

if (!empty($requerimentos_bairro))
{
    foreach ($requerimentos_bairro as $r_b):
        if ($r_b->codename!=NULL)
        {
            $data .= <<<EOF
                    "$r_b->codename":{
                        value: "$r_b->count_requerimentos_bairro",
                        text: { content:  $r_b->count_requerimentos_bairro , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">$r_b->nome_bairro </span><br />Requerimentos: $r_b->count_requerimentos_bairro"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( $r_b->id_bairro ).change();
                            }
                        }
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

/***** END - Requerimentos por bairro - END *****/
?>
