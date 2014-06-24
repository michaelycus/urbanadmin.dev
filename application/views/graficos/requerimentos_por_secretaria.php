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
    .container {
        margin:auto;
        width:80%;
    }
    .map {
        position:relative;
    }
</style>

<script src="<?php echo base_url(); ?>js/maps/raphael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/jquery.mapael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/cidade.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/requerimentos_por_secretaria.js" charset="utf-8" ></script>

<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-stack"></i> Requerimentos por secretaria</h1>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">

                    <?php
                    // secretarias
                    echo '<div class="form-group">';
                    echo '<label for="secretaria" class="col-lg-2 control-label">Secretaria</label>';
                    echo '<div class="col-lg-5">';
                    echo '<select id="secretaria" name="secretaria" class="col-lg-10">';
                    echo '<option value="0">Escolha uma secretaria</option>';
                    foreach ($secretarias as $s)
                    {
                        echo '<option value="' . $s->id . '" ' . set_select('secretaria', $s->id) . '>' . $s->nome . '</option>';
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
        </div><!-- End .col-lg-8  -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table cellpadding="0" cellspacing="0" border="0"
                           class="table table-striped table-bordered table-hover" id="table-mapa-requerimentos-secretarias">
                        <thead><tr><th></th></tr></thead>
                        <tbody>
                        </tbody>
                    </table>
                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div><!-- End .col-lg-4  -->
    </div><!-- End .row-fluid  -->
</div>

<?php
echo form_input(array('name' => 'id_bairro','id' => 'id_bairro', 'style' => 'visibility:hidden'));
?>

<script type="text/javascript" src="<?php echo base_url() . 'js/requerimentos_secretarias.js'; ?>"></script>
<script type="text/javascript">
    var path = '<?php echo site_url(); ?>';
</script>

