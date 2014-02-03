<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-search"></i> Visualizar Requerente</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-list-4"></i></div>
                    <h4>Dados</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->

                <div class="panel-body">
                    <div class="row">
                        <h4><i class="icon16 i-resize"></i>Informações</h4>
                        <div class="col-lg-12">
                            <dl class="dl-horizontal">
                                <?php
                                echo '<dt>Nome</dt>';
                                echo '<dd>' . $requerente->nome . '</dd>';

                                if ($requerente->cpf)
                                {
                                    echo '<dt>CPF</dt>';
                                    echo '<dd>' . $requerente->cpf . '</dd>';
                                }

                                if ($requerente->cnpj)
                                {
                                    echo '<dt>CNPJ</dt>';
                                    echo '<dd>' . $requerente->cnpj . '</dd>';
                                }

                                echo '<dt>E-mail</dt>';
                                echo '<dd>' . $requerente->email . '</dd>';

                                echo '<dt>Telefone</dt>';
                                echo '<dd>' . $requerente->telefone . '</dd>';

                                if ($requerente->endereco)
                                {
                                    echo '<dt>Endereço</dt>';
                                    echo '<dd>' . $requerente->endereco . '</dd>';
                                }

                                if ($bairro)
                                {
                                    echo '<dt>Bairro</dt>';
                                    echo '<dd>' . $bairro->nome . '</dd>';
                                }

                                if ($requerente->estado)
                                {
                                    echo '<dt>Estado</dt>';
                                    echo '<dd>' . $estado->nome . '</dd>';
                                }

                                if ($requerente->cidade)
                                {
                                    echo '<dt>Cidade</dt>';
                                    echo '<dd>' . $cidade->nome . '</dd>';
                                }

                                if ($requerente->cep)
                                {
                                    echo '<dt>CEP</dt>';
                                    echo '<dd>' . $requerente->cep . '</dd>';
                                }

                                ?>
                            </dl>

                        </div>
                    </div><!-- End .row-fluid  -->

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h4><i class="icon16 i-resize"></i>Opções</h4>
                            <div class="btn-toolbar" style="margin: 0;">

                                <?php
                                echo anchor('requerentes/editar_requerente/'.$requerente->id,'<i class="icon-edit"></i> Editar ',array('class' => 'btn'));
                                echo anchor('requerentes/excluir_requerente/'.$requerente->id,'<i class="icon-trash"></i> Excluir ',array('class' => 'btn confirm_delete'));
                                ?>
                               
                            </div>
                        </div>
                    </div>                    
                    
                    <hr>
                    
                    <div class="row">     
                        <div class="col-lg-12" id="messenger">
                            <h4><i class="icon16 i-resize"></i>Mensagem</h4>

                            <?php
                            echo form_open('requerentes/visualizar/'.$requerente->id, 'class="form-horizontal pad15 pad-bottom0" role="form"');

                            if ($this->session->userdata('mensagem_enviada'))
                            {
                                echo '<div class="alert alert-success">'. $this->session->userdata('mensagem_enviada') .'</div>';
                                $this->session->unset_userdata('mensagem_enviada');
                            }

                            ?>
                                <div class="form-group">
                                    <input name="user_email" id="user_email" class="form-control" type="text" value="<?php echo $requerente->email; ?>">
                                </div><!-- End .form-group  -->
                                <div class="form-group">
                                    <textarea name="user_message" id="user_message" class="form-control" rows="4" placeholder="Escreva sua mensagem aqui..."></textarea>

                                </div><!-- End .form-group  -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right confirm_send">Enviar mensagem</button>
                                </div><!-- End .form-group  -->
                            <?php echo form_close(); ?>

                        </div>

                        <?php
                        echo form_input(array('name' => 'id_bairro','id' => 'id_bairro', 'style' => 'visibility:hidden'));
                        ?>

                    </div>

                </div><!-- End .panel-body -->
            </div><!-- End .widget -->
        </div><!-- End .col-lg-6  -->

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-list"></i></div>
                    <h4>Requerimentos</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->
                <div class="panel-body">
                    <?php

                    $tmpl = array(
                        'table_open' => '<table cellpadding="0" cellspacing="0" border="0"
                                          class="table table-striped table-bordered table-hover" id="table-requerimentos">',
                        'table_close' => '</table>'
                    );

                    $this->table->set_template($tmpl);
                    $this->table->set_heading('Resumo', "Situação");

                    if (!empty($requerimentos))
                    {
                        foreach ($requerimentos as $requerimento):
                            $this->table->add_row(array('data'=>anchor('requerimentos/visualizar/'.$requerimento->id, '<small>'.substr($requerimento->descricao, 0, 128).(strlen($requerimento->descricao)>255?"..." : "").'</small>')),
                        array('data'=>'<div style="display:none;">'.$requerimento->situacao.'</div>'.
                                      '<img src="'.base_url().'images/situacao_'.$requerimento->situacao.'.png"> ',
                                      'style'=>'width:130px'));
                        endforeach;

                        echo $this->table->generate();
                    }
                    else
                    {
                        echo '<div class="alert alert-info">Nenhum requerimento cadastrado!</div>';
                    }

                    ?>
                </div>
            </div>
        </div>
    </div><!-- End .row-fluid  -->
</div>
