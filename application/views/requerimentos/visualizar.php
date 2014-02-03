<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-search"></i> Visualizar Requerimento</h1>
    </div>

    <div class="row">
        <div class="col-lg-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4><i class="icon16 i-resize"></i>Informações</h4>
                            <dl class="dl-horizontal">
                                <?php
                                echo '<dt>Descrição</dt>';
                                echo '<dd><pre>' . $requerimento->descricao . '</pre></dd>';
                                
                                echo '<dt></dt><dd><div id="original"><a href="#"><small>(ver original)</a></small></div></dd>';
                                
                                echo '<div id="toggle_original">';
                                echo '<dt>Original</dt>';
                                echo '<dd><pre>' . $requerimento->descricao_original . '</pre></dd>';
                                echo '</div>';

                                echo '<dt>Bairro</dt>';
                                echo '<dd>' . $bairro->nome . '</dd>';

                                echo '<dt>Rua</dt>';
                                echo '<dd>' . $rua->nome . '</dd>';

                                echo '<dt>Tipo Requerimento</dt>';
                                echo '<dd>' . $cats_requerimento[$requerimento->cat_requerimento]->nome . '</dd>';

                                echo '<dt>Solicitante</dt>';
                                echo '<dd>' . anchor('requerentes/visualizar/'.$solicitante->id, $solicitante->nome) . '</dd>';

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

                                echo '<dt>Situação</dt>';
                                echo '<dd>' .
                                        ($requerimento->situacao==REQUERIMENTO_SITUACAO_EM_ANALISE ?
                                      '<img src="'.base_url().'images/retornar_situacao_d.png"> ' :
                                      anchor('requerimentos/retornar_situacao/'.$requerimento->id.'/'.$requerimento->situacao,
                                          '<img src="'.base_url().'images/retornar_situacao.png"> ' )).
                                        '<img src="'.base_url().'images/situacao_'.$requerimento->situacao.'.png"> '.
                                        ($requerimento->situacao==REQUERIMENTO_SITUACAO_RESOLVIDO ?
                                      '<img src="'.base_url().'images/avancar_situacao_d.png">':
                                      ($requerimento->situacao==REQUERIMENTO_SITUACAO_ANALISADO ?
                                            '<img src="'.base_url().'images/avancar_situacao.png" style="cursor: pointer;" onclick="expediente(\''.base_url().'\','.$requerimento->id.')">' :
                                          anchor('requerimentos/avancar_situacao/'.$requerimento->id.'/'.$requerimento->situacao,
                                            '<img src="'.base_url().'images/avancar_situacao.png">') ) ).
                                     '</dd>';
                                ?>
                            </dl>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h4><i class="icon16 i-resize"></i>Galeria</h4>
                            <?php
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

                                if ($requerimento->anexo_1 == NULL && $requerimento->anexo_2 == NULL && $requerimento->anexo_3 == NULL)
                                    echo '<div class="alert alert-info">Nenhuma imagem nesse requerimento!</div>';
                            ?>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h4><i class="icon16 i-resize"></i>Opções</h4>
                            <div class="btn-toolbar" style="margin: 0;">
                                <?php
                                    if ($requerimento->situacao > REQUERIMENTO_SITUACAO_EM_ANALISE)
                                        echo anchor_popup('requerimentos/imprimir_requerimento/'.$requerimento->id,'<i class="i-print-3"></i> Imprimir ', array('class' => 'btn'));
                                    echo anchor('requerimentos/editar_requerimento/'.$requerimento->id,'<i class="icon-edit"></i> Editar ',array('class' => 'btn'));
                                    echo anchor('requerimentos/excluir_requerimento/'.$requerimento->id,' <i class="icon-trash"></i> Excluir ',array('class' => 'btn confirm_delete' ));
                                ?>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h4><i class="icon16 i-resize"></i>Mensagem</h4>
                            <div class="btn-toolbar" style="margin: 0;">
                                <?php
                                    echo form_open('requerimentos/visualizar/'.$requerimento->id, 'class="form-horizontal pad15 pad-bottom0" role="form"');

                                    if ($this->session->userdata('mensagem_enviada'))
                                    {
                                        echo '<div class="alert alert-success">'. $this->session->userdata('mensagem_enviada') .'</div>';
                                        $this->session->unset_userdata('mensagem_enviada');
                                    }

                                    ?>
                                        <div class="form-group">
                                            <input name="user_email" id="user_email" class="form-control" type="text" value="<?php echo $solicitante->email; ?>">
                                        </div><!-- End .form-group  -->
                                        <div class="form-group">
                                            <textarea name="user_message" id="user_message" class="form-control" rows="4" placeholder="Escreva sua mensagem aqui..."></textarea>

                                        </div><!-- End .form-group  -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary pull-right confirm_send">Enviar mensagem</button>
                                        </div><!-- End .form-group  -->
                                    <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>


                    <?php

                    echo form_input(array('name' => 'id_bairro','id' => 'id_bairro', 'style' => 'visibility:hidden'));

                    ?>

                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div><!-- End .col-lg-8  -->

        <div class="col-lg-5">
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
    
    $( "#toggle_original" ).hide();
    
    $( "#original" ).click(function() {
        $( "#toggle_original" ).toggle( "slow" );
    });
</script>

