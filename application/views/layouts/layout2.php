<?php
$main = $this->uri->segment(1);
$view = $this->uri->segment(2);
$active_class = ' class="active" ';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Requerimentos</title>
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

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css"/>        
        
        <!-- Scripts -->
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
        
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
                    <a class="brand" href="#">Cadastro de Requerimentos</a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">
                            <a href="#" class="navbar-link"><?php echo $_SESSION['nome']; ?></a> <?php echo anchor('logout', '(Sair)'); ?>
                        </p>
                        <ul class="nav">
                            <?php
                            echo '<li';
                            if ($main == 'usuarios')
                                echo $active_class; echo '>';
                            echo anchor('usuarios', 'Usuários') . '</li>';
                            
                            echo '<li';
                            if ($main == 'sobre')
                                echo $active_class; echo '>';
                            echo anchor('sobre', 'Sobre') . '</li>'
                            ?>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            
                            <!-- Requerimentos -->
                            <li class="nav-header"><i class="icon-file"></i> Requerimentos</li>
                            <?php
                            echo '<li';
                            if ($view == 'cadastrar_requerimento')
                                echo $active_class; echo '>';
                            echo anchor('requerimentos/cadastrar_requerimento', 'Cadastrar requerimento') . '</li>';
                          
                            echo '<li';
                            if ($view == 'listar_requerimentos')
                                echo $active_class; echo '>';
                            echo anchor('requerimentos/listar_requerimentos', 'Listar') . '</li>'
                            ?>
                            
                            <!-- Requerentes -->
                            <li class="nav-header"><i class="icon-user"></i> Requerentes</li>
                            <?php
                            echo '<li';
                            if ($view == 'da_cidade')
                                echo $active_class; echo '>';
                            echo anchor('requerentes/da_cidade', 'Da cidade') . '</li>';
                            
                            echo '<li';
                            if ($view == 'de_outras_cidades')
                                echo $active_class; echo '>';
                            echo anchor('requerentes/de_outras_cidades', 'De outras cidades') . '</li>';
                            
                            echo '<li';
                            if ($view == 'vereadores')
                                echo $active_class; echo '>';
                            echo anchor('requerentes/vereadores', 'Vereadores') . '</li>';
                            
                            echo '<li';
                            if ($view == 'cadastrar_requerente')
                                echo $active_class; echo '>';
                            echo anchor('requerentes/cadastrar_requerente', 'Cadastrar requerente') . '</li>'
                            ?>                            
                            
                            <!-- Bairros -->
                            <li class="nav-header"><i class="icon-home"></i> Bairros</li>
                            <?php
                            echo '<li';
                            if ($view == 'cadastrar_bairro')
                                echo $active_class; echo '>';
                            echo anchor('bairros/cadastrar_bairro', 'Cadastrar') . '</li>';
                            
                            echo '<li';
                            if ($view == 'listar_bairros')
                                echo $active_class; echo '>';
                            echo anchor('bairros/listar_bairros', 'Listar') . '</li>'
                            ?>
                            
                            
                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                <div class="span9">
                    <?php $this->load->view($subview); ?>
                </div>

            </div><!--/row-->

            <hr>

            <footer>
                <p>&copy; Cadastro Requerimento</p>
            </footer>

        </div><!--/.fluid-container-->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->          
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>    
        <script src="<?php echo base_url(); ?>js/bootbox.min.js"></script>  
        <script src="<?php echo base_url(); ?>js/bootstrap-modalmanager.js"></script>  
        <script src="<?php echo base_url(); ?>js/bootstrap-modal.js"></script>  
        <script src="<?php echo base_url(); ?>js/functions.js"></script>          
        <script src="<?php echo base_url(); ?>js/jquery.maskedinput.min.js"></script>          
        
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