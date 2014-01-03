<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-user-3"></i> Criar Gráfico</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-wand"></i></div>
                    <h4>Criar Gráfico</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->

                <div class="panel-body">

                    <?php echo form_open('graficos_customizados/gerar_grafico', 'id="form_criar_grafico" class="form-vertical"'); ?>
                    
                        <div class="msg"></div>
                        <div class="wizard-steps"></div>
                        <div class="step" id="tipo_grafico">
                            <div class="col-lg-4">
                                <span data-icon="i-screen-3" data-text="Tipo de Gráfico"></span>
                                <div class="form-group center">                                
                                    <div class="col-lg-12">
                                        <i class="icon64 i-map-4 blue"></i><br />Mapa<br /><br />
                                        <input class="form-control" type="radio" name="tipo" value="<?php echo TIPO_GRAFICO_MAPA ?>" checked="checked">
                                    </div>
                                </div><!-- End .control-group  -->
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="form-group center">                  
                                    <div class="col-lg-12">
                                        <i class="icon64 i-bars blue"></i><br />Gráfico de barras<br /><br />
                                        <input class="form-control" type="radio" name="tipo" value="<?php echo TIPO_GRAFICO_BARRAS ?>">
                                    </div>
                                </div><!-- End .control-group  -->
                            </div>                            
                        </div>
                        
                        <div class="step" id="configuracoes">
                            <span data-icon="i-tools" data-text="Configurações"></span>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="nome_grafico">Nome do Gráfico</label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="text" id="titulo" name="titulo">
                                </div>
                            </div>
                        </div>
                        
                        <div class="step submit_step" id="dados">
                            <span data-icon="i-database-3" data-text="Dados"></span>
                            <div class="form-group">
                                
                                <?php
                                foreach ($bairros as $bairro)
                                {
                                    echo '<div class="col-lg-4">';
                                    echo    '<label class="col-lg-8 control-label" for="bairro_'.$bairro->codename.'">'.$bairro->nome.'</label>';
                                    echo    '<div class="col-lg-4">';
                                    echo        '<input class="form-control" name="bairro_'.$bairro->codename.'" type="text">';
                                    echo    '</div>';
                                    echo '</div>';
                                }                                
                                ?>
                                
                                <br /><br />&nbsp;
                            </div>
                        </div>

                        <div class="form-actions full">
                            <button class="btn pull-left" type="reset"><i class="icon16 i-arrow-left-2"></i> Voltar</button>
                            <button class="btn pull-right" type="submit">Próximo <i class="icon16 i-arrow-right-3"></i></button>
                        </div>
                    <?php echo form_close(); ?>
                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div><!-- End .col-lg-12  --> 
    </div><!-- End .row-fluid  -->    
</div>

<script>
    function generate_chart()
    {
        window.location.replace("<?php echo base_url(). 'graficos_customizados/visualizar' ?>");
    }
</script>
