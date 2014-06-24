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
                                $retornos  = unserialize(REQUERIMENTO_RETORNOS);
                                
                                echo '<dt>Descrição</dt>';
                                echo '<dd><pre>' . $requerimento->descricao . '</pre></dd>';
                                
                                if ($_SESSION['autorizacao']==AUTORIZACAO_ADMINISTRADOR)
                                {
                                    echo '<dt></dt><dd><div id="original"><a href="#"><small>(ver original)</a></small></div></dd>';
                                
                                    echo '<div id="toggle_original">';
                                    echo '<dt>Original</dt>';
                                    echo '<dd><pre>' . $requerimento->descricao_original . '</pre></dd>';
                                    echo '</div>';
                                }                                

                                echo '<dt>Bairro</dt>';
                                echo '<dd>' . $bairro->nome . '</dd>';

                                echo '<dt>Rua</dt>';
                                echo '<dd>' . $rua->nome . '</dd>';
                                
                                echo '<dt>Tipo Requerimento</dt>';
                                echo '<dd>' . $cat_requerimento->nome . '</dd>';
                                
                                if ($_SESSION['autorizacao']==AUTORIZACAO_ADMINISTRADOR)
                                {
                                    echo '<dt>Solicitante</dt>';
                                    echo '<dd>' . anchor('requerentes/visualizar/'.$solicitante->id, $solicitante->nome) . '</dd>';

                                    echo '<dt>Telefone</dt>';
                                    echo '<dd>' . $solicitante->telefone . '</dd>';

                                    echo '<dt>Requerente</dt>';
                                    echo '<dd>' . anchor('requerentes/visualizar/'.$requerente->id, $requerente->nome) . '</dd>';

                                    echo '<dt>Data</dt>';
                                    echo '<dd>' . $this->form_validation->convert_sql_to_human($requerimento->data_requerimento) . '</dd>';

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
                                                ' <em>('. $retornos[$requerimento->status_retorno].')</em>'.
                                         '</dd>';
                                    
                                    if ($requerimento->expediente != 0)
                                    {
                                        echo '<dt>Expediente</dt>';
                                        echo '<dd><strong>' . $requerimento->expediente . '/' . $requerimento->ano_expediente . '</strong></dd>';
                                    }
                                    
                                    if ($requerimento->situacao>REQUERIMENTO_SITUACAO_PROTOCOLADO)
                                    {
                                        echo '<br/>';
                                        echo '<dt>Retorno solicitante</dt>';
                                        echo '<dd><pre>' . $requerimento->retorno_solicitante . '</pre></dd>';
                                        
                                        echo '<br/>';
                                        echo '<dt>Conclusão</dt>';
                                        echo '<dd><pre>' . $requerimento->retorno_admin . '</pre></dd>';
                                        
                                        echo form_open('requerimentos/editar_conclusao/'.$requerimento->id, 'id="form_conclusao" class="bs-docs-example form-horizontal"');
                                        
                                        echo '<dt></dt>';
                                        echo '<dd>' . form_textarea(array('name' => 'retorno_admin','id' => 'retorno_admin',
                                                                          'class' => 'form-control'), $requerimento->retorno_admin );
                                        
                                        echo '<br/>';
                                        echo form_submit('submit', 'Salvar', 'class="btn btn-primary"');                               
                                        echo form_close();                                        
                                        echo '</dd>';
                                        
                                        echo '<dt></dt><dd><div id="editar_conclusao"><a href="#"><small>(Editar conclusão)</a></small></div></dd>';
                                    }
                                }
                                ?>
                            </dl>
                        </div>
                    </div>

                    <hr>
                    
                    <?php                    
                    if ($_SESSION['autorizacao']==AUTORIZACAO_ADMINISTRADOR)
                    {                        
                    ?>

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
                                        echo anchor_popup('requerimentos/imprimir_requerimento/'.$requerimento->code,'<i class="i-print-3"></i> Imprimir ', array('class' => 'btn'));
                                    if ($requerimento->situacao > REQUERIMENTO_SITUACAO_ANALISADO)
                                        echo anchor('requerimentos/reiterar_requerimento/'.$requerimento->id,'<i class="i-transmission-2"></i> Reiteirar ', array('class' => 'btn confirmreiterar'));
                                    echo anchor('requerimentos/editar_requerimento/'.$requerimento->id,'<i class="icon-edit"></i> Editar ',array('class' => 'btn'));
                                    echo anchor('requerimentos/excluir_requerimento/'.$requerimento->id,' <i class="icon-trash"></i> Excluir ',array('class' => 'btn confirmdelete' ));
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php                    
                    }

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
    
    $( "#form_conclusao" ).hide();
    $( "#editar_conclusao" ).click(function() {
        $( "#form_conclusao" ).toggle( "slow" );
    });
</script>

