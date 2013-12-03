<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-user-3"></i> Listar requerimentos</h1>
    </div>

    <div class="row">
        <!-- Start page from here  -->

        <?php
        $tmpl = array(
            'table_open' => '<table cellpadding="0" cellspacing="0" border="0"
                              class="table table-striped table-bordered table-hover" id="table-requerimentos">',
            'table_close' => '</table>'
        );

        echo validation_errors('<div class="alert alert-error">','</div>');
        if ($this->session->userdata('requerimento_excluido'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('requerimento_excluido') .'</div>';
            $this->session->unset_userdata('requerimento_excluido');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('Resumo', "Bairro", "Solicitante", "Requerente", "Situação", "Expediente", "");

        if (!empty($requerimentos))
        {
            foreach ($requerimentos as $requerimento):
                $this->table->add_row(array('data'=>'<small>'.$requerimento->nome_categoria. ' - '.substr($requerimento->descricao, 0, 196).(strlen($requerimento->descricao)>255?"..." : ""), 'class'=>'A'.'</small>'),
                                      array('data'=>'<small>'.$requerimento->nome_bairro.'</small>'),
                                      array('data'=>'<small>'.$requerimento->nome_solicitante.'</small>'),
                                      array('data'=>'<small>'.$requerimento->nome_requerente.'</small>'),
                                      array('data'=>'<div style="display:none;">'.$requerimento->situacao.'</div>'.($requerimento->situacao==REQUERIMENTO_SITUACAO_EM_ANALISE ?
                                                    '<img src="'.base_url().'images/retornar_situacao_d.png"> ' :
                                                    anchor('requerimentos/retornar_situacao/'.$requerimento->id.'/'.$requerimento->situacao,
                                                            '<img src="'.base_url().'images/retornar_situacao.png"> ' )).
                                                    '<img src="'.base_url().'images/situacao_'.$requerimento->situacao.'.png"> '.
                                                    ($requerimento->situacao==REQUERIMENTO_SITUACAO_RESOLVIDO ?
                                                    '<img src="'.base_url().'images/avancar_situacao_d.png">':
                                                    anchor('requerimentos/avancar_situacao/'.$requerimento->id.'/'.$requerimento->situacao,
                                                    '<img src="'.base_url().'images/avancar_situacao.png">')), 'style'=>'width:130px'),
                                      array('data'=>'<small>'.$requerimento->expediente.'</small>'),
                                      array('data'=>anchor('requerimentos/editar_requerimento/'.$requerimento->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-primary btn-xs')).' '.
                                                    anchor('requerimentos/excluir_requerimento/'.$requerimento->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn btn-danger btn-xs')), 'style'=>'width:150px'));
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