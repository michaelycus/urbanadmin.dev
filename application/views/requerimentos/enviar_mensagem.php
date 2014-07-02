<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-mail-send"></i> Enviar mensagem</h1>
    </div>

    <div class="row">
        <div class="col-lg-7">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            echo form_open('requerimentos/enviar_mensagem', 'class="bs-docs-example form-horizontal"');
                            
                            // enviar para
                            echo '<div class="form-group">';
                            echo form_label('Enviar para', 'enviar_para', array('class' => 'col-lg-3 control-label'));
                            echo    '<div class="col-lg-9">';
                            echo form_input(array('name' => 'enviar_para','id' => 'enviar_para',
                                        'class' => 'form-control','autofocus' => 'autofocus'), $emails);
                            echo    '</div>';
                            echo '</div>';
                            
                            // titulo
                            echo '<div class="form-group">';
                            echo form_label('Título', 'titulo', array('class' => 'col-lg-3 control-label'));
                            echo    '<div class="col-lg-9">';
                            echo form_input(array('name' => 'titulo','id' => 'titulo',
                                        'class' => 'form-control'), 'Novo Requerimento - '. $this->form_validation->convert_sql_to_human($requerimento->data_requerimento));
                            echo    '</div>';
                            echo '</div>';
                            
                            $mensagem = "Olá,\n";
                            $mensagem .= "Um novo requerimento foi gerado e encaminhado para esta secretaria.\n\n";
                            
                            $mensagem .= "Descrição:\n";
                            $mensagem .= $requerimento->descricao . "\n\n";
                            
                            $mensagem .= "Bairro:\n";
                            $mensagem .= $bairro->nome . "\n\n";
                            
                            if ($rua)
                            {
                                $mensagem .= "Rua:\n";
                                $mensagem .= $rua->nome . "\n\n";
                            }
                            
                            $mensagem .= "Solicitante:\n";
                            $mensagem .= $solicitante->nome . " - " . $solicitante->telefone . "\n\n";
                            
                            $mensagem .= "Data:\n";
                            $mensagem .= $this->form_validation->convert_sql_to_human($requerimento->data_requerimento) . "\n\n";
                            
                            $mensagem .= "Expediente:\n";
                            $mensagem .= $requerimento->expediente . '/' . $requerimento->ano_expediente;
                            
                            // descricao
                            echo '<div class="form-group">';
                            echo form_label('Descrição', 'descricao', array('class' => 'col-lg-3 control-label'));
                            echo    '<div class="col-lg-9">';
                            echo    form_textarea(array('name' => 'descricao','id' => 'descricao','placeholder' => 'Descrição do requerimento...',
                                        'class' => 'form-control'), $mensagem);
                            echo    '</div>';
                            echo '</div>';
                            
                            echo '<div class="form-group">';
                            echo    '<div class="col-lg-offset-2">';
                            echo        '<div class="pad-left15">';
                            echo        form_submit('submit', 'Enviar mensagem', 'class="btn btn-primary"');
                            echo        '</div>';
                            echo    '</div>';
                            echo '</div>';
                            
                            echo form_hidden('code', $requerimento->code);

                            echo form_close();
                            
                            ?>
                        </div>
                    </div>

                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div><!-- End .col-lg-8  -->
        
    </div><!-- End .row-fluid  -->
</div>

