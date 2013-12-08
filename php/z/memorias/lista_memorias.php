
    <ul class="nav nav-pills">
        <li class="active"><?php echo anchor('memorias/lista_memorias', 'Listar') ?></li>
        <li><?php echo anchor('memorias/adicionar_memoria', 'Adicionar') ?></li>
    </ul>    

    <h4>Memórias de Reunião</h4>

    <?php
    $tmpl = array(
        'table_open' => '<table class="table table-striped">',
        'table_close' => '</table>'
    );

    echo !empty($paginacao) ? $paginacao : '';

    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('memoria_excluida'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('memoria_excluida') .'</div>';
        $this->session->unset_userdata('memoria_excluida');
    }

    $this->table->set_template($tmpl);
    $this->table->set_heading('Memória', ' Data', 'Operações');

    if (!empty($memorias))
    {        
        foreach ($memorias as $memoria):
//            $this->table->add_row($memoria->nome,
//                                  date("d/m/Y", strtotime($memoria->quando)),
//                                  anchor('memorias/editar/'.$memoria->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn .btn-mini')).' '.
//                                  anchor('memorias/excluir/'.$memoria->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn .btn-mini')));
            $this->table->add_row(array('data'=>$memoria->nome),
                                  array('data'=>$this->my_utilities->convert_date($memoria->quando)),
                                  array('data'=>anchor('memorias/editar_memoria/'.$memoria->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn .btn-mini')).' '.
                                                anchor('memorias/excluir_memoria/'.$memoria->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn .btn-mini')), 'style'=>'width:200px'));
        endforeach;

        echo $this->table->generate();
    }
    else
    {
        echo '<div class="alert alert-info">Nenhuma memória cadastrada!</div>';
    }
    ?>