<?php

if (!empty($chart_values))
{
    foreach ($chart_values as $c_v):
        $max = max($c_v->valor, $max);
    endforeach;
}

$segments = ($max > 10) ? 10 : $max;

$max = $max + 1;

$hsl = get_static_color($chart->cor_grafico, 1);

$data_js = <<<EOF
$(function() {
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            defaultArea: {
                attrs: {
                    fill: "$hsl", stroke: "#204a87"
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
                title: "Requerimentos por bairro"
EOF;

$data_js .='
    }
},
areas: {';

if (!empty($chart_values))
{
    $i = 1;
    foreach ($chart_values as $c_v):
        $bairro = $bairros[$i];
        $valor = ($c_v->valor!=NULL) ? $c_v->valor : 0;
        if ($c_v->valor!=NULL)
        {
            $hsl = get_static_color($chart->cor_grafico, 0, $max, $valor);

            switch ($chart->formato)
            {
                case GRAFICO_FORMATO_SEM:
                    $valor_formatado = number_format($valor, 0, ",", ".");
                    break;

                case GRAFICO_FORMATO_PERCENTO:
                    $valor_formatado = number_format($valor, 1, ",", ".").'%';
                    break;

                case GRAFICO_FORMATO_REAIS:
                    $valor_formatado = 'R$ '. number_format($valor, 2, ",", ".");
                    break;

                case GRAFICO_FORMATO_DOLAR:
                    $valor_formatado = '$ '. number_format($valor, 2, ",", ".");
                    break;

                default:
                    $valor_formatado = number_format($valor, 1, ",", ".");
                    break;
            }

            $valor_bairro = $valor_formatado;

            if ($chart->dados_grafico==0)
                $valor_bairro = '';

            $data_js .= <<<EOF
                "$bairro->codename":{ 
                   value: "$valor",
                    attrs: {
                        fill: "$hsl", stroke: "#204a87"
                    },
                    text: { content:  "$valor_bairro" , attrs: {fill:"#222"} },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">$bairro->nome </span><br />Valor: $valor_formatado"},
                },
EOF;

        }
        else
        {
            $data_js .= <<<EOF
                "$bairro->codename":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">$bairro->nome </span><br /> - Valor não informado -"},
                },
EOF;
        }

    $i++;
    endforeach;

    $data_js .='}
    });
});';
}

if ( ! write_file('files/custom_charts/'.$chart->code.'.js', $data_js))
{
     echo 'Unable to write the custom chart';
}
?>
