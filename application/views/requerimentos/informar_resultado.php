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
        
        <script>
            $(document).ready(function()
            {
                $('#resposta').hide();
            });
        </script>
            
    </head>
    <body>        
        <?php 

        if ($requerimento->status_retorno>REQUERIMENTO_RETORNO_DEMORADO)
        {
        ?>
        <div class="container-fluid">
            <div class="messageContainer">

                <div class="page-header">
                    <h1 class="center">Obrigado!</h1>
                </div>

                <h2 class="center gap20">Sua contribuição é fundamental para o funcionamento desse trabalho.</h2>

                <hr class="seperator">

                <div class="center">
                    <?php echo anchor('login/inicio', '<img src="'. base_url() . 'images/logodark.png" alt="Urban admin" width="300px">'); ?>
                </div>
        
            </div>
        </div>
        <?php
        }
        else
        {

        ?>
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
                        
                    <div class="col-lg-12">
                        <div class="panel panel-default" style="margin: 10px">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4><i class="icon16 i-resize"></i>Informações</h4>
                                        <dl class="dl-horizontal">
                                            <?php
                                            echo '<dt>Descrição</dt>';
                                            echo '<dd><pre>' . $requerimento->descricao . '</pre></dd>';

                                            echo '<dt>Bairro</dt>';
                                            echo '<dd>' . $bairro->nome . '</dd>';

                                            echo '<dt>Rua</dt>';
                                            echo '<dd>' . $rua->nome . '</dd>';

                                            echo '<dt>Tipo Requerimento</dt>';
                                            echo '<dd>' . $cat_requerimento->nome . '</dd>';

                                            echo '<dt>Solicitante</dt>';
                                            echo '<dd>' . $solicitante->nome . '</dd>';

                                            echo '<dt>Data</dt>';
                                            echo '<dd>' . $this->form_validation->convert_sql_to_human($requerimento->data_requerimento) . '</dd>';

                                            if ($requerimento->expediente != 0)
                                            {
                                                echo '<dt>Expediente</dt>';
                                                echo '<dd>' . $requerimento->expediente . '/' . $requerimento->ano_expediente . '</dd>';
                                            }
                                            ?>
                                        </dl>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <h4><i class="icon16 i-resize"></i>Informar resultado</h4>

                                        <div class="pad-left15">
                                            <h3>O seu pedido foi atendido pela prefeitura?</h3>
                                        </div>                                    

                                        <?php
                                        echo form_open('requerimentos/resultado_informado', 'id="form_resultado" class="bs-docs-example form-horizontal"');
                                        ?>

                                        <div class="form-group">
                                            <div class="col-lg-9">
                                                 <label class="radio-inline">
                                                    <input type="radio" name="status_retorno" value="<?php echo REQUERIMENTO_RETORNO_SERVICO_EFETIVADO?>"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="status_retorno" value="<?php echo REQUERIMENTO_RETORNO_SERVICO_NAO_EFETIVADO?>"> Não
                                                </label>
                                            </div>
                                        </div>   

                                        <br/><br/>

                                        <div id="resposta">
                                            <div class="form-group">
                                                <div class="col-lg-9">
                                                    <p class="sim">Por favor, informe sua avaliação em relação aos serviços prestados pela prefeitura:</p>

                                                    <p class="nao">Por favor, informe se deseja que o pedido seja reiteirado ou se a prefeitura já lhe contatou:</p>
                                                </div>
                                            </div>

                                            <?php
                                            echo '<div class="form-group">';
                                            echo    '<div class="col-lg-9">';
                                            echo    form_textarea(array('name' => 'retorno_solicitante','id' => 'retorno_solicitante',
                                                        'class' => 'form-control'), '');
                                            echo    '</div>';
                                            echo '</div>';
                                            
                                            echo form_hidden('code', $requerimento->code);
                                            
                                            echo '<div class="form-group">';                                            
                                            echo    '<div class="pad-left15">';
                                            echo        form_submit('submit', 'Informar', 'class="btn btn-primary"');                                            
                                            echo    '</div>';
                                            echo '</div>';
                                            ?>
                                        </div>

                                        <?php                                        
                                        echo form_close();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div><!-- End .row-fluid  -->
            </div>

        </div><!-- End .main  -->
        
        <?php
        }
        ?>
        
        <script type="text/javascript">
            $(document).ready(function()
            {
                $('#form_resultado input').on('change', function() {
                    $('#resposta').show(500);
                    if ($('input[name=status_retorno]:checked', '#form_resultado').val()==<?php echo REQUERIMENTO_RETORNO_SERVICO_EFETIVADO?>)
                    {
                        $('.nao').hide(500);
                        $('.sim').show(500);
                    }
                    else
                    {
                        $('.sim').hide(500);
                        $('.nao').show(500);
                    }
                });
            });
        </script>
        
    </body>
</html>