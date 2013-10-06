
    <ul class="nav nav-pills">
        <li><?php echo anchor('usuarios', 'Listar') ?></li>
        <li class="active"><?php echo anchor('usuarios/adicionar_usuario', 'Adicionar') ?></li>
    </ul>

    <?php
    echo form_open('usuarios/adicionar_usuario', 'class="bs-docs-example form-horizontal"');

    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('usuario_adicionado'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('usuario_adicionado') .'</div>';
        $this->session->unset_userdata('usuario_adicionado');
    }

    echo '<h4>Adicionar usuário</h4>';

    // nome
    echo '<div class="control-group">';
    echo form_label('Nome', 'nome', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Nome'), set_value('nome'));
    echo    '</div>';
    echo '</div>';

    // usuario
    echo '<div class="control-group">';
    echo form_label('Usuário', 'usuario', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'usuario','id' => 'usuario','placeholder' => 'Usuário'), set_value('usuario'));
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
    echo    form_input(array('name' => 'email','id' => 'email','placeholder' => 'E-mail'), set_value('email'));
    echo    '</div>';
    echo '</div>';

    // autorizacao
    echo '<div class="control-group">';

    echo    '<label for="autorizacao" class="control-label">Autorização</label>';
    echo    '<div class="controls">';
    echo        '<select id="autorizacao" name="autorizacao">';
    echo            '<option value="1">Administrador</option>';
    echo            '<option value="2">Operador</option>';
    echo            '<option value="3">Colaborador</option>';
    echo        '</select>';
    echo    '</div>';

    echo '</div>';

    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Adicionar', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    ?>

    <hr>