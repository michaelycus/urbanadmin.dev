<style type="text/css">
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

    h1 {
        font-size:30px;
        color:#3d3d3d;
        margin:auto;
        margin-top:50px;
    }

    h2 {
        font-size:22px;
        color:#3d3d3d;
        margin-top:50px;
    }

    .container {
        margin:auto;
        width:80%;
    }

    .zoomOut {
        top:30px;
    }

    .map {
        position:relative;
    }

</style>

<script src="<?php echo base_url(); ?>js/maps/raphael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/jquery.mapael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/cidade.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>files/custom_charts/<?php echo $chart->code; ?>.js" charset="utf-8" ></script>

<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-wand"></i>Gráfico: <?php echo $chart->titulo; ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="maparea1">
                        <h3><?php echo $chart->titulo; ?></h3>
                        <?php
                        if ($chart->observacoes!=NULL)
                        {
                            echo '<p>'.$chart->observacoes.'</p>';
                        }
                        ?>
                        <div class="map">
                            <span>Alternative content for the map</span>
                        </div>

                        <?php
                        if ($chart->fonte!=NULL)
                        {
                            echo '<p><i>Fonte: '.$chart->fonte.'</i></p>';
                        }
                        ?>
                    </div>
                    
                    <hr>
                    
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-1 control-label" for="normal">Incorporar</label>
                            <div class="col-lg-5">
                                <textarea class="form-control" id="textarea" rows="3"><iframe width="640" height="640" src="<?php echo base_url(); ?>graficos_customizados/incorporar/<?php echo $chart->code; ?>?desc=yes" frameborder="0"></iframe>
                                </textarea>
                            </div>
                        </div>
                    </form>


                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div><!-- End .col-lg-6  -->
    </div><!-- End .row-fluid  -->
</div>