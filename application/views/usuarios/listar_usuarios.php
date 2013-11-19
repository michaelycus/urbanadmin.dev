<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-user-plus-3"></i> Listar usuários</h1>
    </div>

    <div class="row">
        <!-- Start page from here  -->
    <?php   
    echo '<p>';
    echo anchor('usuarios/adicionar_usuario','<i class="i-user-plus-2"></i> Adicionar usuário ', array('class' => 'btn btn-primary'));
    echo '</p>';
    
    $tmpl = array(
            'table_open' => '<table cellpadding="0" cellspacing="0" border="0" 
                              class="table table-striped table-bordered table-hover" id="dataTable">',
            'table_close' => '</table>'
        );    
    
    $autorizacoes = unserialize(TIPOS_AUTORIZACAO);

    $this->table->set_template($tmpl);
    $this->table->set_heading('Nome', 'Autorização', 'Operações');

    if (!empty($usuarios_ativos))
    {
        foreach ($usuarios_ativos as $usuario):
            
            $this->table->add_row(array('data'=>$usuario->nome),
                                  array('data'=>$autorizacoes[$usuario->autorizacao]),
                                  array('data'=>anchor('usuarios/editar_usuario/'.$usuario->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-primary btn-xs')).' '.
                                                anchor('usuarios/excluir_usuario/'.$usuario->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn btn-danger btn-xs')), 'style'=>'width:200px'));
        
        endforeach;

        echo $this->table->generate();
    }
    else
    {
        echo '<div class="alert alert-info">Nenhum usuário cadastrado!</div>';
    }
    ?>

    </div><!-- End .row-fluid  -->
</div> 