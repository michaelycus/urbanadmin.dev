
    <ul class="nav nav-pills">
        <li class="active"><?php echo anchor('plano_acoes/lista_plano_acoes', 'Listar') ?></li>
        <li><?php echo anchor('plano_acoes/adicionar_plano_acao', 'Adicionar') ?></li>
    </ul>

    <h4>Plano de ações</h4>    

    <?php
    $tmpl = array(
        'table_open' => '<table class="table table-striped">',
        'table_close' => '</table>'
    );

    echo form_open('plano_acoes/lista_plano_acoes', 'class="bs-docs-example form-horizontal" style="float: right"');

    echo '<div class="input-prepend">';
    echo    '<span class="add-on"> Categoria </span>';
    echo        '<select id="id_categoria" name="id_categoria" onchange="this.form.submit()">';
    echo           '<option value=""> - Todas as categorias - </option>';
    foreach ($categorias as $categoria)
    {
        echo       '<option value="'.$categoria->id.'" '.set_select('id_categoria', $categoria->id, $categoria->id==$id_categoria).'>'.$categoria->titulo.'</option>';
    }
    echo        '</select>';
    echo '</div>';        
    echo '</form>';

    echo form_close();

    echo !empty($paginacao) ? $paginacao : '';

    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('plano_acao_excluido'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('plano_acao_excluido') .'</div>';
        $this->session->unset_userdata('plano_acao_excluido');
    }

    $this->table->set_template($tmpl);
    $this->table->set_heading('Título', 'Responsável','Operações');

    if (count($plano_acoes))
    {
        foreach ($plano_acoes as $plano_acao):
            $this->table->add_row(array('data'=>$plano_acao->titulo),
                                  array('data'=>$plano_acao->nome_responsavel),
                                  array('data'=>anchor('plano_acoes/editar_plano_acao/'.$plano_acao->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn .btn-mini')).' '.
                                                anchor('plano_acoes/excluir_plano_acao/'.$plano_acao->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn .btn-mini')), 'style'=>'width:200px'));
        endforeach;

        echo $this->table->generate();
    }
    else
    {
        echo '<div class="alert alert-info">Nenhum plano de ação cadastrado!</div>';
    }
    ?>