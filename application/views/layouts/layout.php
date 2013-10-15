<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Genyx admin v1.0</title>
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
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>js/conditionizr.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/core/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/core/jrespond/jRespond.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.genyxAdmin.js"></script>


        <!-- Charts plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/charts/pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/charts/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/charts/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/charts/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/charts/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/charts/flot/jquery.flot.orderBars.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/charts/flot/jquery.flot.time.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/charts/sparklines/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/charts/flot/date.js"></script> <!-- Only for generating random data delete in production site-->
        <script src="<?php echo base_url(); ?>js/plugins/charts/pie-chart/jquery.easy-pie-chart.js"></script>
        <!--<script src="<?php echo base_url(); ?>js/plugins/charts/gauge/justgage.1.0.1.min.js"></script>-->
        <script src="<?php echo base_url(); ?>js/plugins/charts/gauge/raphael.2.1.0.min.js"></script>

        <!-- Form plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/forms/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/mask/jquery.mask.min.js"></script>

        <!-- Misc plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/misc/fullcalendar/fullcalendar.min.js"></script>

        <!-- UI plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/ui/range-slider/rangeslider-ruler.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/ui/animated-progress-bar/jquery.progressbar.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/ui/jgrowl/jquery.jgrowl.js"></script>

        <!-- Init plugins -->
        <script src="<?php echo base_url(); ?>js/app.js"></script><!-- Core js functions -->
        <script src="<?php echo base_url(); ?>js/pages/ui-elements.js"></script><!-- Init plugins only for page -->
        <script src="<?php echo base_url(); ?>js/pages/domready.js"></script><!-- Init plugins only for page -->
        <script src="<?php echo base_url(); ?>js/pages/dashboard.js"></script><!-- Init plugins only for page -->

        <!-- Custom script -->
        <script src="<?php echo base_url(); ?>js/functions.js"></script>

    </head>
    <body>
        <header id="header">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <a class="navbar-brand" href="dashboard.html"><img src="<?php echo base_url(); ?>images/logo.png" alt="Genyx admin" class="img-responsive"></a>
                <div class="nav-no-collapse">

                    <ul class="nav navbar-nav pull-right">
 <!--                        <li class="divider-vertical"></li>
                       <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon24 i-bell-2"></i>
                                <span class="notification red">6</span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="#" class=""><i class="icon16 i-calendar-2"></i> Admin Jenny add event</a></li>
                                <li role="presentation"><a href="#" class=""><i class="icon16 i-file-zip"></i> User Dexter attach file</a></li>
                                <li role="presentation"><a href="#" class=""><i class="icon16 i-stack-picture"></i> User Dexter attach 3 pictures</a></li>
                                <li role="presentation"><a href="#" class=""><i class="icon16 i-cart-add"></i> New orders <span class="notification green">2</span></a></li>
                                <li role="presentation"><a href="#" class=""><i class="icon16 i-bubbles-2"></i> New comments <span class="notification red">5</span></a></li>
                                <li role="presentation"><a href="#" class=""><i class="icon16 i-pie-5"></i> Daily stats is generated</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon24 i-envelop-2"></i>
                                <span class="notification red">3</span>
                            </a>
                            <ul class="dropdown-menu messages" role="menu">
                                <li class="head" role="presentation">
                                    <h4>Inbox</h4>
                                    <span class="count">3 messages</span>
                                    <span class="new-msg"><a href="#" class="tipB" title="Write message"><i class="icon16 i-pencil-5"></i></a></span>
                                </li>
                                <li role="presentation">
                                    <a href="#" class="clearfix">
                                        <span class="avatar"><img src="<?php echo base_url(); ?>images/avatars/peter.jpg" alt="avatar"></span>
                                        <span class="msg">Call me i need to talk with you</span>
                                        <button class="btn close"><i class="icon12 i-close-2"></i></button>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#" class="clearfix">
                                        <span class="avatar"><img src="<?php echo base_url(); ?>images/avatars/milen.jpg" alt="avatar"></span>
                                        <span class="msg">Problem with registration</span>
                                        <button class="btn close"><i class="icon12 i-close-2"></i></button>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#" class="clearfix">
                                        <span class="avatar"><img src="<?php echo base_url(); ?>images/avatars/anonime.jpg" alt="avatar"></span>
                                        <span class="msg">I have question about ...</span>
                                        <button class="btn close"><i class="icon12 i-close-2"></i></button>
                                    </a>
                                </li>
                                <li class="foot" role="presentation"><a href="email.html">View all messages</a></li>
                            </ul>
                        </li>-->
                        <li class="divider-vertical"></li>
                        <li class="dropdown user">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>images/avatars/sugge.jpg" alt="sugge">
                                <span class="more"><i class="icon16 i-arrow-down-2"></i></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="#" class=""><i class="icon16 i-cogs"></i> Settings</a></li>
                                <li role="presentation"><a href="profile.html" class=""><i class="icon16 i-user"></i> Profile</a></li>
                                <li role="presentation"><a href="index.html" class=""><i class="icon16 i-exit"></i> Logout</a></li>
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
                        <li><a href="#" id="collapse-nav" class="act act-primary tip" title="Collapse navigation"><i class="icon16 i-arrow-left-7"></i></a></li>
                    </ul>
                </div>

                <div class="sidebar-wrapper">
                    <nav id="mainnav">
                        <ul class="nav nav-list">
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="icon20 i-drawer-3"></i></span>
                                    <span class="txt">Requerimentos</span>
                                </a>
                                <ul class="sub">
                                    <li>
                                        <?php echo anchor('requerimentos/cadastrar_requerimento',
                                                '<span class="icon"><i class="icon20 i-stack-empty"></i></span>
                                                 <span class="txt">Cadastrar requerimento</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('requerimentos/listar_requerimentos',
                                                '<span class="icon"><i class="icon20 i-stack-list"></i></span>
                                                 <span class="txt">Listar requerimentos</span>');?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="icon20 i-users"></i></span>
                                    <span class="txt">Requerentes</span>
                                </a>
                                <ul class="sub">
                                    <li>
                                        <?php echo anchor('requerentes/cadastrar_requerente',
                                                '<span class="icon"><i class="icon20 i-user-plus"></i></span>
                                                 <span class="txt">Cadastrar requerente</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('requerentes/da_cidade',
                                                '<span class="icon"><i class="icon20 i-user-3"></i></span>
                                                 <span class="txt">Da cidade</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('requerentes/de_outras_cidades',
                                                '<span class="icon"><i class="icon20 i-user-4"></i></span>
                                                 <span class="txt">De outras cidades</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('requerentes/vereadores',
                                                '<span class="icon"><i class="icon20 i-user-7"></i></span>
                                                 <span class="txt">Vereadores</span>');?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="icon20 i-home-11"></i></span>
                                    <span class="txt">Bairros</span>
                                </a>
                                <ul class="sub">
                                    <li>
                                        <?php echo anchor('bairros/cadastrar_bairro',
                                                '<span class="icon"><i class="icon20 i-home-8"></i></span>
                                                 <span class="txt">Cadastrar</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('bairros/listar_bairros',
                                                '<span class="icon"><i class="icon20 i-office"></i></span>
                                                 <span class="txt">Listar</span>');?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="icon20 i-stats-up"></i></span>
                                    <span class="txt">Gráficos</span>
                                </a>
                                <ul class="sub">
                                    <li>
                                        <?php echo anchor('graficos/requerimentos_por_bairro',
                                                '<span class="icon"><i class="icon20 i-home-9"></i></span>
                                                 <span class="txt">Requesições por bairro</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('graficos/listar_bairros',
                                                '<span class="icon"><i class="icon20 i-office"></i></span>
                                                 <span class="txt">Listar</span>');?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav> <!-- End #mainnav -->
                </div> <!-- End .sidebar-wrapper  -->
            </aside><!-- End #sidebar  -->

            <section id="content">
                <div class="wrapper">

                    <?php $this->load->view($subview); ?>

                </div> <!-- End .wrapper  -->
            </section>

        </div><!-- End .main  -->
    </body>
</html>