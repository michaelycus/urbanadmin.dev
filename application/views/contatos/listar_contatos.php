<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-address-book-2"></i> Contatos</h1>
    </div>
    <div class="row">

        <?php
        echo validation_errors('<div class="alert alert-error">','</div>');
        if ($this->session->userdata('contato_excluido'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('contato_excluido') .'</div>';
            $this->session->unset_userdata('contato_excluido');
        }

        $tmpl = array(
            'table_open' => '<table cellpadding="0" cellspacing="0" border="0"
                              class="table table-striped table-bordered table-hover" id="dataTable">',
            'table_close' => '</table>'
        );

        $this->table->set_template($tmpl);
        $this->table->set_heading('Nome', 'Endereço', 'E-mail', 'Telefone');

        if (!empty($contatos))
        {
            foreach ($contatos as $contato):
                $this->table->add_row(array('data'=>'<span class="name">'.anchor('contatos/editar_contato/'.$contato->id, '<i class="icon16 i-user-4 gap-left0"></i>'. $contato->nome) .'</span>'),
                                      array('data'=>'<span class="location"><i class="icon16 i-location-2 gap-left0"></i>'.($contato->id_bairro !=100 ? $contato->nome_bairro : $contato->endereco).'</span>'),
                                      array('data'=>'<span class="email"><i class="icon16 i-envelop-2 gap-left0"></i>'.$contato->email.'</span>'),
                                      array('data'=>'<span class="contatos phone"><i class="icon16 i-phone gap-left0"></i>'.$contato->telefone.'</span>'));
            endforeach;
        }
        if (!empty($requerentes))
        {
            foreach ($requerentes as $requerente):
                $this->table->add_row(array('data'=>'<div class="contatos name"><i class="icon16 i-user-3 gap-left0"></i>'.anchor('requerentes/visualizar/'.$requerente->id, $requerente->nome).'</div>'),
                                      array('data'=>'<div class="contatos location"><i class="icon16 i-location-2 gap-left0"></i>'.$requerente->nome_bairro.'</div>'),
                                      array('data'=>'<div class="contatos email"><i class="icon16 i-envelop-2 gap-left0"></i>'.$requerente->email.'</div>'),
                                      array('data'=>'<div class="contatos phone"><i class="icon16 i-phone gap-left0"></i>'.$requerente->telefone.'</div>'));
            endforeach;
        }

        echo $this->table->generate();
        ?>

    </div> 
</div>