
    <ul class="nav nav-pills">
        <li><?php echo anchor('requerentes/da_cidade', 'Da cidade') ?></li>
        <li class="active"><?php echo anchor('requerentes/de_outras_cidades', 'De outras cidades') ?></li>
        <li><?php echo anchor('requerentes/cadastrar_requerente', 'Cadastrar') ?></li>
    </ul>

    <h4>Requerentes - Vereadores</h4>

    <?php
    $tmpl = array(
        'table_open' => '<table class="table table-striped">',
        'table_close' => '</table>'
    );

    echo !empty($paginacao) ? $paginacao : '';

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
            $this->table->add_row(array('data'=>$requerente->nome),
                                  array('data'=>$requerente->email),
                                  array('data'=>''),
                                  array('data'=>anchor('requerentes/editar_requerente/'.$requerente->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn .btn-mini')).' '.
                                                anchor('requerentes/excluir_requerente/'.$requerente->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn .btn-mini')), 'style'=>'width:200px'));
        endforeach;

        echo $this->table->generate();
    }
    else
    {
        echo '<div class="alert alert-info">Nenhum requerente cadastrado!</div>';
    }
    ?>