<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-road"></i> Listar ruas</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="text-left">
                <?php echo anchor('configuracoes/ruas/cadastrar_rua', '<strong><i class="icon20  i-plus-circle"></i> Cadastrar Rua</strong>', 'class="btn btn-success"'); ?>
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
        if ($this->session->userdata('rua_excluida'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('rua_excluida') .'</div>';
            $this->session->unset_userdata('rua_excluida');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('Nome', 'Decreto de lei', '');

        if (!empty($ruas))
        {
            foreach ($ruas as $rua):
                $this->table->add_row(array('data'=>'<small><strong>'.$rua->nome.'</strong></small>'),
                                      array('data'=>'<small>'.$rua->lei_decreto.'</small>'),
                                      array('data'=>anchor('configuracoes/ruas/editar_rua/'.$rua->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-primary btn-xs')).' '.
                                                    anchor('configuracoes/ruas/excluir_rua/'.$rua->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn btn-danger btn-xs')), 'style'=>'width:150px'));
            endforeach;

           echo $this->table->generate();
        }
        else
        {
            echo '<div class="alert alert-info">Nenhuma rua cadastrada!</div>';
        }
        ?>

    </div><!-- End .row-fluid  -->
</div>
