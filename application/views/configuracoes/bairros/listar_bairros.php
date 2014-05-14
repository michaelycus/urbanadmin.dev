<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-office"></i> Listar bairros</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="text-left">
                <?php echo anchor('configuracoes/bairros/cadastrar_bairro', '<strong><i class="icon20  i-plus-circle"></i> Cadastrar Bairro</strong>', 'class="btn btn-success"'); ?>
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
        if ($this->session->userdata('bairro_excluido'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('bairro_excluido') .'</div>';
            $this->session->unset_userdata('bairro_excluido');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('Bairro', 'População', 'Presidente', 'Telefone', 'E-mail', '');

        if (!empty($bairros))
        {
            foreach ($bairros as $bairro):
                $this->table->add_row(array('data'=>'<small><strong>'.$bairro->nome.'</strong>'.'</small>'),
                                      array('data'=>'<small>'.$bairro->populacao.'</small>'),
                                      array('data'=>'<small>'.$bairro->nome_presidente.'</small>'),
                                      array('data'=>'<small>'.$bairro->telefone_presidente.'</small>'),
                                      array('data'=>'<small>'.$bairro->email_presidente.'</small>'),
                                      array('data'=>anchor('bairros/editar_bairro/'.$bairro->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-primary btn-xs')).' '.
                                                    anchor('bairros/excluir_bairro/'.$bairro->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirmdelete btn btn-danger btn-xs')), 'style'=>'width:150px'));
            endforeach;

           echo $this->table->generate();
        }
        else
        {
            echo '<div class="alert alert-info">Nenhum bairro cadastrado!</div>';
        }
        ?>

    </div><!-- End .row-fluid  -->
</div>