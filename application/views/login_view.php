
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Urban Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="SuggeElson" />
        <meta name="description" content="Genyx admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
        <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
        <meta name="application-name" content="Genyx admin template" />

        <!-- Headings -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
        <!-- Text -->
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />

        <!--[if lt IE 9]>
       <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
       <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
       <link href="http://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet" type="text/css" />
       <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
       <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
       <![endif]-->

        <!-- Core stylesheets do not remove -->
        <link href="<?php echo base_url(); ?>css/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/bootstrap/bootstrap-theme.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/icons.css" rel="stylesheet" />

        <!-- Plugins stylesheets -->
        <link href="<?php echo base_url(); ?>js/plugins/forms/uniform/uniform.default.css" rel="stylesheet" /> 

        <!-- app stylesheets -->
        <link href="<?php echo base_url(); ?>css/app.css" rel="stylesheet" /> 

        <!-- Custom stylesheets ( Put your own changes here ) -->
        <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet" /> 

        <!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->

        <!-- Force IE9 to render in normal mode -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="images/ico/favicon.png">

        <!-- Le javascript
        ================================================== -->
        <!-- Important plugins put in all pages -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap/bootstrap.js"></script>  
        <script src="<?php echo base_url(); ?>js/conditionizr.min.js"></script>  
        <script src="<?php echo base_url(); ?>js/plugins/core/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/core/jrespond/jRespond.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.genyxAdmin.js"></script>

        <!-- Form plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/forms/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/validation/jquery.validate.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/mask/jquery.mask.min.js"></script>

        <!-- Init plugins -->
        <script src="<?php echo base_url(); ?>js/app.js"></script><!-- Core js functions -->
        <script src="<?php echo base_url(); ?>js/pages/login.js"></script><!-- Init plugins only for page -->

    </head>
    <body>
        <div class="container-fluid">
            <div id="login">
                <div class="login-wrapper" data-active="<?php echo (empty($view)) ? 'log' : $view; ?>">
                    <a class="navbar-brand" href="dashboard.html"><img src="<?php echo base_url(); ?>images/logodark.png" alt="Genyx admin" class="img-responsive"></a>
                    <div id="log">
<!--                        <div id="avatar">
                            <img src="<?php echo base_url(); ?>images/avatars/suggebig.jpg" alt="SuggeElson" class="img-responsive">
                        </div>-->
                        <div class="page-header">
                            <h3 class="center">Acesse</h3>
                        </div>
                        <?php echo form_open('login', 'role="form" id="login-form" name="login-form" class="form-horizontal"'); ?>
                            <div class="row">
                                <?php
                                if ($this->session->userdata('requerente_cadastrado'))
                                {
                                    echo '<div class="alert alert-success">'. $this->session->userdata('requerente_cadastrado') .'</div>';
                                    $this->session->unset_userdata('requerente_cadastrado');
                                }
                                ?>                                
                                <div class="form-group relative">
                                    <div class="icon"><i class="icon20 i-user"></i></div>
                                    <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF" value="">

                                </div><!-- End .control-group  -->
                                <div class="form-group relative">
                                    <div class="icon"><i class="icon20 i-key"></i></div>
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Senha" value="">

                                </div><!-- End .control-group  -->
                                <div class="form-group relative">
                                    <button id="loginBtn" type="submit" class="btn btn-primary pull-right col-lg-5">Login</button>
                                </div>
                            </div><!-- End .row-fluid  -->
                        <?php echo form_close(); ?>
                        <p class="center">Não possui uma conta? <a href="#" id="register"><strong>Crie uma agora</strong></a></p>
<!--                        <div class="or center"><strong>or</strong></div>
                        <hr class="seperator">
                        <a href="#" class="btn btn-primary pull-left"><i class="icon16 i-facebook gap-left0"></i> Conectar</a>
                        <a href="#" class="btn btn-info pull-right"><i class="icon16 i-twitter gap-left0"></i> Conectar</a>-->
                    </div>
                    <div id="reg">
                        <div class="page-header">
                            <h3 class="center">Criar uma conta</h3>
                        </div>
                        <?php echo form_open('login/cadastrar_requerente', 'role="form" id="reg-form" name="reg-form" class="form-horizontal"');
                        
                        echo validation_errors('<div class="alert alert-error">','</div>');                        
                        ?>
                            <div class="row">
                                <?php
                                echo '<div class="form-group">';
                                echo form_label('Nome', 'nome', array('class' => 'col-lg-3 control-label'));
                                echo    '<div class="col-lg-9">';
                                echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Nome',
                                            'class' => 'form-control','autofocus' => 'autofocus'), set_value('nome'));
                                echo    '</div>';
                                echo '</div>';

                                echo '<hr>';
                                
                                // pessoa_fisica
                                ?>
                                <div class="form-group">
                                    <label for="pessoa_fisica" class="control-label"></label>
                                    <div class="col-lg-10">
                                        <label class="radio-inline">
                                            <input type="radio" name="pessoa_fisica" id="pessoa_fisica_0" class="form-control" value="0" checked>
                                            Pessoa física 
                                            <input type="radio" name="pessoa_fisica" id="pessoa_fisica_1" class="form-control" value="1">
                                            Pessoa jurídica
                                        </label>
                                    </div>
                                </div>
                                <?php

                                // --- PESSOA FÍSICA ---
                                echo '<div id="pessoa_f">';

                                // cpf
                                echo '<div class="form-group">';
                                echo form_label('CPF', 'cpf', array('class' => 'col-lg-3 control-label'));
                                echo    '<div class="col-lg-9">';
                                echo    form_input(array('name' => 'cpf','id' => 'cpf','placeholder' => 'CPF','class' => 'form-control cpf'), set_value('cpf'));
                                echo    '</div>';
                                echo '</div>';

                                // rg
//                                echo '<div class="form-group">';
//                                echo form_label('RG', 'rg', array('class' => 'col-lg-3 control-label'));
//                                echo    '<div class="col-lg-9">';
//                                echo    form_input(array('name' => 'rg','id' => 'rg','placeholder' => 'RG','class' => 'form-control rg'), set_value('rg'));
//                                echo    '</div>';
//                                echo '</div>';
//
//                                // profissao
//                                echo '<div class="form-group">';
//                                echo form_label('Profissão', 'profissao', array('class' => 'col-lg-3 control-label'));
//                                echo    '<div class="col-lg-9">';
//                                echo    form_input(array('name' => 'profissao','id' => 'profissao','placeholder' => 'Profissão','class' => 'form-control'), set_value('profissao'));
//                                echo    '</div>';
//                                echo '</div>';

                                echo '</div>';
                                // --- --- --- ---

                                // --- PESSOA JURIDICA ---

                                echo '<div id="pessoa_j">';

                                // cnpj
                                echo '<div class="form-group">';
                                echo form_label('CNPJ', 'cnpj', array('class' => 'col-lg-3 control-label'));
                                echo    '<div class="col-lg-9">';
                                echo    form_input(array('name' => 'cnpj','id' => 'cnpj','placeholder' => 'CNPJ','class' => 'form-control cnpj'), set_value('cnpj'));
                                echo    '</div>';
                                echo '</div>';

                                echo '</div>';
                                // --- --- --- ---
                                
                                echo '<div class="form-group">';
                                echo form_label('Senha', 'rg', array('class' => 'col-lg-3 control-label'));
                                echo    '<div class="col-lg-9">';
                                echo form_password(array('name' => 'password','id' => 'password','placeholder' => '','class' => 'form-control'), set_value(''));
                                echo    '</div>';
                                echo '</div>';
                                
                                echo '<div class="form-group">';
                                echo form_label('Repita a senha', 'rg', array('class' => 'col-lg-3 control-label'));
                                echo    '<div class="col-lg-9">';
                                echo form_password(array('name' => 'password2','id' => 'password2','placeholder' => '','class' => 'form-control'), set_value(''));
                                echo    '</div>';
                                echo '</div>';

                                echo '<hr>';

                                // email
                                echo '<div class="form-group">';
                                echo form_label('E-mail', 'email', array('class' => 'col-lg-3 control-label'));
                                echo    '<div class="col-lg-9">';
                                echo    form_input(array('name' => 'email','id' => 'email','placeholder' => 'E-mail','class' => 'form-control'), set_value('email'));
                                echo    '</div>';
                                echo '</div>';

//                                // telefone
//                                echo '<div class="form-group">';
//                                echo form_label('Telefone', 'telefone', array('class' => 'col-lg-3 control-label'));
//                                echo    '<div class="col-lg-9">';
//                                echo    form_input(array('name' => 'telefone','id' => 'telefone','placeholder' => 'Telefone','class' => 'form-control telefone'), set_value('telefone'));
//                                echo    '</div>';
//                                echo '</div>';
//
//                                // endereco
//                                echo '<div class="form-group">';
//                                echo form_label('Endereço', 'endereco', array('class' => 'col-lg-3 control-label'));
//                                echo    '<div class="col-lg-9">';
//                                echo    form_input(array('name' => 'endereco','id' => 'endereco','placeholder' => 'Endereço','class' => 'form-control'), set_value('endereco'));
//                                echo    '</div>';
//                                echo '</div>';

                                echo '<hr>';

                                // mora_cidade
                                echo '<div class="form-group">';
                                echo form_label('Reside na cidade?', 'mora_cidade', array('class' => 'col-lg-4 control-label'));
                                echo    '<div class="col-lg-8">';
                                echo        '<select id="mora_cidade" name="mora_cidade">';
                                echo            '<option value="1" '.set_select('mora_cidade').'>Sim</option>';
                                echo            '<option value="0" '.set_select('mora_cidade').'>Não</option>';
                                echo        '</select>';
                                echo    '</div>';
                                echo '</div>';

                                // --- NA CIDADE ---
                                echo '<div id="na_cidade">';

                                // id_bairro
                                echo '<div class="form-group">';
                                echo    '<label for="id_bairro" class="col-lg-4 control-label">Em qual bairro?</label>';
                                echo    '<div class="col-lg-8">';
                                echo        '<select id="id_bairro" name="id_bairro">';
                                foreach ($bairros as $bairro)
                                {
                                    echo        '<option value="'.$bairro->id.'" '.set_select('id_bairro', $bairro->id).'>'.$bairro->nome.'</option>';
                                }
                                echo        '</select>';
                                echo    '</div>';
                                echo '</div>';

                                echo '</div>';
                                // --- --- ---

                                // --- OUTRA CIDADE ---
                                echo '<div id="outra_cidade">';

                                echo '<div class="form-group">';
                                echo form_label('Estado', 'estado', array('class' => 'col-lg-4 control-label'));
                                echo    '<div class="col-lg-8">';
                                            $options = array ('' => 'Escolha um Estado');
                                            foreach($estados as $estado)
                                                $options[$estado->id] = $estado->nome;
                                echo        form_dropdown('estado', $options);
                                echo    '</div>';
                                echo '</div>';

                                echo '<div class="form-group">';
                                echo form_label('Cidade', 'cidade', array('class' => 'col-lg-4 control-label'));
                                echo    '<div class="col-lg-8">';
                                echo         form_dropdown('cidade', array('' => 'Escolha uma Cidade'), '','id="cidade"' );
                                echo    '</div>';
                                echo '</div>';

                                // cep
                                echo '<div class="form-group">';
                                echo form_label('CEP', 'cep', array('class' => 'col-lg-4 control-label'));
                                echo    '<div class="col-lg-8">';
                                echo    form_input(array('name' => 'cep','id' => 'cep','placeholder' => 'CEP','class' => 'form-control cep'), set_value('cep'));
                                echo    '</div>';
                                echo '</div>';

                                echo '</div>';

                                // --- --- --- 
                                
                                ?>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-block btn-danger">Cadastrar minha conta</button>
                                </div>
                            </div><!-- End .row-fluid  -->
                        <?php echo form_close(); ?>
                    </div>
                    <div id="forgot">
                        <div class="page-header">
                            <h3 class="center">Esqueceu a senha</h3>
                        </div>
                        <form class="form-horizontal" id="forgot-form" name="forgot-form">
                            <div class="row">
                                <div class="form-group relative">
                                    <div class="icon"><i class="icon20 i-user"></i></div>
                                    <input class="form-control" type="text" name="user" id="user" placeholder="CPF">
                                </div><!-- End .control-group  -->
                                <div class="form-group relative">
                                    <div class="icon"><i class="icon20 i-envelop-2"></i></div>
                                    <input class="form-control" type="text" name="email" id="email-field" placeholder="Seu email">
                                </div><!-- End .control-group  -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-block btn-success">Recuperar a senha</button>
                                </div>
                            </div><!-- End .row-fluid  -->
                        </form>
                    </div>
                </div>
                <div id="bar" data-active="log">
                    <div class="btn-group btn-group-vertical">
                        <a id="log" href="#" class="btn tipR" title="Login"><i class="icon16 i-key"></i></a>
                        <a id="reg" href="#" class="btn tipR" title="Criar conta"><i class="icon16 i-user-plus"></i></a>
                        <a id="forgot" href="#" class="btn tipR" title="Esqueceu a senha"><i class="icon16 i-question"></i></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        
        <script type="text/javascript" src="<?php echo base_url() . 'js/cep.js'; ?>"></script>
        <script type="text/javascript">
            var path = '<?php echo site_url(); ?>';
        </script>

        <script>

            $(document).ready(function(){
                $('.telefone').mask('(00) 0000-0000'); //telefone
                $('.cep').mask("00000-000");//cep
                $('.rg').mask('00.00.00.00.00'); //RG
                $('.cpf').mask('000.000.000-00'); //CPF
                $('.cnpj').mask('00.000.000/0000-00'); //CNPJ

                $("#outra_cidade").hide();

                $("#mora_cidade").change(function(){                    
                    var opt = $("#mora_cidade option:selected").val();

                    if (opt == '1')
                    {
                        $("#na_cidade").show(200);
                        $("#outra_cidade").hide(200);
                    }
                    else
                    {
                        $("#na_cidade").hide(200);
                        $("#outra_cidade").show(200);
                    }
                });
                
                $("#pessoa_j").hide();
                
                $(":radio").change(function(){
                    var rad = $('input[name=pessoa_fisica]:checked').val();

                    if (rad == '0')
                    {
                        $("#pessoa_f").show(200);
                        $("#pessoa_j").hide(200);
                    }
                    else
                    {
                        $("#pessoa_f").hide(200);
                        $("#pessoa_j").show(200);
                    }
                });
            });
        </script>
    </body>
</html>