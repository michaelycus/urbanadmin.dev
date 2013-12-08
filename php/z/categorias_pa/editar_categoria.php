

    <ul class="nav nav-pills">
        <li><?php echo anchor('categorias_pa/lista_categorias', 'Listar') ?></li>
        <li><?php echo anchor('categorias_pa/adicionar_categoria', 'Adicionar') ?></li>
    </ul>

    <?php
    $id = $this->uri->segment(3);
    if ($id==NULL) redirect('categorias_pa/lista_categorias');


    echo form_open('categorias_pa/editar_categoria', 'class="bs-docs-example form-horizontal"');

    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('categoria_editada'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('categoria_editada') .'</div>';
        $this->session->unset_userdata('categoria_editada');
    }

    echo '<h3>Editar categoria</h3>';

    // nome
    echo '<div class="control-group">';
    echo form_label('Categoria', 'nome', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'titulo','id' => 'titulo','placeholder' => 'Categoria'), set_value('titulo',$categoria->titulo));
    echo    '</div>';
    echo '</div>';

    echo form_hidden('id', $categoria->id);

    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Editar', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    ?>