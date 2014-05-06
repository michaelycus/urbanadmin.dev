<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-tree-5"></i> Listar Secretarias</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="text-left">
                <?php echo anchor('configuracoes/secretarias/cadastrar_secretaria', '<strong><i class="icon20  i-plus-circle"></i> Cadastrar Secretaria</strong>', 'class="btn btn-success"'); ?>
            </div>
        </div>        
    </div>

    <div class="row">
        <!-- Start page from here  -->

        <?php
        $tmpl = array(
            'table_open' => '<table cellpadding="0" cellspacing="0" border="0"
                              class="table table-striped table-bordered table-hover" id="dataTable">',
            'table_close' => '</table>'
        );

        echo validation_errors('<div class="alert alert-error">','</div>');
        if ($this->session->userdata('secretaria_excluida'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('secretaria_excluida') .'</div>';
            $this->session->unset_userdata('secretaria_excluida');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('Secretaria', 'E-mail', 'Telefone', '');

        if (!empty($secretarias))
        {
            foreach ($secretarias as $secretaria):
                $this->table->add_row(array('data'=>'<small><strong>'.$secretaria->nome.'</strong>'.'</small>'),
                                      array('data'=>'<small>'.$secretaria->email.'</small>'),
                                      array('data'=>'<small>'.$secretaria->telefone.'</small>'),
                                      array('data'=>anchor('configuracoes/secretarias/editar_secretaria/'.$secretaria->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-primary btn-xs')).' '.
                                                    anchor('configuracoes/secretarias/excluir_secretaria/'.$secretaria->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn btn-danger btn-xs')), 'style'=>'width:150px'));
            endforeach;

           echo $this->table->generate();
        }
        else
        {
            echo '<div class="alert alert-info">Nenhuma secretaria cadastrada!</div>';
        }
        ?>

    </div><!-- End .row-fluid  -->
</div>