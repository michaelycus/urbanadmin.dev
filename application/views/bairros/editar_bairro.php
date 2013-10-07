
    <ul class="nav nav-pills">
        <li><?php echo anchor('bairros/listar_bairros', 'Listar') ?></li>
        <li><?php echo anchor('bairros/adicionar_bairro', 'Adicionar') ?></li>
    </ul>

    <?php
    $id = $this->uri->segment(3);
    if ($id==NULL && $bairro==NULL) redirect('bairros');
    
    echo form_open('bairros/editar_bairro', 'class="bs-docs-example form-horizontal"');
    
    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('bairro_editado'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('bairro_editado') .'</div>';
        $this->session->unset_userdata('bairro_editado');
    }
    
    echo '<h4>Editar bairro</h4>';

    // nome
    echo '<div class="control-group">';    
    echo form_label('Nome', 'nome', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Nome do bairro'), set_value('nome',$bairro->nome));
    echo    '</div>';
    echo '</div>';
    
    // descricao
    echo '<div class="control-group">';
    echo form_label('Descrição', 'descricao', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_textarea(array('name' => 'descricao','id' => 'descricao','placeholder' => 'Descrição'), set_value('descricao',$bairro->descricao));
    echo    '</div>';
    echo '</div>';
    
    // nome_presidente
    echo '<div class="control-group">';
    echo form_label('Nome presidente', 'nome_presidente', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'nome_presidente','id' => 'nome_presidente','placeholder' => 'Nome presidente'), set_value('nome_presidente',$bairro->nome_presidente));
    echo    '</div>';
    echo '</div>';
    
    // telefone_presidente
    echo '<div class="control-group">';
    echo form_label('Telefone presidente', 'telefone_presidente', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'telefone_presidente','id' => 'telefone_presidente','placeholder' => 'Telefone presidente'), set_value('telefone_presidente',$bairro->telefone_presidente));
    echo    '</div>';
    echo '</div>';
    
    // endereco_presidente
    echo '<div class="control-group">';
    echo form_label('Endereço presidente', 'endereco_presidente', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'endereco_presidente','id' => 'endereco_presidente','placeholder' => 'Endereço presidente'), set_value('endereco_presidente',$bairro->endereco_presidente));
    echo    '</div>';
    echo '</div>';
    
    // email_presidente
    echo '<div class="control-group">';
    echo form_label('E-mail presidente', 'email_presidente', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'email_presidente','id' => 'email_presidente','placeholder' => 'E-mail presidente'), set_value('email_presidente',$bairro->email_presidente));
    echo    '</div>';
    echo '</div>';
    
    // populacao
    echo '<div class="control-group">';
    echo form_label('População', 'populacao', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'populacao','id' => 'populacao','placeholder' => 'População'), set_value('populacao',$bairro->populacao));
    echo    '</div>';
    echo '</div>';    
    
    echo form_hidden('id', $bairro->id);
    
    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Editar', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    ?>