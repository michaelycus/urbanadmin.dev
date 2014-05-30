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

    .zoomIn, .zoomOut {
        background-color:#fff;
        border:1px solid #ccc;
        color:#000;
        width:15px;
        height:15px;
        line-height: 15px;
        text-align:center;
        border-radius:3px;
        cursor:pointer;
        position:absolute;
        top : 10px;
        font-weight:bold;
        left : 10px;

        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -o-user-select: none;
        user-select: none;
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
<script src="<?php echo base_url(); ?>js/maps/requerentes_por_bairro.js" charset="utf-8" ></script>

<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-people"></i> Requerentes por bairro</h1>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="maparea1">
                        <div class="map">
                            <span>Alternative content for the map</span>
                        </div>
                        <!--<div class="areaLegend">
                            <span>Alternative content for the legend</span>
                        </div>-->
                    </div>

                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div><!-- End .col-lg-6  -->
        
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table cellpadding="0" cellspacing="0" border="0"
                           class="table table-striped table-bordered table-hover" id="table-mapa-requerentes">
                        <thead><tr><th></th></tr></thead>
                        <tbody>
                        </tbody>
                    </table>
                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div>
        
    </div><!-- End .row-fluid  -->
</div>


<?php
echo form_input(array('name' => 'id_bairro','id' => 'id_bairro', 'style' => 'visibility:hidden'));
?>

<script type="text/javascript" src="<?php echo base_url() . 'js/requerentes_bairro.js'; ?>"></script>
<script type="text/javascript">
    var path = '<?php echo site_url(); ?>';
</script>