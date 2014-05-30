<?php

/***** Requerentes por bairro *****/

$requerentes_bairro = $ci->requerente_model->count_requerentes_por_bairro();

$max=0;
$segments = 5;

if (!empty($requerentes_bairro))
{
    foreach ($requerentes_bairro as $r_b):
        $max = max($r_b->count_requerentes, $max);
    endforeach;
}

$max++;

$data = <<<EOF
$(function() {
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            width: 700,
            defaultArea: {
                attrs: {
                    fill: "#fce94f", stroke: "#c4a000"
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
                title: "Requerentes por bairro",
                slices: [
EOF;

$difA = 41 / $segments; // #edd400
$difB = 52 / $segments; // #c4a000

for ($i=1; $i<=$segments; $i++)
{
    $data .= '{
                min: '. round( ($max/$segments)*$i - ($max/$segments) )  .',
                max: '. round( ($max/$segments)*$i ) .',
                attrs: {
                    fill: "'. rgb2hex(array(237 - $i * $difA, (212 - $difB * $i), 0) ) .'"}
              },';
}

$data .=']
    }
},
areas: {';

if (!empty($requerentes_bairro))
{
    foreach ($requerentes_bairro as $r_b):
        if ($r_b->codename!=NULL)
        {
            $data .= <<<EOF
                    "$r_b->codename":{
                        value: "$r_b->count_requerentes",
                        text: { content:  $r_b->count_requerentes , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">$r_b->nome_bairro </span><br />Requerentes: $r_b->count_requerentes"},
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

if ( ! write_file('js/maps/requerentes_por_bairro.js', $data))
{
     echo 'Unable to write the file';
}

/***** END - Requerentes por bairro - END *****/
?>
