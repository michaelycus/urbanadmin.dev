<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Urbis</title>
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
        <link href="<?php echo base_url(); ?>js/plugins/tables/datatables/jquery.dataTables.css" rel="stylesheet" />
        

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
        <script src="<?php echo base_url(); ?>js/plugins/charts/gauge/raphael.2.1.0.min.js"></script>
        <!--<script src="<?php echo base_url(); ?>js/plugins/charts/gauge/justgage.1.0.1.min.js"></script>-->

        <!-- Form plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/forms/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/mask/jquery.mask.min.js"></script>
        
        
        <!-- Tables plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/tables/datatables/jquery.dataTables.min.js"></script>

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
        <script src="<?php echo base_url(); ?>js/pages/data-tables.js"></script><!-- Init plugins only for page -->
        <!--<script src="<?php echo base_url(); ?>js/pages/dashboard.js"></script> Esse puglin impossibilita o carregamento do mapael -->

        <!-- Bootstrap script -->
        <script src="<?php echo base_url(); ?>js/bootstrap/bootbox.min.js"></script>

        <!-- Custom script -->
        <script src="<?php echo base_url(); ?>js/functions.js"></script>

    </head>
    <body>
        <header id="header">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <a class="navbar-brand" href="dashboard.html"><img src="<?php echo base_url(); ?>images/logo.png" alt="Genyx admin" class="img-responsive"></a>
                <div class="nav-no-collapse">

                    <ul class="nav navbar-nav pull-right">
                        <li class="divider-vertical"></li>
                        <li class="dropdown user">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>images/avatars/sugge.jpg" alt="sugge">
                                <span class="more"><i class="icon16 i-arrow-down-2"></i></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="profile.html" class=""><i class="icon16 i-user"></i> Perfil</a></li>
                                <li role="presentation"><?php echo anchor('usuarios/listar_usuarios', '<i class="icon16 i-users-4"></i> Listar usuários'); ?>
                                <li role="presentation"><?php echo anchor('logout', '<i class="icon16 i-exit"></i> Sair'); ?>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </nav>
        </header> <!-- End #header  -->

        <?php
        $cat = $this->uri->segment(1);
        ?>

        <div class="main">            

            <section id="content">
                <div class="wrapper">

                    

                    <?php $this->load->view($subview); ?>

                </div> <!-- End .wrapper  -->
            </section>

        </div><!-- End .main  -->
    </body>
</html>