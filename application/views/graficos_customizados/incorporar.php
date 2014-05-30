
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="pt">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $chart->titulo; ?></title>
        
        <link href="<?php echo base_url(); ?>css/bootstrap/bootstrap.css" rel="stylesheet" />
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>        
        <script src="<?php echo base_url(); ?>js/maps/raphael.js" charset="utf-8" ></script>
        <script src="<?php echo base_url(); ?>js/maps/jquery.mapael.js" charset="utf-8" ></script>
        <script src="<?php echo base_url(); ?>js/maps/cidade.js" charset="utf-8" ></script>
        <script src="<?php echo base_url(); ?>files/custom_charts/<?php echo $chart->code; ?>.js" charset="utf-8" ></script>
        
         <!-- Tables plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/tables/sorttable.js" charset="utf-8" ></script>
        
                
        <script>
        function getURLParameter(name) {
            return decodeURI(
                    (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
            );
        }	

        $(document).ready(function(){		
            $(".desc").hide();

            if (getURLParameter("desc")=='yes')
            {	
                $(".desc").show();
            }
            if (getURLParameter("fullscreen")=='yes')
            {	                
                $("span.maximizer").hide();
            }
            
            $('img.max').hide();
            
            $('div#info').mouseenter(function() {
               $('img.max').show(150);
            });
            $('div#info').mouseleave(function() {
               $('img.max').hide(150);
            });
        });

        </script>
                
        <style type="text/css">
            h1, h2, h3, h4, h5, h6 {
                margin: 0;
                font-family: 'Open Sans', sans-serif;
                font-weight: 700;
                text-rendering: optimizelegibility;
                margin-bottom: 10px;
                color: #333333;
                font-weight: bold;
                font-size: 18px;
                line-height: 27px;
                }

        .mapTooltip {
                position:fixed;
                background-color : #fff;
                moz-opacity:0.70;
                opacity: 0.70;
                filter:alpha(opacity=70);
                border-radius:10px;
                padding : 10px;
                z-index: 1000;
                max-width: 200px;
                display:none;
                color:#343434;
        }
        
        .container{
            width:99%;
            margin: 0 auto;
            position:fixed;
        }
        
        .container div {
            display: inline-block;
            width:99%;
        }
        
        div.left {
            width:<?php echo ($chart->dados_tabela) ? '69': '98'; ?>%;
            float:left;
        }

        div.right{
            width:<?php echo ($chart->dados_tabela) ? '29': '1'; ?>%;
            margin-top: 20px;
        }        
        
        /* Sortable tables */
        table.sortable thead {
            font-weight: bold;
            cursor: pointer;
        }
        
        table.sortable th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):after { 
       content: " \25B4\25BE" }
           
        .table thead > tr > th,
        .table tbody > tr > th,
        .table tfoot > tr > th,
        .table thead > tr > td,
        .table tbody > tr > td,
        .table tfoot > tr > td {
            padding: 4px;
            line-height: 0.8;
            vertical-align: top;
            border-top: 1px solid #dddddd;
        }

       </style> 
    </head>
    <body>
        <div class="container">
            <div class="left">
                <div class="maparea1">
                    <h3 class="desc"><?php echo $chart->titulo; ?></h3>
                    <?php
                    if ($chart->observacoes!=NULL)
                    {
                        echo '<p class="desc">'.$chart->observacoes.'</p>';
                    }
                    ?>
                    <div id="info">
                        <span class="pull-right maximizer">
                            <img src="<?php echo base_url() . 'images/fill.png'?>">
                            <?php echo anchor('graficos_customizados/incorporar/'.$chart->code.'/?desc=yes&fullscreen=yes', '<img src="'. base_url() . 'images/max.png" title="Maximizar janela" class="max">', 'target="_blank"')?>
                        </span>
                        <div class="map">
                            <span>Alternative content for the map</span>                
                        </div>

                        <span class="pull-right"><img src="<?php echo base_url() . 'images/logodark_inc.png'?>"></span>

                    </div>

                    <?php
                    if ($chart->fonte!=NULL)
                    {
                        echo '<p class="desc"><i>Fonte: '.$chart->fonte.'</i></p>';
                    }
                    ?>
                </div>
            </div>
            
            <div class="right">
                <?php
                if ($chart->dados_tabela)
                {
                ?>
                    <table style="width:100%;" class="table sortable">
                        <thead>
                            <th>Bairro</th>
                            <th class="sorttable_numeric">Valor</th>
                        </thead>
                        
                        <?php
                        $soma = 0;

                        $i = 1;
                        foreach ($chart_values as $c_v):
                            $bairro = $bairros[$i];
                            $valor = ($c_v->valor!=NULL) ? $c_v->valor : 0;
                            if ($c_v->valor!=NULL)
                            {
                                $soma += $valor;
                                
                                switch ($chart->formato)
                                {
                                    case GRAFICO_FORMATO_SEM:
                                        $valor_formatado = number_format($valor, 0, ",", ".");
                                        $somaFinal = number_format($soma, 0, ",", ".");
                                        break;

                                    case GRAFICO_FORMATO_PERCENTO:
                                        $valor_formatado = number_format($valor, 1, ",", ".").'%';
                                        $somaFinal = number_format($soma, 1, ",", ".").'%';
                                        break;

                                    case GRAFICO_FORMATO_REAIS:
                                        $valor_formatado = 'R$ '. number_format($valor, 2, ",", ".");
                                        $somaFinal = 'R$ '. number_format($soma, 2, ",", ".");
                                        break;

                                    case GRAFICO_FORMATO_DOLAR:
                                        $valor_formatado = '$ '. number_format($valor, 2, ",", ".");
                                        $somaFinal = '$ '. number_format($soma, 2, ",", ".");
                                        break;

                                    default:
                                        $valor_formatado = number_format($valor, 1, ",", ".");
                                        $somaFinal = number_format($soma, 1, ",", ".");
                                        break;
                                }

                                echo '<tr>';
                                echo '<td><small>' . $bairro->nome . '</small></td>';
                                echo '<td sorttable_customkey="'.$valor.'"><small>' . $valor_formatado . '</small></td>
                                    ';
                                echo '</tr>';
                            }

                        $i++;
                        endforeach;

                        ?>
                        <tfoot>
                            <tr>
                                <td><small>Total</small></td>
                                <td><small><?php echo $somaFinal;?></small></td>
                            </tr>
                        </tfoot>
                    </table>
                <?php
                }
                ?>
            </div>
        </div>        
        
    </body>
</html>