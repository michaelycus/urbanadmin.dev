
    <ul class="nav nav-pills">
        <li><?php echo anchor('plano_acoes/lista_plano_acoes', 'Listar') ?></li>
        <li><?php echo anchor('plano_acoes/adicionar_plano_acao', 'Adicionar') ?></li>
    </ul>
    

    <?php   
    $id = $this->uri->segment(3);
    if ($id==NULL) redirect('plano_acoes');
    
    echo form_open('plano_acoes/editar_plano_acao', 'class="bs-docs-example form-horizontal"');
    
    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('plano_acao_editado'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('plano_acao_editado') .'</div>';
        $this->session->unset_userdata('plano_acao_editado');
    }
    
    echo '<h4>Editar plano de ação</h4>';

    // titulo
    echo '<div class="control-group">';    
    echo form_label('Plano de Ação', 'titulo', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'titulo','id' => 'titulo','placeholder' => 'Título'), set_value('titulo',$plano_acao->titulo));
    echo    '</div>';
    echo '</div>';

    // categoria    
    echo '<div class="control-group">';
    echo    '<label for="id_categoria" class="control-label">Categoria</label>';    
    echo    '<div class="controls">';
    echo        '<select id="id_categoria" name="id_categoria">';    
    echo           '<option value=""> -- Selecione -- </option>';
    foreach ($categorias as $categoria)
    {
        echo        '<option value="'.$categoria->id.'" '.set_select('id_categoria', $categoria->id, $categoria->id==$plano_acao->id_categoria).'>'.$categoria->titulo.'</option>';
    }
    echo        '</select>';
    echo    '</div>';
    echo '</div>';    

    // responsavel
    echo '<div class="control-group">';
    echo    '<label for="id_responsavel" class="control-label">Responsável</label>';    
    echo    '<div class="controls">';
    echo        '<select id="id_responsavel" name="id_responsavel">';    
    echo           '<option value=""> -- Selecione -- </option>';
    foreach ($usuarios as $usuario)
    {
        echo        '<option value="'.$usuario->id.'" '.set_select('id_responsavel', $usuario->id, $usuario->id==$plano_acao->id_responsavel).'>'.$usuario->nome.'</option>';
    }
    echo        '</select>';
    echo    '</div>';
    echo '</div>'; 

    // quando
    echo '<div class="control-group">';
    echo form_label('Quando', 'quando', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'quando','id' => 'quando','placeholder' => 'dd/mm/aaaa', 'class' => 'data'), set_value('quando',$this->my_utilities->convert_date($plano_acao->quando)));
    echo    '</div>';
    echo '</div>';

    // indicador
    echo '<div class="control-group">';
    echo form_label('Indicador', 'indicador', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'indicador','id' => 'indicador','placeholder' => 'Indicador'), set_value('indicador',$plano_acao->indicador));
    echo    '</div>';
    echo '</div>';
    
    // recurso
    echo '<div class="control-group">';
    echo form_label('Recurso', 'recurso', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'recurso','id' => 'recurso','placeholder' => 'Recurso'), set_value('recurso',$plano_acao->recurso));
    echo    '</div>';
    echo '</div>';
    
    echo form_hidden('id', $plano_acao->id);
    
    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Editar', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    
    ?>

    <hr>
    
    
    <?php

    echo '<h4>Ações</h4>';

    $tmpl = array(
        'table_open' => '<table class="table table-striped">',
        'table_close' => '</table>'
    );

    $this->table->set_template($tmpl);
    $this->table->set_heading('O que fazer?', 'Como?', 'Onde?', 'Quem?', 'Delegado', 'Nível', 'Quando?', 'Materiais?');

    $niveis = unserialize(NIVEIS_ACOES);

    if (!empty($acoes))
    {
        foreach ($acoes as $acao):
    //        $responsavel = $this->usuarios_model->get_usuario($acao->id_responsavel, 'nome');

            $this->table->add_row(array('data'=>$acao->o_que),
                                  array('data'=>$acao->como),
                                  array('data'=>$acao->onde),
                                  array('data'=>$acao->nome_responsavel),
                                  array('data'=>$acao->delegado),
                                  array('data'=>$niveis[$acao->id_nivel]),
                                  array('data'=>$this->my_utilities->convert_date($acao->data_acao)),
                                  array('data'=>$acao->materiais),
                                  array('data'=>anchor('acoes_pa/editar_acao/'.$acao->id, ' <i class="icon-edit"></i> Editar',array('class' => ' btn .btn-min')). ' '.
                                                anchor('acoes_pa/excluir_acao/'.$acao->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn .btn-mini')), 'style'=>'width:200px'));

        endforeach;

        echo $this->table->generate();
    }
    else
    {
        echo '<div class="alert alert-info">Nenhuma ação cadastrada!</div>';
    }

    echo anchor('acoes_pa/adicionar_acao/'.$plano_acao->id, '<i class="icon-plus-sign icon-white"></i> Adicionar Ação',array('class' => 'btn btn-primary', 'id'=> 'add_acao', 'role' => 'button'));

    ?>
    
<!--    <div id='result_table'>        
    </div>
 
    <script>
        $.ajax({
            url: '<?php // echo base_url().'plano_acoes/testando';?>',
            dataType: 'html',
            success: function(output_string){
                $('#result_table').html(output_string);
            } // End of success function of ajax form
        }); // End of ajax call 
    </script>-->