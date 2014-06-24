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
    .map {
        position:relative;
    }
</style>

<script src="<?php echo base_url(); ?>js/maps/raphael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/jquery.mapael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/cidade.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/requerimentos_por_situacao.js" charset="utf-8" ></script>

<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-stack"></i> Requerimentos por tipo</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <?php
                    echo '<div class="form-group">';
                    echo '<label for="situacao" class="col-lg-2 control-label">Situação</label>';
                    echo '<div class="col-lg-5">';
                    echo '<select id="situacao" name="situacao" class="col-lg-10">';
                    
                    $status = array('Em análise', 'Analisado', 'Protocolado', 'Concluído');
                    
                    $i = 0;
                    echo '<option value="-1">Escolha uma categoria</option>';
                    foreach ($status as $s)
                    {
                        echo '<option value="' . $i . '">' . $s . '</option>';
                        $i++;
                    }
                    
                    echo '</select>';
                    echo '</div>';
                    echo '</div><br /><hr><br />';
                    ?>

                    <div class="maparea1">
                        <div class="map">
                            <span>Alternative content for the map</span>
                        </div>
                    </div>

                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div><!-- End .col-lg-6  -->
    </div><!-- End .row-fluid  -->
</div>

