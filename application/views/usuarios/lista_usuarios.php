
    <ul class="nav nav-pills">
        <li class="active"><?php echo anchor('usuarios', 'Listar') ?></li>
        <li><?php echo anchor('usuarios/adicionar_usuario', 'Adicionar') ?></li>
    </ul>

    <h4>Usuários</h4>

    <?php
    $tmpl = array(
        'table_open' => '<table class="table table-striped">',
        'table_close' => '</table>'
    );    
    
    $autorizacoes = unserialize(TIPOS_AUTORIZACAO);

    $this->table->set_template($tmpl);
    $this->table->set_heading('#', 'Nome', 'Autorização', 'Operações');

    if (!empty($usuarios_ativos))
    {
        $i = 1;
        foreach ($usuarios_ativos as $usuario):
            
            $this->table->add_row(array('data'=>$i),
                                  array('data'=>$usuario->nome),
                                  array('data'=>$autorizacoes[$usuario->autorizacao]),
                                  array('data'=>anchor('usuarios/editar_usuario/'.$usuario->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn .btn-mini')).' '.
                                                anchor('usuarios/excluir_usuario/'.$usuario->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn .btn-mini')), 'style'=>'width:200px'));        
        
            $i++;
        endforeach;

        echo $this->table->generate();
    }
    else
    {
        echo '<div class="alert alert-info">Nenhum usuário cadastrado!</div>';
    }
    ?>

    <hr>