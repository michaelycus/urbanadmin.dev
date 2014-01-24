<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-search"></i> Visualizar Requerimento</h1>
    </div>

    <div class="row">
        <div class="col-lg-7">
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
                        echo '<dd>' . '<img src="'.base_url().'images/situacao_'.$requerimento->situacao.'.png"> '. '</dd>';
                        
                        ?>
                        
                    </dl>
                    
                    <hr>
                    
                    <div class="col-lg-9">
                        
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
                    ?>
                    
                    </div>
                    
                    <div class="col-lg-3">                    
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">Opções <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <?php                                
                                if ($requerimento->situacao!=REQUERIMENTO_SITUACAO_EM_ANALISE)
                                    echo '<li>'.anchor('requerimentos/retornar_situacao/'.$requerimento->id.'/'.$requerimento->situacao,'<i class="i-backward-2"></i> Voltar' ).'</li>';
                                if ($requerimento->situacao!=REQUERIMENTO_SITUACAO_RESOLVIDO && $requerimento->situacao!=REQUERIMENTO_SITUACAO_ANALISADO )
                                    echo '<li>'.anchor('requerimentos/avancar_situacao/'.$requerimento->id.'/'.$requerimento->situacao,'<i class="i-forward-3"></i> Avançar' ).'</li>';
                                if ($requerimento->situacao==REQUERIMENTO_SITUACAO_ANALISADO)
                                    echo '<li><a href="javascript:void(0);" onclick="expediente(\''. base_url(). '\','.$requerimento->id.')">'.'<i class="i-forward-3"></i> Avançar'.'</a></li>';
                                if ($requerimento->situacao > REQUERIMENTO_SITUACAO_EM_ANALISE)
                                    echo '<li>'.anchor_popup('requerimentos/imprimir_requerimento/'.$requerimento->id,'<i class="i-print-3"></i> Imprimir ').'</li>';
                                
                                echo '<li>'.anchor('requerimentos/editar_requerimento/'.$requerimento->id,'<i class="icon-edit"></i> Editar ').'</li>';
                                echo '<li>'.anchor('requerimentos/excluir_requerimento/'.$requerimento->id,' <i class="icon-trash"></i> Excluir ',array('class' => 'confirm_delete' )).'</li>';                                
                                echo '<li class="divider"></li>';
                                echo '<li><a href="javascript:void(0);" onclick="show_messenger()"><i class="i-envelop-2"></i>Enviar mensagem</a></li>';
                    
                                ?>
                            </ul>
                        </div><!-- /btn-group -->
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
    
    <div class="row">    
        <div class="col-lg-7" id="messenger">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-envelop-2"></i></div> 
                    <h4>Enviar mensagem</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->

                <div class="panel-body">
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
                            <button type="submit" class="btn btn-primary pull-right">Enviar mensagem</button>
                        </div><!-- End .form-group  -->
                    <?php echo form_close(); ?>
                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
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
    
    $("#messenger").hide();
    
    function show_messenger()
    {
        $("#messenger").show(600);
    }
    
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

