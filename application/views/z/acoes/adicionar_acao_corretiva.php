
    <ul class="nav nav-pills">
        <li><?php echo anchor('acoes/Lista_acoes_corretivas', 'Listar') ?></li>
        <li class="active"><?php echo anchor('acoes/adicionar_acao_corretiva', 'Adicionar') ?></li>
    </ul>

    <?php
    echo form_open('acoes/adicionar_acao_corretiva', 'class="bs-docs-example form-horizontal"');
    
    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('acao_corretiva_adicionada'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('acao_corretiva_adicionada') .'</div>';
        $this->session->unset_userdata('acao_corretiva_adicionada');
    }
    
    echo '<h4>Adicionar ação</h4>';
    
    // quando
    echo '<div class="control-group">';
    echo form_label('Data', 'data', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'data','id' => 'data','placeholder' => 'dd/mm/aaaa', 'class' => 'data'), set_value('data'));
    echo    '</div>';
    echo '</div>';

    // constatacao
    echo '<div class="control-group">';    
    echo form_label('Constatação de SGQ n°:', 'constatacao', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'constatacao','id' => 'constatacao','placeholder' => ''), set_value('constatacao'));
    echo    '</div>';
    echo '</div>';
    
    // tipo_averiguacao
    echo '<div class="control-group">';    
    echo form_label('Averiguação', 'tipo_averiguacao', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo        '<label class="radio inline">';
    echo        form_radio(array('name' => 'tipo_averiguacao','id' => 'tipo_averiguacao','value' => ACOES_TIPO_AVERIGUACAO_PROCESSO)) . ' Processo ';
    echo        '</label>';
    echo        '<label class="radio inline">';
    echo        form_radio(array('name' => 'tipo_averiguacao','id' => 'tipo_averiguacao','value' => ACOES_TIPO_AVERIGUACAO_AUDITORIA)) . ' Auditoria ';
    echo        '</label>';
    echo        '<label class="radio inline">';
    echo        form_radio(array('name' => 'tipo_averiguacao','id' => 'tipo_averiguacao','value' => ACOES_TIPO_AVERIGUACAO_RECLAMACAO_CLIENTE)) . ' Reclamação do Cliente ';
    echo        '</label>';
    echo    '</div>';
    echo '</div>';
    
    // titulo
    echo '<div class="control-group">';    
    echo form_label('Título', 'titulo', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'titulo','id' => 'titulo','placeholder' => 'Título'), set_value('titulo'));
    echo    '</div>';
    echo '</div>';

    // id_responsavel
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

    // descricao
    echo '<div class="control-group">';
    echo form_label('Descrição', 'descricao', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo form_textarea(array('name' => 'descricao','id' => 'descricao','placeholder' => 'Descrição'), set_value('descricao'));
    echo    '</div>';
    echo '</div>';
    
    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Adicionar', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    ?>