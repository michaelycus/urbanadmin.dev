
    <ul class="nav nav-pills">
        <li class="active"><?php echo anchor('acoes/listar_acoes_preventivas', 'Listar') ?></li>
        <li><?php echo anchor('acoes/adicionar_acao_preventiva', 'Adicionar') ?></li>
    </ul>

    <h4>Ações preventivas</h4>

    <?php
    $tmpl = array(
        'table_open' => '<table class="table table-striped">',
        'table_close' => '</table>'
    );

    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('acao_preventiva_excluida'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('acao_preventiva_excluida') .'</div>';
        $this->session->unset_userdata('acao_preventiva_excluida');
    }

    $this->table->set_template($tmpl);
    $this->table->set_heading('Título', 'Operações');

    if (!empty($acoes))
    {
        foreach ($acoes as $acao):
            $this->table->add_row(array('data'=>$acao->titulo),
                                  array('data'=>anchor('acoes/editar_acao_corretiva/'.$acao->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn .btn-mini')).' '.
                                                anchor('acoes/excluir_acao_corretiva/'.$acao->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn .btn-mini')), 'style'=>'width:200px'));
        endforeach;

        echo $this->table->generate();
    }
    else
    {
        echo '<div class="alert alert-info">Nenhuma ação corretiva cadastrada!</div>';
    }
    ?>