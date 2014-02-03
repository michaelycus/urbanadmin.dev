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

    .mapLegend {
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

    .map {
        position:relative;
    }

</style>

<script src="<?php echo base_url(); ?>js/maps/raphael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/jquery.mapael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/cidade.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/requerimentos_por_bairro.js" charset="utf-8" ></script>


<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-stack"></i> Requerimentos por bairro</h1>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="maparea1">
                        <div class="map">
                            <span>Alternative content for the map</span>
                        </div>
                        <!--                        <div class="areaLegend">
                                                    <span>Alternative content for the legend</span>
                                                </div>-->
                    </div>

                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div><!-- End .col-lg-8  -->

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table cellpadding="0" cellspacing="0" border="0"
                           class="table table-striped table-bordered table-hover" id="table-mapa-requerimentos">
                        <thead><tr><th></th></tr></thead>
                        <tbody>
                        </tbody>
                    </table>
<!--                    <ul name="lista_requerimentos">
                    </ul>-->
                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div><!-- End .col-lg-8  -->
    </div><!-- End .row-fluid  -->
</div>

<?php
echo form_input(array('name' => 'id_bairro','id' => 'id_bairro', 'style' => 'visibility:hidden'));

//$this->load->model('requerimento_model');
//
//
//
//for($i=1; $i< 27; $i++)
//{
//    $requerimentos = $this->requerimento_model->get_requerimentos_by_bairro($i);
//    
//    echo $i . '<br />';
//    var_dump($requerimentos);
//}

?>

<script type="text/javascript" src="<?php echo base_url() . 'js/requerimentos.js'; ?>"></script>
<script type="text/javascript">
    var path = '<?php echo site_url(); ?>';
</script>