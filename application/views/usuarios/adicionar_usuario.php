<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-user-plus-3"></i> Adicionar usuário</h1>
    </div>

    <div class="row">        
        <div class="col-lg-12">
            <div class="panel panel-default">      
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-user"></i></div> 
                    <h4>Perfil</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->

                <div class="panel-body">

                <?php
                echo form_open('usuarios/adicionar_usuario', 'class="bs-docs-example form-horizontal"');

                echo validation_errors('<div class="alert alert-error">','</div>');
                if ($this->session->userdata('usuario_adicionado'))
                {
                    echo '<div class="alert alert-success">'. $this->session->userdata('usuario_adicionado') .'</div>';
                    $this->session->unset_userdata('usuario_adicionado');
                }

                // nome
                echo '<div class="form-group">';
                echo form_label('Nome', 'nome', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-5">';
                echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Nome',
                                'class' => 'form-control','autofocus' => 'autofocus'), set_value('nome'));
                echo    '</div>';
                echo '</div>';
                
                // avatar
                echo '<div class="form-group">';
                echo form_label('Avatar', 'avatar', array('class' => 'col-lg-2 control-label'));                
                echo    '<div class="col-lg-10">';
                echo        '<div class="profile-avatar">';
                echo            '<img src="'. base_url(). 'images/avatars/avatar.png" alt="Avatar">';
                echo        '</div>';
                echo        '<input type="file" class="form-control">';
                echo    '</div>';
                echo '</div>';

                // usuario
                echo '<div class="form-group">';
                echo form_label('Usuário', 'usuario', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-5">';
                echo    form_input(array('name' => 'usuario','id' => 'usuario', 'class' => 'form-control',
                            'placeholder' => 'Usuário'), set_value('usuario'));
                echo    '</div>';
                echo '</div>';

                // password
                echo '<div class="form-group">';
                echo form_label('Senha', 'senha', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-5">';
                echo    form_password(array('name' => 'senha','id' => 'senha',
                                'class' => 'form-control','placeholder' => 'Senha'));
                echo    '</div>';
                echo '</div>';

                // password2
                echo '<div class="form-group">';
                echo form_label('Repetir Senha', 'senha2', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-5">';
                echo    form_password(array('name' => 'senha2','id' => 'senha2',
                            'class' => 'form-control','placeholder' => 'Senha'));
                echo    '</div>';
                echo '</div>';

                // email
                echo '<div class="form-group">';
                echo form_label('E-mail', 'email', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-5">';
                echo    form_input(array('name' => 'email','id' => 'email',
                            'class' => 'form-control','placeholder' => 'E-mail'), set_value('email'));
                echo    '</div>';
                echo '</div>';

                // autorizacao
                echo '<div class="form-group">';

                echo    '<label for="autorizacao" class="col-lg-2 control-label">Autorização</label>';
                echo    '<div class="col-lg-10">';
                echo        '<select id="autorizacao" name="autorizacao">';
                echo            '<option value="1">Administrador</option>';
                echo            '<option value="2">Operador</option>';
                echo        '</select>';
                echo    '</div>';

                echo '</div>';
                
                echo '<div class="form-group">';
                echo    '<div class="col-lg-offset-2">';
                echo        '<div class="pad-left15">';
                echo        form_submit('submit', 'Adicionar', 'class="btn btn-primary"');
                echo        '</div>';
                echo    '</div>';
                echo '</div>';

                echo form_close();
                ?>

                </div><!-- End .panel-body -->
           </div><!-- End .widget -->
       </div><!-- End .col-lg-6  -->     
    </div><!-- End .row-fluid  -->
</div> 