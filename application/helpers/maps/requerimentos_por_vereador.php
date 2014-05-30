<?php

/***** Requerimentos por vereador *****/

$requerimentos_vereadores = $ci->requerimento_model->count_requerimentos_with_vereadores();

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

/***** END - Requerimentos por vereador - END *****/
?>
