
    <ul class="nav nav-pills">
        <li><?php echo anchor('requerimentos/listar_requerimentos', 'Listar') ?></li>
        <li class="active"><?php echo anchor('requerimentos/cadastrar_requerimento', 'Cadastrar') ?></li>
    </ul>

    <?php    
    echo form_open_multipart('requerimentos/cadastrar_requerimento', 'class="bs-docs-example form-horizontal"');
    
    if (!empty($error))
        echo '<div class="alert alert-error">'. $error .'</div>';
    
    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('requerimento_cadastrado'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('requerimento_cadastrado') .'</div>';
        $this->session->unset_userdata('requerimento_cadastrado');
    }
    
    echo '<h4>Cadastrar requerimento</h4>';
    
    // titulo
    echo '<div class="control-group">';
    echo form_label('Título', 'titulo', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo form_input(array('name' => 'titulo','id' => 'titulo','placeholder' => 'Ex:'), set_value('titulo'));
    echo    '</div>';
    echo '</div>';
    
    // descricao
    echo '<div class="control-group">';
    echo form_label('Descrição', 'descricao', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_textarea(array('name' => 'descricao','id' => 'descricao','placeholder' => 'Descrição do requerimento...'), set_value('descricao'));
    echo    '</div>';
    echo '</div>';
    
    // id_bairro
    echo '<div class="control-group">';
    echo    '<label for="id_bairro" class="control-label">Bairro</label>';
    echo    '<div class="controls">';
    echo        '<select id="id_bairro" name="id_bairro">';
    foreach ($bairros as $bairro)
    {
        echo        '<option value="'.$bairro->id.'" '.set_select('id_bairro', $bairro->id).'>'.$bairro->nome.'</option>';
    }
    echo        '</select>';
    echo    '</div>';
    echo '</div>';
    
    echo '<hr>';
    
    // anexo_1
    echo '<div class="control-group">';
    echo form_label('Anexo 1', 'anexo_1', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo        form_upload('anexo_1');
    echo    '</div>';
    echo '</div>';
    
    // anexo_2
    echo '<div class="control-group">';
    echo form_label('Anexo 2', 'anexo_2', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo        form_upload('anexo_2');
    echo    '</div>';
    echo '</div>';
    
    // anexo_3
    echo '<div class="control-group">';
    echo form_label('Anexo 3', 'anexo_3', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo        form_upload('anexo_3');
    echo    '</div>';
    echo '</div>';
    
    echo form_hidden('id', $bairro->id);
    
    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo        form_submit('submit', 'Cadastrar requerimento', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    ?>