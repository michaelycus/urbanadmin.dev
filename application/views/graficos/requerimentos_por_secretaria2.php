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
    $i=0;
    foreach ($requerimentos_secretaria as $r_s)
    {
        if ($i==0)
        {
            $data .= '"0": { "areas": {';

            foreach ($bairros as $bairro)
            {
                $data .= '"'.$bairro->codename.'": {"text": {"content": ""}},';
            }
            $data .= '}},
                ';

            $i++;
        }

        if (!empty($r_s))
        {
            $data .= '"'. $i. '": { "areas": {';
            
            

            foreach ($r_s as $r_c)
            {
                $count = 0;
                foreach ($r_c as $r)
                {
                    $count += $r->count_requerimentos;
                    $nome_bairro = $r->nome_bairro;
                    $codename = $r->codename;
                }
                $data .= '"'. $codename .'": {
                    "value": '. $count .',
                    "attrs": { fill: "'. rgb2hex(array(32 + (($max - $count) * 82/$max),
                                                       74 + (($max - $count) * 85/$max),
                                                       135 + (($max - $count) * 72/$max))) .'"},
                    "text": { "content":  "'. $count .'" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">'. $nome_bairro .'</span><br />Requerimentos : '. $count .'"
                    }';

                $data .= '}';
                $data .= end($r_s)==$r_c ? '' : ',';
            }

            $data .= '}';
            $data .= '},
                ';
        }
        $i++;
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
