<?php

/***** Requerimentos por tipo *****/

$requerimentos_categoria = $ci->requerimento_model->count_requerimentos_with_categorias();

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

/***** END - Requerimentos por tipo - END *****/
?>
