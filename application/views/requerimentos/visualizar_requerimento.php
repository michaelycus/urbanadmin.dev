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
                </div><!--/.nav-collapse -->
            </nav>
        </header> <!-- End #header  -->

        <div class="main">

            <div class="container-fluid">
                <div id="heading" class="page-header">
                    
                </div>

                <div class="row">
                    <div class="col-lg-1">                        
                    </div>
                        
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
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

                                            echo '<dt>Requerente</dt>';
                                            echo '<dd>' .  $requerente->nome . '</dd>';

                                            echo '<dt>Data</dt>';
                                            echo '<dd>' . $this->form_validation->convert_sql_to_human($requerimento->data_requerimento) . '</dd>';

                                            if ($requerimento->expediente != 0)
                                            {
                                                echo '<dt>Expediente</dt>';
                                                echo '<dd>' . $requerimento->expediente . '/' . $requerimento->ano_expediente . '</dd>';
                                            }

                                            echo '<dt>Situação</dt>';
                                            echo '<dd>' .'<img src="'.base_url().'images/situacao_'.$requerimento->situacao.'.png"> '.'</dd>';
                                            ?>
                                        </dl>
                                    </div>
                                </div>

                                <hr>
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4><i class="icon16 i-resize"></i>Galeria</h4>
                                        <?php
                                            echo '<div id="gallery">';
                                            if ($requerimento->anexo_1 != NULL)
                                                echo '<a data-gallery="gallery" href="' . base_url() . 'uploads/' . $requerimento->anexo_1 . '">' .
                                                '<img src="' . base_url() . 'uploads/thumbs/' . $requerimento->anexo_1 . '"></a>';
                                            if ($requerimento->anexo_2 != NULL)
                                                echo '<a data-gallery="gallery" href="' . base_url() . 'uploads/' . $requerimento->anexo_2 . '">' .
                                                '<img src="' . base_url() . 'uploads/thumbs/' . $requerimento->anexo_2 . '"></a>';
                                            if ($requerimento->anexo_3 != NULL)
                                                echo '<a data-gallery="gallery" href="' . base_url() . 'uploads/' . $requerimento->anexo_3 . '">' .
                                                '<img src="' . base_url() . 'uploads/thumbs/' . $requerimento->anexo_3 . '"></a>';
                                            echo '</div>';

                                            if ($requerimento->anexo_1 == NULL && $requerimento->anexo_2 == NULL && $requerimento->anexo_3 == NULL)
                                                echo '<div class="alert alert-info">Nenhuma imagem nesse requerimento!</div>';
                                        ?>
                                    </div>
                                </div>
                                
                                <hr>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4><i class="icon16 i-resize"></i>Opções</h4>
                                        <div class="btn-toolbar" style="margin: 0;">
                                            <?php
                                                if ($requerimento->situacao > REQUERIMENTO_SITUACAO_EM_ANALISE)
                                                    echo anchor_popup('requerimentos/imprimir_requerimento/'.$requerimento->code,'<i class="i-print-3"></i> Imprimir ', array('class' => 'btn'));
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- End .panel-body -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-lg-8  -->
                    
                    <div class="col-lg-1">                        
                    </div>
                    
                </div><!-- End .row-fluid  -->
            </div>

            <link href="<?php echo base_url() ?>js/plugins/misc/gallery/bootstrap-image-gallery.css" rel="stylesheet" />
            <link href="<?php echo base_url() ?>js/plugins/misc/gallery/magnific-popup.css" rel="stylesheet" />

            <!-- Misc plugins -->
            <script src="<?php echo base_url() ?>js/plugins/misc/gallery/load-image.min.js"></script>
            <script src="<?php echo base_url() ?>js/plugins/misc/gallery/bootstrap-image-gallery.min.js"></script>
            <script src="<?php echo base_url() ?>js/plugins/misc/gallery/jquery.magnific-popup.min.js"></script>

            <script type="text/javascript">

                $(document).ready(function()
                {
                    $('#gallery').magnificPopup({
                        delegate: 'a', // child items selector, by clicking on it popup will open
                        type: 'image',
                        gallery: {
                            enabled: true
                        },
                    });
                });

            </script>

        </div><!-- End .main  -->
    </body>
</html>