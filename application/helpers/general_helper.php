<?php
/**
 * Dump helper. Functions to dump variables to the screen, in a nicley formatted manner.
 * @author Joost van Veen
 * @version 1.0
 */
if (!function_exists('dump')) {
    function dump ($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable
        ob_start();
        var_dump($var);
        $output = ob_get_clean();

        // Add formatting
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';

        // Output
        if ($echo == TRUE) {
            echo $output;
        }
        else {
            return $output;
        }
    }
}

if (!function_exists('dump_exit'))
{
    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump ($var, $label, $echo);
        exit;
    }
}

if (!function_exists('generate_key'))
{
    function generate_key($ncaracteres) {
       $caracterespermitidos = "1234567890abcdefghijklmnopqrstuvwxyz";

       for ($i=0; $i < $ncaracteres; $i++) {
           $chave .= $caracterespermitidos{rand(0,35)};
       }
       return $chave;
    }
}

if (!function_exists('generate_charts'))
{
    function generate_charts()
    {
        $ci =& get_instance();

        $ci->load->model('requerimento_model');
        $ci->load->model('bairros_model');
        $ci->load->model('categorias_requerimento_model');
        $ci->load->model('requerente_model');

        $bairros = $ci->bairros_model->get_all();
        $requerimentos_bairro = $ci->requerimento_model->count_requerimentos_with_bairros();
        $cats_requerimento = $ci->categorias_requerimento_model->get_all();
        $requerimentos_categoria = $ci->requerimento_model->count_requerimentos_with_categorias();
        $vereadores = $ci->requerente_model->get_vereadores();
        $requerimentos_vereadores = $ci->requerimento_model->count_requerimentos_with_vereadores();
        $requerentes_bairro = $ci->requerente_model->count_requerentes_por_bairro();

        $_SESSION['requerimentos'] = $ci->requerimento_model->count_requerimentos_em_analise();

        $ci->load->helper('file');

        /***** População por bairro *****/

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
        else
        {
//             echo 'Arquivo populacao_por_bairro.js gerado!<br />';
        }

        /***** END - População por bairro - END *****/



        /***** Requerimentos por bairro *****/

        $max=0;

        if (!empty($requerimentos_bairro))
        {
            foreach ($requerimentos_bairro as $r_b):
                $max = max($r_b->count_requerimentos_bairro, $max);
            endforeach;
        }

        $segments = ($max > 10) ? 10 : $max;

        $max = $max + 1;

        $data = <<<EOF
        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    width: 700,
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
                        display: true,
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
//             echo 'Arquivo requerimentos_por_bairro.js gerado!<br />';
        }

        /***** END - Requerimentos por bairro - END *****/


        /***** Requerimentos por tipo *****/

        $data = <<<EOF
        $(function() {
            var data = {
EOF;

        foreach ($requerimentos_categoria as $r_c)
        {
            foreach ($r_c as $r)
            {
                $max = max($r->count_requerimentos, $max);
            }
        }

        if (!empty($requerimentos_categoria))
        {
            // areas
            $i=0;
            foreach ($requerimentos_categoria as $r_c)
            {
                if ($i==0)
                {
                    $data .= '"0": { "areas": {';

                    foreach ($bairros as $bairro)
                    {
                        $data .= '"'.$bairro->codename.'": {"text": {"content": ""}},';
                    }
                    $data .= '}},';

                    $i++;
                }

                if (!empty($r_c))
                {
                    $data .= '"'. $i. '": { "areas": {';

                    foreach ($r_c as $r)
                    {
                        $data .= '"'. $r->codename .'": {
                            "value": '. $r->count_requerimentos .',
                            "attrs": { fill: "'. rgb2hex(array(32 + (($max - $r->count_requerimentos) * 82/$max),
                                                               74 + (($max - $r->count_requerimentos) * 85/$max),
                                                               135 + (($max - $r->count_requerimentos) * 72/$max))) .'"},
                            "text": { "content":  "'. $r->count_requerimentos .'" , attrs: {fill:"#222"} },
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">'. $r->nome_bairro .'</span><br />Requerimentos : '. $r->count_requerimentos .'"
                            }';

                        $data .= '}';
                        $data .= end($r_c)==$r ? '' : ',';
                    }

                    $data .= '}';
                    $data .= '},';
                }
                $i++;
            }
            $data .= '};
                ';
        }

        $data .= <<<EOF
        $("#cat_requerimento").change(function() {
            value = $("#cat_requerimento").val();

              $(".maparea1").trigger('update', [data[0], {}, {}, {animDuration: 500}]);

              $(".maparea1").trigger('update', [data[value], {}, {}, {animDuration: 1000,resetPlots:true, resetAreas:true  }]);
          });

            // Mapael initialisation
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    width: 700,
                    defaultArea: {
                        attrs: {
                            fill: "#cadbed",
                            stroke: "#82bfec",
                            "stroke-width": 0.3
                        }
                    },
                    defaultPlot: {
                        text: {
                            attrs: {
                                fill: "#613b1e",
                                "font-weight": "bold"
                            },
                            attrsHover: {
                                fill: "#f99200",
                                "font-weight": "bold"
                            }
                        }
                    }
                },
                areas: data[0]['areas']

            });
        });
EOF;

        if ( ! write_file('js/maps/requerimentos_por_tipo.js', $data))
        {
             echo 'Unable to write the file';
        }
        else
        {
//             echo 'Arquivo requerimentos_por_tipo.js gerado!<br />';
        }


        /***** END - Requerimentos por tipo - END *****/


        /***** Requerimentos por vereador *****/

        $data = <<<EOF
        $(function() {
            var data = {
EOF;

        foreach ($requerimentos_vereadores as $r_c)
        {
            foreach ($r_c as $r)
            {
                $max = max($r->count_requerimentos, $max);
            }
        }

        if (!empty($requerimentos_vereadores))
        {
            // areas
            $data .= '"0": { "areas": {';

            foreach ($bairros as $bairro)
            {
                $data .= '"'.$bairro->codename.'": {"text": {"content": ""}},';
            }
            $data .= '}},';

            foreach ($requerimentos_vereadores as $key => $r_c)
            {
                if (!empty($r_c))
                {
                    $data .= '"'. $key. '": { "areas": {';

                    foreach ($r_c as $r)
                    {
                        $data .= '"'. $r->codename .'": {
                            "value": '. $r->count_requerimentos .',
                            "text": { "content":  "'. $r->count_requerimentos .'" , attrs: {fill:"#222"} },
                            "attrs": { fill: "'. rgb2hex(array(32 + (($max - $r->count_requerimentos) * 82/$max),
                                                               74 + (($max - $r->count_requerimentos) * 85/$max),
                                                               135 + (($max - $r->count_requerimentos) * 72/$max))) .'"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">'. $r->nome_bairro .'</span><br />Requerimentos : '. $r->count_requerimentos .'"
                            }';

                        $data .= '}';
                        $data .= end($r_c)==$r ? '' : ',';
                    }

                    $data .= '},';

                    $data .= '"plots": {';

                    foreach ($r_c as $r)
                    {
                        $data .= '"'. $r->codename .'": {
                            "value": '. $r->count_requerimentos;

                        $data .= '}';
                        $data .= end($r_c)==$r ? '' : ',';
                    }

                    $data .= '}';
                    $data .= '},';
                }
            }
            $data .= '};
                ';
        }

        $data .= <<<EOF
        $("#vereador").change(function() {
            value = $("#vereador").val();

              $(".maparea1").trigger('update', [data[0], {}, {}, {animDuration: 500}]);

              $(".maparea1").trigger('update', [data[value], {}, {}, {animDuration: 1000,resetPlots:true, resetAreas:true  }]);
          });

            // Mapael initialisation
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    width: 700,
                    defaultArea: {
                        attrs: {
                            fill: "#cadbed", stroke: "#204a87"
                        },
                        text : {
                            attrs: {
                                fill: "#eee",
                                "font-weight": "bold"
                            },
                            attrsHover: {
                                fill: "#204a87",
                                "font-weight": "normal"
                            }
                        }
                    },
                    defaultPlot: {
                        text: {
                            attrs: {
                                fill: "#613b1e",
                                "font-weight": "bold"
                            },
                            attrsHover: {
                                fill: "#f99200",
                                "font-weight": "bold"
                            }
                        }
                    }
                },
                areas: data[0]['areas']
            });
        });
EOF;

        if ( ! write_file('js/maps/requerimentos_por_vereador.js', $data))
        {
             echo 'Unable to write the file';
        }
        else
        {
//             echo 'Arquivo requerimentos_por_vereador.js gerado!<br />';
        }

        /***** END - Requerimentos por vereador - END *****/


        /***** Requerentes por bairro *****/

        $max=0;
        $segments = 5;

        if (!empty($requerentes_bairro))
        {
            foreach ($requerentes_bairro as $r_b):
                $max = max($r_b->count_requerentes, $max);
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
                        display: true,
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
        else
        {
//             echo 'Arquivo requerentes_por_bairro.js gerado!<br />';
        }

        /***** END - Requerentes por bairro - END *****/
    }
}

if (!function_exists('generate_custom_chart'))
{
    function generate_custom_chart($id)
    {
        $ci =& get_instance();

        $ci->load->model('bairros_model');
        $ci->load->model('graficos_customizados_model');

        $bairros = $ci->bairros_model->get_all();
        $chart = $ci->graficos_customizados_model->get($id);

        $chart_values = $ci->graficos_customizados_model->get_chart_values($id);

        $max=0;

        $ci->load->helper('file');

        if (!empty($chart_values))
        {
            foreach ($chart_values as $c_v):
                $max = max($c_v->valor, $max);
            endforeach;
        }

        $segments = ($max > 10) ? 10 : $max;

        $max = $max + 1;
        
        $hsl = get_static_color($chart->cor_grafico, 1);

        $data = <<<EOF
        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    width: 700,
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
                        display: true,
                        title: "Requerimentos por bairro"                     
EOF;

        $data .='
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
                    $data .= <<<EOF
                        "$bairro->codename":{
                            value: "$valor",
                            attrs: {
                                fill: "$hsl", stroke: "#204a87"
                            },
                            text: { content:  $valor , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">$bairro->nome </span><br />Valor: $valor"},
                        },
EOF;

                }
                else
                {
                    $data .= <<<EOF
                        "$bairro->codename":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">$bairro->nome </span><br /> - Valor não informado -"},
                        },
EOF;
                }

            $i++;
            endforeach;

            $data .='}
            });
        });';
        }

        if ( ! write_file('files/custom_charts/chart_'.$id.'.js', $data))
        {
             echo 'Unable to write the file';
        }
    }
}

function rgb2hex($rgb) {
    $hex = "#";
    $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
    $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
    $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

    return $hex; // returns the hex value including the number sign (#)
 }

 function get_static_color($color, $part, $max=NULL, $value)
 {
     if ($color == GRAFICO_COR_AMARELO)
     {
         $p1 = '53, 98';
     }
     elseif ($color == GRAFICO_COR_VERDE)
     {
         $p1 = '90, 75';
     }
     elseif ($color == GRAFICO_COR_LARANJA)
     {
         $p1 = '36, 97';
     }
     elseif ($color == GRAFICO_COR_AZUL)
     {
         $p1 = '210, 49';
     }
     elseif ($color == GRAFICO_COR_ROXO)
     {
         $p1 = '306, 22';
     }
     elseif ($color == GRAFICO_COR_BEGE)
     {
         $p1 = '37, 75';
     }
     elseif ($color == GRAFICO_COR_VERMELHO)
     {
         $p1 = '0, 100';
     }
     elseif ($color == GRAFICO_COR_BRANCO)
     {
         $p1 = '60, 6';
     }

     if ($part == 1) // elemento sem valor
         $p2 = '84';
     elseif ($part == 2) // inicio do gradiente
         $p2 = '75';
     elseif ($part == 3) // fim do gradiente
         $p2 = '45';

     if ($max)
     {
         $p2 = 75 - (30 * $value / $max);                 
     }

     return 'hsl('.$p1.', '. $p2.')';
 }

// function get_color($color, $part)
// {
//     if ($color == GRAFICO_COR_AMARELO)
//     {
//         if ($part == 1)
//             return 'hsl(53°, 98%, 81%)';
//         elseif ($part == 2)
//             return 'hsl(53°, 98%, 68%)';
//         elseif ($part == 3)
//             return 'hsl(53°, 98%, 42%)';
//     }
//     elseif ($color == GRAFICO_COR_VERDE)
//     {
//         if ($part == 1)
//             return 'hsl(90°, 75%, 82%)';
//         elseif ($part == 2)
//             return 'hsl(90°, 75%, 61%)';
//         elseif ($part == 3)
//             return 'hsl(90°, 75%, 36%)';
//     }
//     elseif ($color == GRAFICO_COR_VERDE)
//     {
//         if ($part == 1)
//             return 'hsl(90°, 75%, 82%)';
//         elseif ($part == 2)
//             return 'hsl(90°, 75%, 61%)';
//         elseif ($part == 3)
//             return 'hsl(90°, 75%, 36%)';
//     }
//     elseif ($color == GRAFICO_COR_LARANJA)
//     {
//         if ($part == 1)
//             return 'hsl(36°, 97%, 83%)';
//         elseif ($part == 2)
//             return 'hsl(36°, 97%, 61%)';
//         elseif ($part == 3)
//             return 'hsl(36°, 97%, 36%)';
//     }
//
//     switch ($color)
//     {
//         case GRAFICO_COR_AMARELO:
//             switch ($part)
//             {
//                 case 1:
//                     $select = 'hsl(53°, 98%, 81%)';
//                     break;
//
//                 case 2:
//                     $select = 'hsl(53°, 98%, 68%)';
//                     break;
//
//                 case 3:
//                     $select = 'hsl(53°, 98%, 42%)';
//                     break;
//             }
//             break;
//
//         case GRAFICO_COR_AMARELO:
//             switch ($part)
//             {
//                 case 1:
//                     $select = 'hsl(53°, 98%, 81%)';
//                     break;
//
//                 case 2:
//                     $select = 'hsl(53°, 98%, 68%)';
//                     break;
//
//                 case 3:
//                     $select = 'hsl(53°, 98%, 42%)';
//                     break;
//             }
//             break;
//
//         case GRAFICO_COR_AMARELO:
//             switch ($part)
//             {
//                 case 1:
//                     $select = 'hsl(53°, 98%, 81%)';
//                     break;
//
//                 case 2:
//                     $select = 'hsl(53°, 98%, 68%)';
//                     break;
//
//                 case 3:
//                     $select = 'hsl(53°, 98%, 42%)';
//                     break;
//             }
//             break;
//     }
// }


 /*

- AMARELO -
RGB: 254 243 159
HSL: 53° 98% 81%
Hex: #FEF39F

Hex: #FDEB5C
HSL: 53° 98% 68%
RGB: 253 235 92

Hex: #D4BC03
HSL: 53° 97% 42%
RGB: 212 188 3

- VERDE -
Hex: #D0F3AE
HSL: 90° 74% 82%
RGB: 208 243 174

Hex: #9BE652
HSL: 90° 75% 61%
RGB: 155 230 82

Hex: #5BA117
HSL: 90° 75% 36%
RGB: 91 161 23

- LARANJA -
Hex: #FEDBA7
HSL: 36° 98% 83%
RGB: 254 219 167

Hex: #FDC167
HSL: 36° 97% 70%
RGB: 253 193 103

Hex: #EC8F03
HSL: 36° 97% 47%
RGB: 236 143 3

- AZUL -
Hex: #E1EBF5
HSL: 210° 50% 92%
RGB: 225 235 245

Hex: #BED4E9
HSL: 209° 49% 83%
RGB: 190 212 233

Hex: #4F8AC3
HSL: 209° 49% 54%
RGB: 79 138 195

- ROXO -
Hex: #E4D6E3
HSL: 304° 21% 87%
RGB: 228 214 227

Hex: #CCB0C9
HSL: 306° 22% 75%
RGB: 204 176 201

Hex: #895884
HSL: 306° 22% 44%
RGB: 137 88 132

- BEGE -
Hex: #F5DEBA
HSL: 37° 75% 85%
RGB: 245 222 186

Hex: #EFCB92
HSL: 37° 74% 75%
RGB: 239 203 146

Hex: #E2A038
HSL: 37° 75% 55%
RGB: 226 160 56

- VERMELHO -

Hex: #FFB3B3
HSL: 0° 100% 85%
RGB: 255 179 179

Hex: #FF8282
HSL: 0° 100% 75%
RGB: 255 130 130

Hex: #FF1313
HSL: 0° 100% 54%
RGB: 255 19 19

  */