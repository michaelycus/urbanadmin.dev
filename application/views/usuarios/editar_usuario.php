
    <ul class="nav nav-pills">
        <li><?php echo anchor('usuarios', 'Listar') ?></li>
        <li><?php echo anchor('usuarios/adicionar_usuario', 'Adicionar') ?></li>
    </ul>

    <?php
    echo form_open('usuarios/editar_usuario', 'class="bs-docs-example form-horizontal"');

    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('usuario_editado'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('usuario_editado') .'</div>';
        $this->session->unset_userdata('usuario_editado');
    }
    
    dump($usuario);

    echo '<h4>Editar usuário</h4>';

    // nome
    echo '<div class="control-group">';
    echo form_label('Nome', 'nome', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Nome'), set_value('nome', $usuario->nome));
    echo    '</div>';
    echo '</div>';

    // usuario
    echo '<div class="control-group">';
    echo form_label('Usuário', 'usuario', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'usuario','id' => 'usuario','placeholder' => 'Usuário'), set_value('usuario', $usuario->usuario));
    echo    '</div>';
    echo '</div>';

    // password
    echo '<div class="control-group">';
    echo form_label('Senha', 'senha', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_password(array('name' => 'senha','id' => 'senha','placeholder' => 'Senha'));
    echo    '</div>';
    echo '</div>';

    // password2
    echo '<div class="control-group">';
    echo form_label('Repetir Senha', 'senha2', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_password(array('name' => 'senha2','id' => 'senha2','placeholder' => 'Senha'));
    echo    '</div>';
    echo '</div>';

    // email
    echo '<div class="control-group">';
    echo form_label('E-mail', 'email', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'email','id' => 'email','placeholder' => 'E-mail'), set_value('email', $usuario->email));
    echo    '</div>';
    echo '</div>';

    // autorizacao
    echo '<div class="control-group">';

    echo    '<label for="autorizacao" class="control-label">Autorização</label>';
    echo    '<div class="controls">';
    echo        '<select id="autorizacao" name="autorizacao">';
    echo            '<option value="1" '. ($usuario->autorizacao == 1 ? ' selected ' : '') .'>Administrador</option>';
    echo            '<option value="2" '. ($usuario->autorizacao == 2 ? ' selected ' : '') .'>Operador</option>';
    echo            '<option value="3" '. ($usuario->autorizacao == 3 ? ' selected ' : '') .'>Colaborador</option>';
    echo        '</select>';
    echo    '</div>';

    echo '</div>';
    
    echo form_hidden('id', $usuario->id);

    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Editar', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    ?>

    <hr>