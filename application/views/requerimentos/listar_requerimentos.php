
    <ul class="nav nav-pills">
        <li class="active"><?php echo anchor('requerimentos/listar_requerimentos', 'Listar') ?></li>
        <li><?php echo anchor('requerimentos/cadastrar_requerimento', 'Cadastrar') ?></li>
    </ul>

    <h4>Requerimentos</h4>

    <?php
    $tmpl = array(
        'table_open' => '<table class="table table-striped">',
        'table_close' => '</table>'
    );

    echo !empty($paginacao) ? $paginacao : '';

    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('requerimento_excluido'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('requerimento_excluido') .'</div>';
        $this->session->unset_userdata('requerimento_excluido');
    }

    $this->table->set_template($tmpl);
    $this->table->set_heading('Resumo', "Bairro", "Situação", "Expediente", "");
    
    $situacoes = unserialize(REQUERIMENTO_SITUACOES);

    if (!empty($requerimentos))
    {
        foreach ($requerimentos as $requerimento):
            $this->table->add_row(array('data'=>substr($requerimento->descricao, 0, 255).(strlen($requerimento->descricao)>255?"..." : "")),
                                  array('data'=>$requerimento->nome_bairro),
                                  array('data'=>$situacoes[$requerimento->situacao]),
                                  array('data'=>$requerimento->expediente),
                                  array('data'=>anchor('requerimentos/editar_requerimento/'.$requerimento->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn .btn-mini')).' '.
                                                anchor('requerimentos/excluir_requerimento/'.$requerimento->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn .btn-mini')), 'style'=>'width:200px'));
        endforeach;

        echo $this->table->generate();
    }
    else
    {
        echo '<div class="alert alert-info">Nenhum requerimento cadastrado!</div>';
    }
    ?>