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
        $this->table->set_heading('Resumo', "Tipo Req.", "Bairro", "Solicitante", "Requerente", "Situação", "Expediente", "");

        if (!empty($requerimentos))
        {
            foreach ($requerimentos as $requerimento):
                $this->table->add_row(array('data'=>anchor('requerimentos/visualizar/'.$requerimento->id, '<small>'.substr($requerimento->descricao, 0, 96).(strlen($requerimento->descricao)>255?"..." : "").'</small>')),
                                      array('data'=>'<small>'.$requerimento->nome_categoria.'</small>'),
                                      array('data'=>'<small>'.$requerimento->nome_bairro.'</small>'),
                                      array('data'=>'<small><a href="#" data-toggle="popover" data-placement="top" data-content="'.$requerimento->telefone.'" title=""
                                          data-original-title="Telefone">'.$requerimento->nome_solicitante.'</a></small>'),
                                      array('data'=>'<small>'.$requerimento->nome_requerente.'</small>'),
            array('data'=>'<div style="display:none;">'.$requerimento->situacao.'</div>'.
                          ($requerimento->situacao==REQUERIMENTO_SITUACAO_EM_ANALISE ?
                              '<img src="'.base_url().'images/retornar_situacao_d.png"> ' :
                              anchor('requerimentos/retornar_situacao/'.$requerimento->id.'/'.$requerimento->situacao,
                                  '<img src="'.base_url().'images/retornar_situacao.png"> ' )).
                          '<img src="'.base_url().'images/situacao_'.$requerimento->situacao.'.png"> '.
                          ($requerimento->situacao==REQUERIMENTO_SITUACAO_RESOLVIDO ?
                              '<img src="'.base_url().'images/avancar_situacao_d.png">':
                              ($requerimento->situacao==REQUERIMENTO_SITUACAO_ANALISADO ?
                                    '<img src="'.base_url().'images/avancar_situacao.png" style="cursor: pointer;" onclick="expediente(\''.base_url().'\','.$requerimento->id.')">' :
                                  anchor('requerimentos/avancar_situacao/'.$requerimento->id.'/'.$requerimento->situacao,
                                    '<img src="'.base_url().'images/avancar_situacao.png">') ) ),
                          'style'=>'width:130px'),
            array('data'=>'<small>'.$requerimento->expediente.'/'.$requerimento->ano_expediente. '</small>'),
            array('data'=>'<div style="display:none;">'.$requerimento->data_requerimento.'</div>'.
                          ($requerimento->situacao > REQUERIMENTO_SITUACAO_EM_ANALISE ?
                          anchor_popup('requerimentos/imprimir_requerimento/'.$requerimento->code,'<i class="i-print-3"></i> Imprimir ', array('class' => 'btn btn-block btn-warning btn-xs')).' ': '') .
                          anchor('requerimentos/editar_requerimento/'.$requerimento->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-block btn-primary btn-xs')).' '.
                          anchor('requerimentos/excluir_requerimento/'.$requerimento->id,' <i class="icon-trash"></i> Excluir ',array('class' => 'confirmdelete btn btn-block btn-danger btn-xs')), 'style'=>'width:100px'));
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

<form class="form-horizontal">
    <div class="form-group">
        <label class="col-lg-1 control-label" for="normal">Incorporar</label>
        <div class="col-lg-5">
            <textarea class="form-control" id="textarea" rows="3"><iframe width="640" height="640" src="<?php echo base_url(); ?>requerimentos/relatorio_por_mes/<?php echo $mes . '/' . $ano; ?>" frameborder="0"></iframe>
            </textarea>
        </div>
    </div>
</form>