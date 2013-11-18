<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-user-7"></i> Listar vereadores</h1>
    </div>

    <div class="row">
        <!-- Start page from here  -->  

        <?php
        $tmpl = array(
            'table_open' => '<table class="table table-striped">',
            'table_close' => '</table>'
        );

        echo validation_errors('<div class="alert alert-error">','</div>');
        if ($this->session->userdata('requerente_excluido'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('requerente_excluido') .'</div>';
            $this->session->unset_userdata('requerente_excluido');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('Nome', 'Bairro', '');

        if (!empty($requerentes))
        {
            foreach ($requerentes as $requerente):
                $this->table->add_row(array('data'=>$requerente->nome),
                                      array('data'=>$requerente->nome_bairro),
                                      array('data'=>anchor('requerentes/editar_requerente/'.$requerente->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-primary btn-xs')).' '.
                                                    anchor('requerentes/excluir_requerente/'.$requerente->id.'/vereadores',' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn btn-danger btn-xs')), 'style'=>'width:200px'));
            endforeach;

            echo $this->table->generate();
        }
        else
        {
            echo '<div class="alert alert-info">Nenhum vereador cadastrado!</div>';
        }
        ?>

    </div><!-- End .row-fluid  -->
</div> 
    