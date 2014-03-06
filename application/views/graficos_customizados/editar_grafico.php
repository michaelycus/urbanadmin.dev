<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-user-3"></i> Editar Gráfico</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-wand"></i></div>
                    <h4>Editar Gráfico</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->

                <div class="panel-body">

                    <?php
                    
                    $id = $this->uri->segment(3);

                    // Redireciona quando usuário não é apresentado
                    if ($id==NULL) redirect('graficos_customizados');
                    
                    echo form_open('graficos_customizados/atualizar_grafico/'.$id, 'id="form_editar_grafico" class="form-horizontal"'); ?>

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

<!--                            <div class="col-lg-4">
                                <div class="form-group center">
                                    <div class="col-lg-12">
                                        <i class="icon64 i-bars blue"></i><br />Gráfico de barras<br /><br />
                                        <input class="form-control" type="radio" name="tipo" value="<?php echo TIPO_GRAFICO_BARRAS ?>">
                                    </div>
                                </div> End .control-group  
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group center">
                                    <div class="col-lg-12">
                                        <i class="icon64 i-pie blue"></i><br />Gráfico de pizza<br /><br />
                                        <input class="form-control" type="radio" name="tipo" value="<?php echo TIPO_GRAFICO_PIZZA ?>">
                                    </div>
                                </div> End .control-group  
                            </div>-->
                        </div>

                        <div class="step" id="configuracoes">
                            <span data-icon="i-tools" data-text="Configurações"></span>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="nome_grafico">Nome do Gráfico</label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="text" id="titulo" name="titulo" value="<?php echo $grafico->titulo?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="fonte">Fonte</label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="text" id="fonte" name="fonte" value="<?php echo $grafico->fonte?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="observacoes">Subtítulo</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" type="text" id="observacoes" name="observacoes"><?php echo $grafico->observacoes?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="fonte">Formato</label>
                                <div class="col-lg-2">
                                    <?php
                                    $formatos  = unserialize(GRAFICO_FORMATO_UNIDADE);
                                    $i=0;

                                    echo  '<select id="formato" name="formato">';                                   
                                    foreach ($formatos as $f)
                                    {
                                        echo  '<option value="'.$i.'" '.set_select('formato', $i, $i==$grafico->formato).'>'.$f.'</option>';
                                        $i++;
                                    }
                                    echo  '</select>';
                                    ?>                                    
                                </div>
                            </div>

                            <div id="chart_map">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="cor_grafico">Cores do gráfico</label>
                                    <div class="col-lg-10 center">
                                        <div class="col-lg-2 center">
                                            <input class="form-control" type="radio" name="cor_grafico" value="<?php echo GRAFICO_COR_AMARELO ?>" 
                                                <?php echo ($grafico->cor_grafico == GRAFICO_COR_AMARELO ? 'checked="checked"' : '' ) ?>>
                                            <img src="<?php echo base_url(); ?>images/chart/color_0.png"><br /><br />
                                        </div>
                                        <div class="col-lg-2 center">
                                            <input class="form-control" type="radio" name="cor_grafico" value="<?php echo GRAFICO_COR_VERDE ?>" 
                                                <?php echo ($grafico->cor_grafico == GRAFICO_COR_VERDE ? 'checked="checked"' : '' ) ?>>
                                            <img src="<?php echo base_url(); ?>images/chart/color_1.png"><br /><br />
                                        </div>
                                        <div class="col-lg-2 center">
                                            <input class="form-control" type="radio" name="cor_grafico" value="<?php echo GRAFICO_COR_LARANJA ?>" 
                                                <?php echo ($grafico->cor_grafico == GRAFICO_COR_LARANJA ? 'checked="checked"' : '' ) ?>>
                                            <img src="<?php echo base_url(); ?>images/chart/color_2.png"><br /><br />
                                        </div>
                                        <div class="col-lg-2 center">
                                            <input class="form-control center" type="radio" name="cor_grafico" value="<?php echo GRAFICO_COR_AZUL ?>" 
                                                <?php echo ($grafico->cor_grafico == GRAFICO_COR_AZUL ? 'checked="checked"' : '' ) ?>>
                                            <img src="<?php echo base_url(); ?>images/chart/color_3.png"><br /><br />
                                        </div>
                                        <div class="col-lg-2 center">
                                            <input class="form-control" type="radio" name="cor_grafico" value="<?php echo GRAFICO_COR_ROXO ?>" 
                                                <?php echo ($grafico->cor_grafico == GRAFICO_COR_ROXO ? 'checked="checked"' : '' ) ?>>
                                            <img src="<?php echo base_url(); ?>images/chart/color_4.png"><br /><br />
                                        </div>
                                        <div class="col-lg-2 center">
                                            <input class="form-control" type="radio" name="cor_grafico" value="<?php echo GRAFICO_COR_BEGE ?>" 
                                                <?php echo ($grafico->cor_grafico == GRAFICO_COR_BEGE ? 'checked="checked"' : '' ) ?>>
                                            <img src="<?php echo base_url(); ?>images/chart/color_5.png"><br /><br />
                                        </div>
                                        <div class="col-lg-2 center">
                                            <input class="form-control" type="radio" name="cor_grafico" value="<?php echo GRAFICO_COR_VERMELHO ?>" 
                                                <?php echo ($grafico->cor_grafico == GRAFICO_COR_VERMELHO ? 'checked="checked"' : '' ) ?>>
                                            <img src="<?php echo base_url(); ?>images/chart/color_6.png"><br /><br />
                                        </div>
                                        <div class="col-lg-2 center">
                                            <input class="form-control" type="radio" name="cor_grafico" value="<?php echo GRAFICO_COR_BRANCO ?>" 
                                                <?php echo ($grafico->cor_grafico == GRAFICO_COR_BRANCO ? 'checked="checked"' : '' ) ?>>
                                            <img src="<?php echo base_url(); ?>images/chart/color_7.png"><br /><br />
                                        </div>
                                    </div>
                                </div>
                            </div>

<!--                            <div id="chart_pizza">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="teste">teste</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" type="text" id="teste" name="teste"></textarea>
                                    </div>
                                </div>
                            </div>-->

                        </div>

                        <div class="step submit_step" id="dados">
                            <span data-icon="i-database-3" data-text="Dados"></span>
                            <div class="form-group">

                                <?php
                                $i=0;
                                foreach ($bairros as $bairro)
                                {                                    
                                    echo '<div class="col-lg-4">';
                                    echo    '<label class="col-lg-8 control-label" for="bairro_'.$bairro->codename.'">'.$bairro->nome.'</label>';
                                    echo    '<div class="col-lg-4">';
                                    echo        '<input class="form-control" name="bairro_'.$bairro->codename.'" type="text" value="'.str_replace('.',',',$valores_bairros[$i]->valor).'">';
                                    echo    '</div>';
                                    echo '</div>';
                                    $i++;
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
        window.location.replace("<?php echo base_url(). 'graficos_customizados/visualizar_grafico/'.$id ?>");
    }

    $.fn.disable = function() {
        return this.each(function() {
            if (typeof this.disabled != "undefined") this.disabled = true;
        });
    }

    $.fn.enable = function() {
        return this.each(function() {
            if (typeof this.disabled != "undefined") this.disabled = false;
        });
    }

    $(document).ready(function(){
        $(":radio").change(function(){
            var rad = $('input[name=tipo]:checked').val();

            if (rad == '0')
            {
                $("div#chart_map *").enable();
                $("div#chart_map *").show();
                $("div#chart_pizza *").disable();
                $("div#chart_pizza *").hide();
            }
            else
            {
                $("div#chart_map *").disable();
                $("div#chart_map *").hide();
                $("div#chart_pizza *").enable();
                $("div#chart_pizza *").show();
            }
        });
    });

</script>
