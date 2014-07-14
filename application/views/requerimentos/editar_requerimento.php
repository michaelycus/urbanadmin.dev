<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-drawer-3"></i> Editar requerimento</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                <?php
                $id = $this->uri->segment(3);

                // Redireciona quando usuário não é apresentado
                if ($id==NULL && $requerimento==NULL) redirect('requerimentos');

                // Evita de operadores editarem outros usuários
                if ($_SESSION['autorizacao']==AUTORIZACAO_OPERADOR && $_SESSION['id_user']!=$requerimento->id_solicitante) redirect('meus_requerimentos');

                echo form_open_multipart('requerimentos/editar_requerimento/'.$id, 'class="bs-docs-example form-horizontal"');

                echo validation_errors('<div class="alert alert-error">','</div>');
                if ($this->session->userdata('requerimento_editado'))
                {
                    echo '<div class="alert alert-success">'. $this->session->userdata('requerimento_editado') .'</div>';
                    $this->session->unset_userdata('requerimento_editado');
                }

                // descricao
                echo '<div class="form-group">';
                echo form_label('Descrição', 'descricao', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo        form_textarea(array('name' => 'descricao','id' => 'descricao','placeholder' => 'Descrição do requerimento...','class' => 'form-control'), set_value('descricao',$requerimento->descricao));
                echo    '</div>';
                echo '</div>';

                // bairros
                echo '<div class="form-group">';
                echo    '<label for="id_bairro" class="col-lg-3 control-label">Bairro</label>';
                echo    '<div class="col-lg-9">';
                echo        '<select id="id_bairro" name="id_bairro">';
                echo            '<option value=""> - Todos os bairros - </option>';
                foreach ($bairros as $bairro)
                {
                    echo        '<option value="'.$bairro->id.'" '.set_select('id_bairro', $bairro->id, $bairro->id==$requerimento->id_bairro).'>'.$bairro->nome.'</option>';
                }
                echo        '</select>';
                echo    '</div>';
                echo '</div>';

                // id_rua
                echo '<div class="form-group">';
                echo form_label('Rua', 'id_rua', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                        $options = array ('' => 'Escolha um Rua');
                        if (!empty($ruas))
                        {
                            foreach($ruas as $rua)
                                $options[$rua->id] = $rua->nome;
                            echo form_dropdown('id_rua', $options, $requerimento->id_rua);
                        }
                        else
                        {
                            echo form_dropdown('id_rua', array('' => 'Escolha uma Rua'), '','id="id_rua" class="col-lg-9"' );
                        }
                echo    '</div>';
                echo '</div>';

                // cat_requerimento
                echo '<div class="form-group">';
                echo    '<label for="cat_requerimento" class="col-lg-3 control-label">Tipo Req.</label>';
                echo    '<div class="col-lg-9">';
                echo        '<select id="cat_requerimento" name="cat_requerimento" class="col-lg-9">';
                foreach ($cats_requerimento as $c_r)
                {
                    echo        '<option value="'.$c_r->id.'" '.set_select('cat_requerimento', $c_r->id, $c_r->id==$requerimento->cat_requerimento).'>'.$c_r->nome.'</option>';
                }
                echo        '</select>';
                echo    '</div>';
                echo '</div>';

                if ($_SESSION['autorizacao'] == AUTORIZACAO_ADMINISTRADOR)
                {
                    echo '<hr>';
                    
                    // id_solicitante
                    echo '<div class="form-group">';
                    echo    '<label for="id_solicitante" class="col-lg-3 control-label">Solicitante</label>';
                    echo    '<div class="col-lg-9">';
                    echo        '<select id="id_solicitante" name="id_solicitante">';
                    foreach ($solicitantes as $solicitante)
                    {
                        echo        '<option value="'.$solicitante->id.'" '.set_select('id_solicitante', $solicitante->id, $solicitante->id==$requerimento->id_solicitante).'>'.$solicitante->nome.'</option>';
                    }
                    echo        '</select>';
                    echo    '</div>';
                    echo '</div>';

                    // id_requerente
                    echo '<div class="form-group">';
                    echo    '<label for="id_requerente" class="col-lg-3 control-label">Requerente</label>';
                    echo    '<div class="col-lg-9">';
                    echo        '<select id="id_requerente" name="id_requerente">';
                    foreach ($requerentes as $requerente)
                    {
                        echo    '<option value="'.$requerente->id.'" '.set_select('id_requerente', $requerente->id, $requerente->id==$requerimento->id_requerente).'>'.$requerente->nome.'</option>';
                    }
                    echo        '</select>';
                    echo    '</div>';
                    echo '</div>';

                    // data_requerimento
                    echo '<div class="form-group">';
                    echo form_label('Data', 'data_requerimento', array('class' => 'col-lg-3 control-label'));
                    echo    '<div class="col-lg-9">';
                    echo        '<div id="datepicker" class="input-group date" data-date="12-02-2012" data-date-format="dd-mm-yyyy">';
                    echo            form_input(array('name' => 'data_requerimento','id' => 'data_requerimento',
                                    'class' => 'form-control data'), set_value('data_requerimento', $this->form_validation->convert_sql_to_human($requerimento->data_requerimento)));
                    echo            '<span class="input-group-addon"><i class="icon16 i-calendar-4"></i></span>';
                    echo        '</div>';
                    echo    '</div>';
                    echo '</div>';
                    
                    // da_sessao
                    echo '<div class="form-group">';
                    echo form_label('Da sessão?', 'da_sessao', array('class' => 'col-lg-3 control-label'));
                    echo    '<div class="col-lg-9">';
                    echo        '<div class="switch" data-on="primary" data-off="danger" data-on-label="<i class=\'i-checkmark-3\'></i>" data-off-label="<i class=\'i-close\'></i>">';
                    echo            '<input class="toggle" controls-row type="checkbox" id="da_sessao" name="da_sessao" '. ($requerimento->da_sessao==REQUERIMENTO_DA_SESSAO ? 'checked' : '').' />';
                    echo        '</div>';
                    echo    '</div>';
                    echo '</div>';
                }
                else
                {
                    echo form_hidden('id_requerente', REQUERENTE_PADRAO_ID);
                    echo form_hidden('data_requerimento',  date('d/m/Y'));
                }

                // expediente
                if ($requerimento->situacao > REQUERIMENTO_SITUACAO_ANALISADO)
                {
                    echo '<hr>';

                    echo '<div class="form-group">';
                    echo form_label('Expediente', 'expediente', array('class' => 'col-lg-3 control-label'));

                    echo    '<div class="checkbox-inline col-lg-2">';
                    echo    form_input(array('name' => 'expediente','id' => 'expediente','class' => 'form-control'), set_value('expediente',$requerimento->expediente));
                    echo    '</div>';

                    $anos = array(date('Y')-4,date('Y')-3,date('Y')-2,date('Y')-1,date('Y'),date('Y')+1,date('Y')+2);

                    echo    '<div class="checkbox-inline col-lg-2">';
                    echo    '<select id="ano_expediente" name="ano_expediente">';
                    foreach ($anos as $ano)
                    {
                        echo    '<option value="'.$ano.'" '.set_select('ano_expediente', $ano, $requerimento->ano_expediente==$ano).'>'.$ano.'</option>';
                    }
                    echo    '</select>';
                    echo    '</div>';

                    echo '</div>';
                }

                echo '<hr>';

                // anexo_1
                echo '<div class="form-group">';
                echo form_label('Anexo 1', 'anexo_1', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo        form_upload('anexo_1',base_url().'/uploads/'.$requerimento->anexo_1) . ' ' .($requerimento->anexo_1 != NULL ? anchor_popup(base_url().'/uploads/'.$requerimento->anexo_1, '(Anexo)') : '' );
                echo    '</div>';
                echo '</div>';

                // anexo_2
                echo '<div class="form-group">';
                echo form_label('Anexo 2', 'anexo_2', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo        form_upload('anexo_2',base_url().'/uploads/'.$requerimento->anexo_2) . ' ' . ($requerimento->anexo_2 != NULL ? anchor_popup(base_url().'/uploads/'.$requerimento->anexo_2, '(Anexo)') : '' );
                echo    '</div>';
                echo '</div>';

                // anexo_3
                echo '<div class="form-group">';
                echo form_label('Anexo 3', 'anexo_3', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo        form_upload('anexo_3',base_url().'/uploads/'.$requerimento->anexo_3) . ' ' . ($requerimento->anexo_3 != NULL ? anchor_popup(base_url().'/uploads/'.$requerimento->anexo_3, '(Anexo)') : '' );
                echo    '</div>';
                echo '</div>';

                echo '<hr>';

                // notificar
                echo '<div class="form-group">';
                echo    '<label for="notificar" class="col-lg-3 control-label">Notificação</label>';
                echo    '<div class="col-lg-9">';
                echo        form_checkbox(array('name' => 'notificar','id' => 'notificar',
                            'class' => 'form-control', 'value' => 'notificar', 'checked' => $requerimento->notificar==1 ? TRUE: FALSE));
                echo    ' Receber notificações sobre avanço do requerimento.';
                echo    '</div>';
                echo '</div>';

                echo '<hr>';

                echo form_hidden('id', $requerimento->id);

                echo '<div class="form-group">';
                echo    '<div class="col-lg-offset-3">';
                echo        '<div class="col-lg-9">';
                echo        form_submit('submit', 'Editar requerimento', 'class="btn btn-primary"');
                echo        '</div>';
                echo    '</div>';
                echo '</div>';

                echo form_close();
                ?>

                </div><!-- End .panel-body -->
           </div><!-- End .widget -->
       </div><!-- End .col-lg-6  -->
       
       <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php
                    echo anchor('requerimentos/duplicar_requerimento/'.$requerimento->id,
                                '<i class="icon24 i-copy-4"></i> Duplicar requerimento ', 
                                array('class' => 'btn btn-success btn-lg','target' => '_blank' ));
                    ?>
                </div>
            </div>
        </div>
       
    </div><!-- End .row-fluid  -->
</div>

<script type="text/javascript" src="<?php echo base_url() . 'js/bairro_rua.js'; ?>"></script>
<script type="text/javascript">
    var path = '<?php echo site_url(); ?>';
</script>