<?php
if ($_SESSION['autorizacao'] != AUTORIZACAO_ADMINISTRADOR)
    redirect('');
?>

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
        <link href="<?php echo base_url(); ?>js/plugins/tables/datatables/jquery.dataTables.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>js/plugins/forms/datepicker/datepicker.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>js/plugins/forms/switch/bootstrapSwitch.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>js/plugins/forms/select2/select2.css" rel="stylesheet" />

        <!-- app stylesheets -->
        <link href="<?php echo base_url(); ?>css/app.css" rel="stylesheet" />

        <!-- dialog stylesheets -->
        <link href="<?php echo base_url(); ?>css/jquery-impromptu.min.css" rel="stylesheet" />

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

        <!-- Charts plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/charts/pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/charts/sparklines/jquery.sparkline.min.js"></script>

        <!-- Form plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/forms/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/mask/jquery.mask.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/datepicker/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/wizard/jquery.form.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/wizard/jquery.form.wizard.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/validation/jquery.validate.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/switch/bootstrapSwitch.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/select2/select2.js"></script>

        <!-- Dialogs -->
        <script src="<?php echo base_url(); ?>js/jquery-impromptu.min.js"></script>

        <!-- Tables plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/tables/datatables/jquery.dataTables.min.js"></script>

        <!-- UI plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/ui/range-slider/rangeslider-ruler.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/ui/animated-progress-bar/jquery.progressbar.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/ui/jgrowl/jquery.jgrowl.js"></script>

        <!-- Misc plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/misc/listnav/jquery.listnav.min-2.1.js"></script>

        <!-- Init plugins -->
        <script src="<?php echo base_url(); ?>js/app.js"></script><!-- Core js functions -->
        <script src="<?php echo base_url(); ?>js/pages/widgets.js"></script><!-- Init plugins only for page -->
        <script src="<?php echo base_url(); ?>js/pages/ui-elements.js"></script><!-- Init plugins only for page -->
        <script src="<?php echo base_url(); ?>js/pages/domready.js"></script><!-- Init plugins only for page -->
        <script src="<?php echo base_url(); ?>js/pages/data-tables.js"></script><!-- Init plugins only for page -->
        <script src="<?php echo base_url(); ?>js/pages/form-wizard.js"></script><!-- Init plugins only for page -->
        <script src="<?php echo base_url(); ?>js/pages/form-validation.js"></script><!-- Init plugins only for page -->

        <!-- Bootstrap script -->
        <script src="<?php echo base_url(); ?>js/bootstrap/bootbox.min.js"></script>

        <!-- Custom script -->
        <script src="<?php echo base_url(); ?>js/functions.js"></script>
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

                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">
                            <?php
                                echo anchor('login/inicio', '<i class="icon20 i-home-3"></i>');
                            ?>
                        </li>

                        <li class="divider-vertical"></li>
                        <li class="dropdown user">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <i class="icon20 i-user"></i>(<?php echo $_SESSION['nome']; ?>)
                                <span class="more"><i class="icon16 i-arrow-down-2"></i></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><?php echo anchor('requerentes/editar_requerente/'.$_SESSION['id_user'], '<i class="icon16 i-user"></i> Editar perfil'); ?>
                                <li role="presentation"><?php echo anchor('logout', '<i class="icon16 i-exit"></i> Sair'); ?>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </nav>
        </header> <!-- End #header  -->

        <div class="main">
            <aside id="sidebar">
                <div class="side-options">
                    <ul>
                        <li><a href="#" id="collapse-nav" class="act act-primary tip" title="Colapsar navegação"><i class="icon16 i-arrow-left-7"></i></a></li>
                    </ul>
                </div>

                <div class="sidebar-wrapper">
                    <nav id="mainnav">
                        <ul class="nav nav-list">
                            <?php
                            echo '<li>'.
                                anchor('configuracoes/bairros/listar_bairros', '<span class="icon"><i class="icon20 i-home-11"></i></span>
                                                                                <span class="txt">Bairros</span>').
                            '</li>';

                            echo '<li>'.
                                anchor('configuracoes/ruas/listar_ruas', '<span class="icon"><i class="icon20 i-road"></i></span>
                                                                          <span class="txt">Ruas</span>').
                            '</li>';

                            echo '<li>'.
                                anchor('configuracoes/categorias_requerimento/listar_categorias', '<span class="icon"><i class="icon20 i-road"></i></span>
                                                                            <span class="txt">Categorias requerimento</span>').
                            '</li>';
                            
                            echo '<li>'.
                                anchor('configuracoes/secretarias/listar_secretarias', '<span class="icon"><i class="icon20 i-road"></i></span>
                                                                                        <span class="txt">Secretarias</span>').
                            '</li>';
                            ?>
                        </ul>
                    </nav> <!-- End #mainnav -->
                </div> <!-- End .sidebar-wrapper  -->
            </aside><!-- End #sidebar  -->

            <section id="content">
                <div class="wrapper">

                    <div class="crumb">
                        <ul class="breadcrumb">
                            <?php
                            $cat = $this->uri->segment(2);

                            echo '<li'. ($cat=='bairros' ? ' class="active"><i class="icon16 i-office"></i></li>' :
                                    '>'.anchor('configuracoes/bairros/listar_bairros', '<i class="icon16 i-office"></i>') .'</li>');
                            echo '<li'. ($cat=='ruas' ? ' class="active"><i class="icon16 i-road"></i></li>' :
                                    '>'.anchor('configuracoes/ruas/listar_ruas', '<i class="icon16 i-road"></i>') .'</li>');
                            ?>
                        </ul>
                    </div>

                    <?php $this->load->view($subview); ?>

                </div> <!-- End .wrapper  -->
            </section>

        </div><!-- End .main  -->
    </body>
</html>