
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="pt">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $chart->titulo; ?></title>
                
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>        
        <script src="<?php echo base_url(); ?>js/maps/raphael.js" charset="utf-8" ></script>
        <script src="<?php echo base_url(); ?>js/maps/jquery.mapael.js" charset="utf-8" ></script>
        <script src="<?php echo base_url(); ?>js/maps/cidade.js" charset="utf-8" ></script>
        <script src="<?php echo base_url(); ?>files/custom_charts/<?php echo $chart->code; ?>.js" charset="utf-8" ></script>
                
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
        </style>        
    </head>
    <body>
        <div class="maparea1">
            <h3 class="desc"><?php echo $chart->titulo; ?></h3>
            <?php
            if ($chart->observacoes!=NULL)
            {
                echo '<p class="desc">'.$chart->observacoes.'</p>';
            }
            ?>
            <div class="map">
                <span>Alternative content for the map</span>
            </div>

            <?php
            if ($chart->fonte!=NULL)
            {
                echo '<p class="desc"><i>Fonte: '.$chart->fonte.'</i></p>';
            }
            ?>
        </div>
    </body>
</html>