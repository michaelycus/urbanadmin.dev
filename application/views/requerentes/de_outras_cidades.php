<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-user-4"></i> Listar requerentes</h1>
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
        if ($this->session->userdata('requerente_excluido'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('requerente_excluido') .'</div>';
            $this->session->unset_userdata('requerente_excluido');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('Nome', 'E-mail', 'Cidade', '');

        if (!empty($requerentes))
        {        
            foreach ($requerentes as $requerente):
                $this->table->add_row(array('data'=>'<small>'.$requerente->nome.'</small>'),
                                      array('data'=>'<small>'.$requerente->email.'</small>'),
                                      array('data'=>'<small>'.$requerente->cidade . ' - ' .$requerente->estado.'</small>'),
                                      array('data'=>anchor('requerentes/editar_requerente/'.$requerente->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-primary btn-xs')).' '.
                                                    anchor('requerentes/excluir_requerente/'.$requerente->id.'/de_outras_cidades',' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn btn-danger btn-xs')), 'style'=>'width:150px'));
            endforeach;

            echo $this->table->generate();
        }
        else
        {
            echo '<div class="alert alert-info">Nenhum requerente cadastrado!</div>';
        }
        ?>

    </div><!-- End .row-fluid  -->
</div> 
    