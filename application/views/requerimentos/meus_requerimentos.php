<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-user-3"></i> Meus requerimentos</h1>
    </div>

    <div class="row">
        <!-- Start page from here  -->

        <?php
        $tmpl = array(
            'table_open' => '<table cellpadding="0" cellspacing="0" border="0"
                              class="table table-striped table-bordered table-hover" id="table-meus-requerimentos">',
            'table_close' => '</table>'
        );

        echo validation_errors('<div class="alert alert-error">','</div>');
        if ($this->session->userdata('requerimento_excluido'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('requerimento_excluido') .'</div>';
            $this->session->unset_userdata('requerimento_excluido');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('Resumo', "Bairro", "Situação", "Expediente", "");

        if (!empty($requerimentos))
        {
            foreach ($requerimentos as $requerimento):
                $this->table->add_row(array('data'=>anchor('requerimentos/visualizar/'.$requerimento->id, '<small>'.substr($requerimento->descricao, 0, 96).(strlen($requerimento->descricao)>255?"..." : "").'</small>')),
                                      array('data'=>'<small>'.$requerimento->nome_bairro.'</small>'),
                                      array('data'=>'<div style="display:none;">'.$requerimento->situacao.'</div>'.'<img src="'.base_url().'images/situacao_'.$requerimento->situacao.'.png">'),
                                      array('data'=>'<small>'.$requerimento->expediente.'/'.$requerimento->ano_expediente. '</small>'),
                                      array('data'=>($requerimento->situacao==REQUERIMENTO_SITUACAO_EM_ANALISE ?
                                                        anchor('requerimentos/editar_requerimento/'.$requerimento->id,'<i class="icon-edit"></i> Editar ',
                                                            array('class' => 'btn btn-primary btn-xs')) :''),
                                                    'style'=>'width:80px'));

            endforeach;

            echo $this->table->generate();
        }
        else
        {
            echo '<div class="alert alert-info">Nenhum requerimento cadastrado!
                Você pode criar um '.anchor('requerimentos/cadastrar_requerimento','Novo Requerimento', array('class' => 'btn btn-success')).'.</div>';
        }
        ?>

    </div><!-- End .row-fluid  -->
</div>