<?php
$this->load->helper('file');

$codename_cidade = CODENAME_CIDADE;

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
        if ($bairro->code_name!=NULL)
        {
            $data .= <<<EOF
                    "$bairro->code_name":{
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
     echo 'Arquivo populacao_por_bairro.js gerado!<br />';
}

/***** END - População por bairro - END *****/



/***** Requerimentos por bairro *****/

$max=0;
$segments = 10;

if (!empty($requerimentos_bairro))
{
    foreach ($requerimentos_bairro as $r_b):
        $max = max($r_b->count_requerimentos_bairro, $max);
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
                    fill: "#c9ffc9"
                }
            }
        },
        legend: {
            area: {
                display: true,
                title: "Requerimentos por bairro",
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

if (!empty($requerimentos_bairro))
{
    foreach ($requerimentos_bairro as $r_b):
        if ($r_b->code_name!=NULL)
        {
            $data .= <<<EOF
                    "$r_b->code_name":{
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
     echo 'Arquivo requerimentos_por_bairro.js gerado!<br />';
}

/***** END - Requerimentos por bairro - END *****/



/***** Requerimentos por tipo *****/

$data = <<<EOF
$(function() {
    var data = {
EOF;


if (!empty($requerimentos_categoria))
{
    // areas
    $i=1;
    foreach ($requerimentos_categoria as $r_c)
    {
        if (!empty($r_c))
        {
            $data .= '"'. $i. '": { "areas": {';

            foreach ($r_c as $r)
            {
                $data .= '"'. $r->codename .'": {
                    "value": '. $r->count_requerimentos .',
                    "text": { "content":  "'. $r->count_requerimentos .'" , attrs: {fill:"#222"} },
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
        $i++;
    }
    $data .= '};
        ';
    
}

$data .= <<<EOF
$("#cat_requerimento").change(function() {
    value = $("#cat_requerimento").val();
        
        var deletedAreas = ["conventos", "sao_bento", "floresta", "santo_antonio", "nacoes", "conservas", "jardim_do_cedro", "moinhos", "moinhos_dagua",
            "centro", "hidraulica", "americano", "montanha", "bom_pastor", "alto_do_parque", "carneiros", "universitario", "sao_cristovao", "santo_andre", "campestre", "igrejinha",
            "centenario", "imigrante", "florestal"];
        
        var updatedOptions = {'areas' : {}, 'plots' : {}};
        
        for (var i=0; i<deletedAreas.length; i++)
        { 
            updatedOptions.areas[deletedAreas[i]] = { "text": { "content": "" } };
        }

        $(".maparea1").trigger('update', [updatedOptions, {}, {}, {animDuration: 100}]);
        
      $(".maparea1").trigger('update', [data[value], {}, {}, {animDuration: 1000,resetPlots:true, resetAreas:true  }]);
  });

    // Mapael initialisation
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            width: 700,
            defaultArea: {
                attrs: {
                    fill: "#99e",
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
        areas: data[5]['areas']
    });
});
EOF;

if ( ! write_file('js/maps/requerimentos_por_tipo.js', $data))
{
     echo 'Unable to write the file';
}
else
{
     echo 'Arquivo requerimentos_por_tipo.js gerado!<br />';
}


/***** END - Requerimentos por tipo - END *****/


function rgb2hex($rgb) {
   $hex = "#";
   $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

   return $hex; // returns the hex value including the number sign (#)
}

?>