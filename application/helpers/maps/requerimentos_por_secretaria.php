<?php

/***** Requerimentos por secretaria *****/

$requerimentos_secretaria = $ci->requerimento_model->count_requerimentos_with_secretarias();

$data = <<<EOF
$(function() {
    var data = {
        
EOF;

foreach ($requerimentos_secretaria as $r_s)
{
    foreach ($r_s as $r_c)
    {
        $count = 0;
        foreach ($r_c as $r)
        {
            $count += $r->count_requerimentos;            
        }
        $max = max($count, $max);
    }
}

if (!empty($requerimentos_secretaria))
{
    // areas    
    $data .= '"0": { 
            "areas": {
                ';

        foreach ($bairros as $bairro)
        {
            $data .= '"'.$bairro->codename.'": {"text": {"content": ""}},
                ';
        }
        $data .= '
            }
        },
        ';
        
    foreach ($requerimentos_secretaria as $r_s)
    {
        foreach ($r_s as $id_sec => $r_c)
        {
            $bairro_cat = NULL;
            foreach ($r_c as $r_b)
            {
                $bairro_cat[$r_b->bairro_id] += $r_b->count_requerimentos;
            }

            $data .= '"' . $id_sec . '": { 
            "areas": {
                ';

            foreach ($bairros as $bairro)
            {
                if ($bairro_cat[$bairro->id])
                {
                    $data .= '"'. $bairro->codename .'": {
                    "value": '. $bairro_cat[$bairro->id] .',
                    "attrs": { fill: "'. rgb2hex(array(32 + (($max - $bairro_cat[$bairro->id]) * 82/$max),
                                                       74 + (($max - $bairro_cat[$bairro->id]) * 85/$max),
                                                       135 + (($max - $bairro_cat[$bairro->id]) * 72/$max))) .'"},
                    "text": { "content":  "'. $bairro_cat[$bairro->id] .'" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">'. $bairro->nome .'</span><br />Requerimentos : '. $bairro_cat[$bairro->id] .'"
                    }';

                    $data .= '
                }';
                    $data .= end($bairros)==$bairro ? '' : ',
                ';
                }   
                else
                {
                    $data .= '"'. $bairro->codename .'": {                    
                    "tooltip": {
                            "content": ""
                    }';

                    $data .= '
                }';
                    $data .= end($bairros)==$bairro ? '' : ',
                ';
                }
            }
            
            $data .= '
            }';
            $data .= '
        },
        ';
        }       
        
    }
    $data .= '};
        ';
}

$data .= <<<EOF
$("#secretaria").change(function() {
    value = $("#secretaria").val();

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

if ( ! write_file('js/maps/requerimentos_por_secretaria.js', $data))
{
     echo 'Unable to write the file';
}

/***** END - Requerimentos por secretaria - END *****/
?>
