<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-address-book-2"></i> Contatos</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <div class="panel-body noPadding">                    

                    <div id="contact-list-nav" class="contact-nav"></div>

                    <ul class="contact-list" id="contact-list">

                        <?php
                        echo validation_errors('<div class="alert alert-error">','</div>');
                        if ($this->session->userdata('contato_excluido'))
                        {
                            echo '<div class="alert alert-success">'. $this->session->userdata('contato_excluido') .'</div>';
                            $this->session->unset_userdata('contato_excluido');
                        }

                        foreach ($contatos as $contato)
                        {
                            echo '<li class="row">';
                            echo    '<div class="col-lg-2">';
                            echo        '<span class="name"><a href="#">'.$contato->nome.'</a></span>';
                            echo    '</div>';
                            echo    '<div class="col-lg-2">';
                             echo        '<span class="location"><i class="icon16 i-location-2 gap-left0"></i> '.($contato->id_bairro !=100 ? $contato->nome_bairro : $contato->endereco).'</span>';
                            echo    '</div>';
                            echo    '<div class="col-lg-2">';
                            echo        '<span class="email"><i class="icon16 i-envelop-2 gap-left0"></i>'.$contato->email.'</span>';
                            echo    '</div>';
                            echo    '<div class="col-lg-2">';
                            echo        '<span class="phone"><i class="icon16 i-phone gap-left0"></i> '.$contato->telefone.'</span>';
                            echo    '</div>';
                            echo    '<div class="col-lg-2">';
                            if ($contato->celular_1)
                                echo        '<span class="mobile"><i class="icon16 i-mobile-2 gap-left0"></i> '.($contato->celular_1 ? $contato->celular_1 : '').'</span>';
                            if ($contato->celular_2)
                                echo        '<span class="mobile"><i class="icon16 i-mobile-2 gap-left0"></i> '.($contato->celular_2 ? $contato->celular_2 : '').'</span>';    
                            echo    '</div>';                            
                            echo    '<div class="col-lg-2">';
                            echo        '<div class="actions">';
                            echo            anchor('contatos/editar_contato/'.$contato->id, '<i class="icon12 i-user gap-left0"></i>Editar contato', 'class="act act-primary"');
                            echo            anchor('contatos/excluir_contato/'.$contato->id, '<i class="icon12   i-remove-3 gap-left0"></i>Excluir contato', 'class="confirm_delete act act-primary"');
                            echo        '</div>';
                            echo    '</div>';
                            echo '</li>';
                        }
                        ?>

                    </ul>

                </div><!-- End .panel-body -->

            </div><!-- End .widget -->
        </div><!-- End .col-lg-12  -->

    </div><!-- End .row  -->
</div>

<!-- Scripts  -->
<script src="<?php echo base_url();?>js/plugins/misc/listnav/jquery.listnav.min-2.1.js"></script>
<script src="<?php echo base_url();?>js/pages/widgets.js"></script>