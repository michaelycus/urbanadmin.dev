<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sistema TXAI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/bootstrap-modal.css" rel="stylesheet">

        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }

            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                }
            }
        </style>
        <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">    

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>ico/favicon.png">

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>        
        
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">TXAI</a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">
                            <a href="#" class="navbar-link"><?php echo $_SESSION['nome']; ?></a> <?php echo anchor('logout', '(Sair)'); ?>
                        </p>
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><?php echo anchor('usuarios', 'Usuários'); ?></li>
                            <li><a href="#contact">Sobre</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $view = $this->uri->segment(2);
        $class = ' class="active" ';
        ?>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header">Plano de Ação</li>
                            <?php
                            echo '<li';
                            if ($view == 'adicionar_plano_acao')
                                echo $class; echo '>';
                            echo anchor('plano_acoes/adicionar_plano_acao', 'Adicionar') . '</li>'
                            ?>
                            <?php
                            echo '<li';
                            if ($view == 'lista_plano_acoes')
                                echo $class; echo '>';
                            echo anchor('plano_acoes/lista_plano_acoes', 'Listar planos') . '</li>'
                            ?>
                            <?php
                            echo '<li';
                            if ($view == 'adicionar_categoria')
                                echo $class; echo '>';
                            echo anchor('categorias_pa/adicionar_categoria', 'Adicionar categoria') . '</li>'
                            ?>
                            <?php
                            echo '<li';
                            if ($view == 'lista_categorias')
                                echo $class; echo '>';
                            echo anchor('categorias_pa/lista_categorias', 'Listar categorias') . '</li>'
                            ?>
                            <li class="nav-header">Ações</li>
                            <?php
                            echo '<li';
                            if ($view == 'adicionar_acao_corretiva')
                                echo $class; echo '>';
                            echo anchor('acoes/adicionar_acao_corretiva', 'Adicionar ação corretiva') . '</li>'
                            ?>
                            <?php
                            echo '<li';
                            if ($view == 'lista_acoes_corretivas')
                                echo $class; echo '>';
                            echo anchor('acoes/lista_acoes_corretivas', 'Listar ações corretivas') . '</li>'
                            ?>
                            <?php
                            echo '<li';
                            if ($view == 'adicionar_acao_preventiva')
                                echo $class; echo '>';
                            echo anchor('acoes/adicionar_acao_preventiva', 'Adicionar ação preventiva') . '</li>'
                            ?>
                            <?php
                            echo '<li';
                            if ($view == 'lista_acoes_preventivas')
                                echo $class; echo '>';
                            echo anchor('acoes/lista_acoes_preventivas', 'Listar ações preventivas') . '</li>'
                            ?>
                            <li class="nav-header">Memória de Reunião</li>
                            <?php
                            echo '<li';
                            if ($view == 'adicionar_memoria')
                                echo $class; echo '>';
                            echo anchor('memorias/adicionar_memoria', 'Adicionar') . '</li>'
                            ?>
                            <?php
                            echo '<li';
                            if ($view == 'lista_memorias')
                                echo $class; echo '>';
                            echo anchor('memorias/lista_memorias', 'Listar memórias') . '</li>'
                            ?>
                            <li class="nav-header">Indicadores de Desempenho</li>
                            <li><a href="#">Link</a></li>              
                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                <div class="span9">
                    <?php $this->load->view($subview); ?>
                </div>

            </div><!--/row-->

            <hr>

            <footer>
                <p>&copy; TXAI 2013</p>
            </footer>

        </div><!--/.fluid-container-->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->    
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>    
        <script src="<?php echo base_url(); ?>js/bootbox.min.js"></script>  
        <script src="<?php echo base_url(); ?>js/bootstrap-modalmanager.js"></script>  
        <script src="<?php echo base_url(); ?>js/bootstrap-modal.js"></script>  
        <script src="<?php echo base_url(); ?>js/functions.js"></script>  
        
        <script>
            $(document).ready(function() {
                $(".data").datepicker({
                    dateFormat: 'dd/mm/yy',
                    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
                    monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                    nextText: 'Próximo',
                    prevText: 'Anterior'
                });
            });
        </script>
    </body>
</html>