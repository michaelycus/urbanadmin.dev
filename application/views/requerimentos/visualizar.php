<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-search"></i> Visualizar Requerimento</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <dl class="dl-horizontal">
                        <?php
                        echo '<dt>Descrição</dt>';
                        echo '<dd>' . $requerimento->descricao . '</dd>';

                        echo '<dt>Bairro</dt>';
                        echo '<dd>' . $bairro->nome . '</dd>';

                        echo '<dt>Rua</dt>';
                        echo '<dd>' . $rua->nome . '</dd>';

                        echo '<dt>Tipo Requerimento</dt>';
                        echo '<dd>' . $cats_requerimento[$requerimento->cat_requerimento]->nome . '</dd>';

                        echo '<dt>Solicitante</dt>';
                        echo '<dd>' . $solicitante->nome . '</dd>';

                        echo '<dt>Telefone</dt>';
                        echo '<dd>' . $solicitante->telefone . '</dd>';

                        echo '<dt>Requerente</dt>';
                        echo '<dd>' . $requerente->nome . '</dd>';

                        echo '<dt>Data</dt>';
                        echo '<dd>' . $this->form_validation->convert_sql_to_human($requerimento->data_requerimento) . '</dd>';

                        if ($requerimento->expediente != 0)
                        {
                            echo '<dt>Expediente</dt>';
                            echo '<dd>' . $requerimento->expediente . '/' . $requerimento->ano_expediente . '</dd>';
                        }
                        
                        ?>
                        
                    </dl>
                        
                    <?php
 PAEKIII AI
                    echo '<hr>';

                    echo '<div id="gallery">';
                    if ($requerimento->anexo_1 != NULL)
                        echo '<a data-gallery="gallery" href="' . base_url() . 'uploads/' . $requerimento->anexo_1 . '">' .
                        '<img src="' . base_url() . 'uploads/thumbs/' . $requerimento->anexo_1 . '"></a>';
                    if ($requerimento->anexo_2 != NULL)
                        echo '<a data-gallery="gallery" href="' . base_url() . 'uploads/' . $requerimento->anexo_2 . '">' .
                        '<img src="' . base_url() . 'uploads/thumbs/' . $requerimento->anexo_2 . '"></a>';
                    if ($requerimento->anexo_3 != NULL)
                        echo '<a data-gallery="gallery" href="' . base_url() . 'uploads/' . $requerimento->anexo_3 . '">' .
                        '<img src="' . base_url() . 'uploads/thumbs/' . $requerimento->anexo_3 . '"></a>';
                    echo '</div>';

                    echo form_input(array('name' => 'id_bairro','id' => 'id_bairro', 'style' => 'visibility:hidden'));

                    echo anchor('requerimentos/editar_requerimento/'.$requerimento->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn  btn-primary'));
                    ?>

                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div><!-- End .col-lg-8  -->

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="maparea1">
                        <div class="map">
                            <span>Alternative content for the map</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End .row-fluid  -->
</div>

<link href="<?php echo base_url() ?>js/plugins/misc/gallery/bootstrap-image-gallery.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>js/plugins/misc/gallery/magnific-popup.css" rel="stylesheet" />

<!-- Misc plugins -->
<script src="<?php echo base_url() ?>js/plugins/misc/gallery/load-image.min.js"></script>
<script src="<?php echo base_url() ?>js/plugins/misc/gallery/bootstrap-image-gallery.min.js"></script>
<script src="<?php echo base_url() ?>js/plugins/misc/gallery/jquery.magnific-popup.min.js"></script>

<script src="<?php echo base_url(); ?>js/maps/raphael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/jquery.mapael.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/cidade.js" charset="utf-8" ></script>
<script src="<?php echo base_url(); ?>js/maps/bairros.js" charset="utf-8" ></script>

<script type="text/javascript">
    $(document).ready(function()
    {
        function updateMap() {
            $('#id_bairro').val(<?php echo ($bairro->id) ?>).change();
        }
        // use setTimeout() to execute
        setTimeout(updateMap, 1000);

        $('#gallery').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery: {
                enabled: true
            },
        });
    });
</script>

