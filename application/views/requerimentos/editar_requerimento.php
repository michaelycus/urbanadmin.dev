
    <ul class="nav nav-pills">
        <li><?php echo anchor('requerimentos/listar_requerimentos', 'Listar') ?></li>
        <li><?php echo anchor('requerimentos/adicionar_requerimentos', 'Adicionar') ?></li>
    </ul>

    <?php
    $id = $this->uri->segment(3);
    if ($id==NULL && $requerimento==NULL) redirect('requerimentos');
    
    echo form_open_multipart('requerimentos/editar_requerimento', 'class="bs-docs-example form-horizontal"');
    
    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('requerimento_editado'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('requerimento_editado') .'</div>';
        $this->session->unset_userdata('requerimento_editado');
    }
    
    echo '<h4>Editar requerimento</h4>';
    
    // titulo
    echo '<div class="control-group">';
    echo form_label('Título', 'titulo', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo        form_input(array('name' => 'titulo','id' => 'titulo','placeholder' => 'Ex:'), set_value('titulo',$requerimento->titulo));
    echo    '</div>';
    echo '</div>';
    
    // descricao
    echo '<div class="control-group">';
    echo form_label('Descrição', 'descricao', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo        form_textarea(array('name' => 'descricao','id' => 'descricao','placeholder' => 'Descrição do requerimento...'), set_value('descricao',$requerimento->descricao));
    echo    '</div>';
    echo '</div>';
    
    // bairros
    echo '<div class="control-group">';
    echo    '<label for="id_bairro" class="control-label">Bairro</label>';
    echo    '<div class="controls">';
    echo        '<select id="id_bairro" name="id_bairro">';
    foreach ($bairros as $bairro)
    {
        echo        '<option value="'.$bairro->id.'" '.set_select('id_bairro', $bairro->id, $bairro->id==$requerimento->id_bairro).'>'.$bairro->nome.'</option>';
    }
    echo        '</select>';
    echo    '</div>';
    echo '</div>';
      
    echo form_hidden('id', $requerimento->id);
    
    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo        form_submit('submit', 'Editar requerimento', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    ?>