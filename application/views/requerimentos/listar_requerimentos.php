<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-user-3"></i> Listar requerimentos</h1>
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
        if ($this->session->userdata('requerimento_excluido'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('requerimento_excluido') .'</div>';
            $this->session->unset_userdata('requerimento_excluido');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('Resumo', "Bairro", "Tipo Req.", "Requerente", "Situação", "Expediente", "");

        $situacoes = unserialize(REQUERIMENTO_SITUACOES);

        if (!empty($requerimentos))
        {
            foreach ($requerimentos as $requerimento):
                $this->table->add_row(array('data'=>substr($requerimento->descricao, 0, 255).(strlen($requerimento->descricao)>255?"..." : ""), 'class'=>'A'),
                                      array('data'=>$requerimento->nome_bairro),
                                      array('data'=>$requerimento->nome_categoria),
                                      array('data'=>$requerimento->nome_requerente),
                                      array('data'=>$situacoes[$requerimento->situacao]),
                                      array('data'=>$requerimento->expediente),
                                      array('data'=>anchor('requerimentos/editar_requerimento/'.$requerimento->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-primary btn-xs')).' '.
                                                    anchor('requerimentos/excluir_requerimento/'.$requerimento->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn btn-danger btn-xs')), 'style'=>'width:200px'));
            endforeach;

            echo $this->table->generate();
        }
        else
        {
            echo '<div class="alert alert-info">Nenhum requerimento cadastrado!</div>';
        }
        ?>

    </div><!-- End .row-fluid  -->
</div> 