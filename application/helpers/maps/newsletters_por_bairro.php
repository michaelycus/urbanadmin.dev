<?php

/***** Newsletters por bairro *****/

$newsletters_bairro = $ci->newsletter_model->count_newsletter_por_bairro();

$max=0;
$segments = 5;

if (!empty($newsletters_bairro))
{
    foreach ($newsletters_bairro as $r_b):
        $max = max($r_b->count_newsletters, $max);
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
                title: "Newsletters por bairro",
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

if (!empty($newsletters_bairro))
{
    foreach ($newsletters_bairro as $r_b):
        if ($r_b->codename!=NULL)
        {
            $data .= <<<EOF
                    "$r_b->codename":{
                        value: "$r_b->count_newsletters",
                        text: { content:  $r_b->count_newsletters , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">$r_b->nome_bairro </span><br />Newsletters: $r_b->count_newsletters"},
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

if ( ! write_file('js/maps/newsletters_por_bairro.js', $data))
{
     echo 'Unable to write the file';
}

/***** END - Newsletters por bairro - END *****/
?>
