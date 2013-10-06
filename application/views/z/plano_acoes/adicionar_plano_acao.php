
    <ul class="nav nav-pills">
        <li><?php echo anchor('plano_acoes/lista_plano_acoes', 'Listar') ?></li>
        <li class="active"><?php echo anchor('plano_acoes/adicionar_plano_acao', 'Adicionar') ?></li>
    </ul>

    <?php
    echo form_open('plano_acoes/adicionar_plano_acao', 'class="bs-docs-example form-horizontal"');
    
    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('plano_acao_adicionado'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('plano_acao_adicionado') .'</div>';
        $this->session->unset_userdata('plano_acao_adicionado');
    }
    
    echo '<h4>Adicionar plano de ação</h4>';

    // titulo
    echo '<div class="control-group">';    
    echo form_label('Plano de Ação', 'titulo', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'titulo','id' => 'titulo','placeholder' => 'Título'), set_value('titulo'));
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
        echo        '<option value="'.$categoria->id.'">'.$categoria->titulo.'</option>';
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
        echo        '<option value="'.$usuario->id.'">'.$usuario->nome.'</option>';
    }
    echo        '</select>';
    echo    '</div>';
    echo '</div>'; 

    // quando
    echo '<div class="control-group">';
    echo form_label('Quando', 'quando', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'quando','id' => 'quando','placeholder' => 'dd/mm/aaaa', 'class' => 'data'), set_value('quando'));
    echo    '</div>';
    echo '</div>';

    // indicador
    echo '<div class="control-group">';
    echo form_label('Indicador', 'indicador', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'indicador','id' => 'indicador','placeholder' => 'Indicador'), set_value('indicador'));
    echo    '</div>';
    echo '</div>';
    
    // recurso
    echo '<div class="control-group">';
    echo form_label('Recurso', 'recurso', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'recurso','id' => 'recurso','placeholder' => 'Recurso'), set_value('recurso'));
    echo    '</div>';
    echo '</div>';    
    
    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Adicionar', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    ?>