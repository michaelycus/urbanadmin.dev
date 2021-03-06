<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Urban Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Michael Marques" />
        <meta name="description" content="Urban Admin é um sistema de gerenciamento de requerimentos onde um cidadão comum pode solicitar serviços para a prefeitura de sua cidade através da internet." />
        <meta name="keywords" content="urban, admin, urban admin, prefeitura, software, sistema, gerencimento cidades, urbano, software cidade, requerimento, prefeitura" />
        <meta name="application-name" content="Urban Admin" />

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
        

        <!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          </script><script src="js/html5shiv.js"></script></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="icon" href="<?php echo base_url(); ?>images/ico/favicon.ico">

        <!-- Le javascript
        ================================================== -->
        <!-- Important plugins put in all pages -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>js/conditionizr.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/core/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/core/jrespond/jRespond.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.genyxAdmin.js"></script>

        <!-- Form plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/forms/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/mask/jquery.mask.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/validation/jquery.validate.js"></script>

        <!-- Dialogs -->
        <script src="<?php echo base_url(); ?>js/jquery-impromptu.min.js"></script>

        <!-- Init plugins -->
        <script src="<?php echo base_url(); ?>js/app.js"></script><!-- Core js functions -->

        <!-- Bootstrap script -->
        <script src="<?php echo base_url(); ?>js/bootstrap/bootbox.min.js"></script>
            
    </head>
    <body>        
        
        <header id="header">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <?php echo anchor('login/inicio', '<img src="'. base_url() . 'images/logo.png" alt="Urban admin" class="img-responsive">', 'class="navbar-brand"'); ?>
                <button type="button" class="navbar-toggle btn-danger" data-toggle="collapse" data-target="#navbar-to-collapse">
                    <span class="sr-only">Toggle right menu</span>
                    <i class="icon16 i-arrow-8"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbar-to-collapse">
                </div><!--/.nav-collapse -->
            </nav>
        </header> <!-- End #header  -->

        <div class="main">

            <div class="container-fluid">

                <div class="row">                   
                        
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="panel panel-default" style="margin: 10px">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php
                                        
                                                                                
                                        if ($this->session->userdata('email_removido'))
                                        {
                                            echo '<div class="alert alert-success">'. $this->session->userdata('email_removido') .'</div>';
                                            $this->session->unset_userdata('email_removido');
                                        }                                        
                                        else
                                        {
                                            if ($this->session->userdata('email_invalido'))
                                            {
                                                echo '<div class="alert alert-error">'. $this->session->userdata('email_invalido') .'</div>';
                                                $this->session->unset_userdata('email_invalido');
                                            }

                                            echo form_open('newsletters/descadastrar', 'class="bs-docs-example form-horizontal" id="form" ');
                                        
                                            echo '<div class="form-group">';
                                            echo form_label('E-mail', 'email', array('class' => 'col-lg-3 control-label'));
                                            echo    '<div class="col-lg-6">';
                                            echo    form_input(array('name' => 'email','id' => 'email','placeholder' => '',
                                                        'class' => 'form-control','autofocus' => 'autofocus'), set_value('email'));
                                            echo    '</div>';
                                            echo '</div>';

                                            echo '<div class="form-group">';
                                            echo form_label('', '', array('class' => 'col-lg-3 control-label'));
                                            echo        '<div class="col-lg-9">';
                                            echo        form_submit('submit', 'Descadastrar', 'class="btn btn-danger"');
                                            echo        '</div>';
                                            echo    '</div>';
                                            echo '</div>';

                                            echo form_close();
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    
                </div><!-- End .row-fluid  -->
            </div>

        </div><!-- End .main  -->
        
    </body>
</html>