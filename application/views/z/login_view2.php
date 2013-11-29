
<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sign in &middot; Twitter Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

         Le styles 
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }

        </style>
        <link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet">

         HTML5 shim, for IE6-8 support of HTML5 elements 
        [if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]

         Fav and touch icons 
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
    </head>

    <body>

        <div class="container">

            <?php
            echo form_open('admin', 'class="form-signin"');
            echo '<h3 class="form-signin-heading">Entrar no sistema</h2>';

            $data = array(
                'name' => 'usuario',
                'id' => 'usuario',
                'placeholder' => 'Usuário',
                'class' => 'input-block-level'
            );
            echo form_input($data, set_value('usuario'));

            $data = array(
                'name' => 'senha',
                'id' => 'senha',
                'placeholder' => 'Senha',
                'class' => 'input-block-level'
            );
            echo form_password($data);

            echo form_submit('submit', 'Entrar', 'class="btn btn-large btn-primary"');

            echo form_close();
            ?>

            <span class="help-inline"><?php echo validation_errors(); ?></span>        

        </div>  /container 

    </body>
</html>-->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Urbis admin</title>
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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      </script><script src="js/html5shiv.js"></script></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo base_url(); ?>images/ico/favicon.png">
    
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

    <!-- Init plugins -->
    <script src="<?php echo base_url(); ?>js/app.js"></script><!-- Core js functions -->
    <script src="<?php echo base_url(); ?>js/pages/login.js"></script><!-- Init plugins only for page -->

  </head>
  <body>
    <div class="container-fluid">
        <div id="login">
            <div class="login-wrapper" data-active="log">
               <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>images/logo.png" alt="Urbis" class="img-responsive"></a>
                <div id="log">
                    <div id="avatar">
                        <img src="<?php echo base_url(); ?>images/avatars/brasao.png" alt="SuggeElson" class="img-responsive">
                    </div>
                    <div class="page-header">
                        <h3 class="center">Acesse</h3>
                    </div>
                    <?php echo form_open('admin', 'role="form" id="login-form" class="form-horizontal"'); ?>
                        <div class="row">
                            <div class="form-group relative">
                                <div class="icon"><i class="icon20 i-user"></i></div>
                                <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Username">
                                
                            </div><!-- End .control-group  -->
                            <div class="form-group relative">
                                <div class="icon"><i class="icon20 i-key"></i></div>
                                <input class="form-control" type="password" name="senha" id="senha" placeholder="Password">
                                
                            </div><!-- End .control-group  -->
                            <div class="form-group relative">
                                <button id="loginBtn" type="submit" class="btn btn-primary pull-right col-lg-5">Login</button>
                            </div>
                        </div><!-- End .row-fluid  -->
                    <?php echo form_close(); ?>
                </div>                
            </div>
            <div id="bar" data-active="log">
                <div class="btn-group btn-group-vertical">
                    <a id="log" href="#" class="btn tipR" title="Login"><i class="icon16 i-key"></i></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
  </body>
</html>