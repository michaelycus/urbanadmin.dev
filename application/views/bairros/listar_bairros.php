
<div class="crumb">
    <ul class="breadcrumb">
        <li><a href="#"><i class="icon16 i-home-4"></i>Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
    </ul>
</div>

<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-office"></i> Listar bairros</h1>
    </div>

    <div class="row">
        <!-- Start page from here  -->        
        
        <?php
        $tmpl = array(
            'table_open' => '<table class="table table-striped">',
            'table_close' => '</table>'
        );

//        echo !empty($paginacao) ? $paginacao : '';

        echo validation_errors('<div class="alert alert-error">','</div>');
        if ($this->session->userdata('bairro_excluido'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('bairro_excluido') .'</div>';
            $this->session->unset_userdata('bairro_excluido');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('Bairro', 'Presidente', 'Telefone', 'E-mail', '');

        if (!empty($bairros))
        {        
            foreach ($bairros as $bairro):
                $this->table->add_row(array('data'=>'<strong>'.$bairro->nome.'</strong>'),
                                      array('data'=>$bairro->nome_presidente),
                                      array('data'=>$bairro->telefone_presidente),
                                      array('data'=>$bairro->email_presidente),
                                      array('data'=>anchor('bairros/editar_bairro/'.$bairro->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-primary btn-xs')).' '.
                                                    anchor('bairros/excluir_bairro/'.$bairro->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn btn-danger btn-xs')), 'style'=>'width:200px'));
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
    