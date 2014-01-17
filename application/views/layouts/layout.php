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
        <script src="<?php echo base_url(); ?>js/plugins/forms/datepicker/bootstrap-datepicker.js"></script>
                
        <script src="<?php echo base_url(); ?>js/plugins/forms/wizard/jquery.form.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/wizard/jquery.form.wizard.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/validation/jquery.validate.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/forms/switch/bootstrapSwitch.js"></script>



        <!-- Dialogs -->
        <script src="<?php echo base_url(); ?>js/jquery-impromptu.min.js"></script>

        <!-- Tables plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/tables/datatables/jquery.dataTables.min.js"></script>

        <!-- UI plugins -->
        <script src="<?php echo base_url(); ?>js/plugins/ui/range-slider/rangeslider-ruler.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/ui/animated-progress-bar/jquery.progressbar.js"></script>
        <script src="<?php echo base_url(); ?>js/plugins/ui/jgrowl/jquery.jgrowl.js"></script>

        <!-- Init plugins -->
        <script src="<?php echo base_url(); ?>js/app.js"></script><!-- Core js functions -->
        <script src="<?php echo base_url(); ?>js/pages/ui-elements.js"></script><!-- Init plugins only for page -->
        <script src="<?php echo base_url(); ?>js/pages/domready.js"></script><!-- Init plugins only for page -->
        <script src="<?php echo base_url(); ?>js/pages/data-tables.js"></script><!-- Init plugins only for page -->
        <script src="<?php echo base_url(); ?>js/pages/form-wizard.js"></script><!-- Init plugins only for page -->

        <!--<script src="<?php echo base_url(); ?>js/pages/dashboard.js"></script> Esse puglin impossibilita o carregamento do mapael -->
        
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
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <?php
                            if ($_SESSION['autorizacao'] == AUTORIZACAO_ADMINISTRADOR && $_SESSION['requerimentos'] > 0)
                            {
                                echo anchor('requerimentos/listar_requerimentos', '<i class="icon24 i-bell-2"></i>
                                    <span class="notification red">'.$_SESSION['requerimentos'].'</span>', '');
                            }
                            ?>
                        </li>

                        <li class="divider-vertical"></li>
                        <li class="dropdown user">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <i class="icon24 i-user"></i>(<?php echo $_SESSION['nome']; ?>)
                                <span class="more"><i class="icon16 i-arrow-down-2"></i></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <?php
                                if ($_SESSION['autorizacao'] == AUTORIZACAO_OPERADOR)
                                {
                                ?>
                                <li role="presentation"><?php echo anchor('requerentes/editar_requerente/'.$_SESSION['id_user'], '<i class="icon16 i-user"></i> Editar perfil'); ?>
                                <li role="presentation"><?php echo anchor('logout', '<i class="icon16 i-exit"></i> Sair'); ?>
                                <?php
                                }
                                else if ($_SESSION['autorizacao'] == AUTORIZACAO_ADMINISTRADOR)
                                {
                                ?>
                                <li role="presentation"><?php echo anchor('requerentes/editar_requerente/'.$_SESSION['id_user'], '<i class="icon16 i-user"></i> Editar perfil'); ?>
                                <li role="presentation"><?php echo anchor('logout', '<i class="icon16 i-exit"></i> Sair'); ?>
                                <?php
                                }
                                ?>
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
                            if ($_SESSION['autorizacao'] == AUTORIZACAO_OPERADOR)
                            {
                            ?>
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="icon20 i-drawer-3"></i></span>
                                    <span class="txt">Meus Requerimentos</span>
                                </a>
                                <ul class="sub show">
                                    <li>
                                        <?php echo anchor('requerimentos/cadastrar_requerimento',
                                                '<span class="icon"><i class="icon20 i-stack-empty"></i></span>
                                                 <span class="txt">Cadastrar requerimento</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('requerimentos/meus_requerimentos',
                                                '<span class="icon"><i class="icon20 i-stack-list"></i></span>
                                                 <span class="txt">Listar requerimentos</span>');?>
                                    </li>
                                </ul>
                            </li>
                            <?php
                            }
                            else if ($_SESSION['autorizacao'] == AUTORIZACAO_ADMINISTRADOR)
                            {
                            ?>
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="icon20 i-drawer-3"></i></span>
                                    <span class="txt">Requerimentos</span>
                                </a>
                                <ul class="sub<?php echo ($cat=='requerimentos' ? ' show' : '')?>">
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
                                <ul class="sub<?php echo ($cat=='requerentes' ? ' show' : '')?>">
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
                                <ul class="sub<?php echo ($cat=='bairros' ? ' show' : '')?>">
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
                                <ul class="sub<?php echo ($cat=='graficos' ? ' show' : '')?>">
                                    <li>
                                        <?php echo anchor('graficos/populacao_por_bairro',
                                                '<i class="icon20 i-map-4"></i>
                                                 <span class="txt">Bairros: população</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('graficos/requerentes_por_bairro',
                                                '<i class="icon20 i-map-4"></i>
                                                 <span class="txt">Requerentes: bairro</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('graficos/requerimentos_por_bairro',
                                                '<i class="icon20  i-map-4"></i>
                                                 <span class="txt">Requerimentos: bairro</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('graficos/requerimentos_por_tipo',
                                                '<i class="icon20  i-map-4"></i>
                                                 <span class="txt">Requerimentos: tipo</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('graficos/requerimentos_por_vereador',
                                                '<i class="icon20  i-map-4"></i>
                                                <span class="txt">Requerimentos: vereador</span>');?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><i class="icon20 i-wand-2"></i></span>
                                    <span class="txt">Gráficos Customizados</span>
                                </a>
                                <ul class="sub<?php echo ($cat=='graficos_customizados' ? ' show' : '')?>">
                                    <li>
                                        <?php echo anchor('graficos_customizados/criar_grafico',
                                                '<i class="icon20 i-pencil-5"></i>
                                                 <span class="txt">Criar gráfico</span>');?>
                                    </li>
                                    <li>
                                        <?php echo anchor('graficos_customizados/listar_graficos',
                                                '<i class="icon20 i-list-2"></i>
                                                 <span class="txt">Listar gráficos</span>');?>
                                    </li>
                                </ul>
                            </li>      
                            
                            <?php
                            }
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
                            if ($_SESSION['autorizacao'] == AUTORIZACAO_OPERADOR)
                            {
                                echo '<li'. ($cat=='login/inicio' ? ' class="active"><i class="icon16 i-home-3"></i>Início</li>' :
                                        '>'.anchor('login/inicio', '<i class="icon16 i-home-3"></i>Início') .'</li>');

                                echo '<li'. ($cat=='requerimentos' ? ' class="active"><i class="icon16 i-stack-list"></i>Meus requerimentos</li>' :
                                        '>'.anchor('requerimentos/meus_requerimentos', '<i class="icon16 i-stack-list"></i>Meus requerimentos') .'</li>');
                            }
                            else if ($_SESSION['autorizacao'] == AUTORIZACAO_ADMINISTRADOR)
                            {
                                echo '<li'. ($cat=='login/inicio' ? ' class="active"><i class="icon16 i-home-3"></i></li>' :
                                        '>'.anchor('login/inicio', '<i class="icon16 i-home-3"></i>') .'</li>');

                                echo '<li'. ($cat=='requerimentos' ? ' class="active"><i class="icon16 i-stack-list"></i></li>' :
                                        '>'.anchor('requerimentos/listar_requerimentos', '<i class="icon16 i-stack-list"></i>') .'</li>');

                                echo '<li'. ($cat=='requerentes' ? ' class="active"><i class="icon16 i-users"></i></li>' :
                                        '>'.anchor('requerentes/da_cidade', '<i class="icon16 i-users"></i>') .'</li>');

                                echo '<li'. ($cat=='bairros' ? ' class="active"><i class="icon16 i-office"></i></li>' :
                                        '>'.anchor('bairros/listar_bairros', '<i class="icon16 i-office"></i>') .'</li>');

                                echo '<li'. ($cat=='graficos' ? ' class="active"><i class="icon16 i-stats-up"></i></li>' :
                                        '>'.anchor('graficos/populacao_por_bairro', '<i class="icon16 i-stats-up"></i>').'</li>');
                                
                                echo '<li'. ($cat=='graficos_customizados' ? ' class="active"><i class="icon16 i-wand-2"></i></li>' :
                                        '>'.anchor('graficos_customizados/listar_graficos', '<i class="icon16 i-wand-2"></i>').'</li>');
//                                echo '<li'. ($cat=='login/inicio' ? ' class="active"><i class="icon16 i-home-3"></i>Início</li>' :
//                                        '>'.anchor('login/inicio', '<i class="icon16 i-home-3"></i>Início') .'</li>');
//
//                                echo '<li'. ($cat=='requerimentos' ? ' class="active"><i class="icon16 i-stack-list"></i>Requerimentos</li>' :
//                                        '>'.anchor('requerimentos/listar_requerimentos', '<i class="icon16 i-stack-list"></i>Requerimentos') .'</li>');
//
//                                echo '<li'. ($cat=='requerentes' ? ' class="active"><i class="icon16 i-users"></i>Requerentes</li>' :
//                                        '>'.anchor('requerentes/da_cidade', '<i class="icon16 i-users"></i>Requerentes') .'</li>');
//
//                                echo '<li'. ($cat=='bairros' ? ' class="active"><i class="icon16 i-office"></i>Bairros</li>' :
//                                        '>'.anchor('bairros/listar_bairros', '<i class="icon16 i-office"></i>Bairros') .'</li>');
//
//                                echo '<li'. ($cat=='graficos' ? ' class="active"><i class="icon16 i-stats-up"></i>Gráficos</li>' :
//                                        '>'.anchor('graficos/populacao_por_bairro', '<i class="icon16 i-stats-up"></i>Gráficos').'</li>');
//                                
//                                echo '<li'. ($cat=='graficos_customizados' ? ' class="active"><i class="icon16 i-wand-2"></i>Gráficos Customizados</li>' :
//                                        '>'.anchor('graficos_customizados/listar_graficos', '<i class="icon16 i-wand-2"></i>Gráficos Customizados').'</li>');
                            }
                            ?>
                        </ul>
                    </div>

                    <?php $this->load->view($subview); ?>

                </div> <!-- End .wrapper  -->
            </section>

        </div><!-- End .main  -->
    </body>
</html>