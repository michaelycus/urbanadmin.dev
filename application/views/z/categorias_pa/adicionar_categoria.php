
    <ul class="nav nav-pills">
        <li><?php echo anchor('categorias_pa/lista_categorias', 'Listar') ?></li>
        <li class="active"><?php echo anchor('categorias_pa/adicionar_categoria', 'Adicionar') ?></li>
    </ul>

    <?php
    echo form_open('categorias_pa/adicionar_categoria', 'class="bs-docs-example form-horizontal"');
    
    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('categoria_adicionada'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('categoria_adicionada') .'</div>';
        $this->session->unset_userdata('categoria_adicionada');
    }
    
    echo '<h4>Adicionar categoria</h4>';

    // nome
    echo '<div class="control-group">';    
    echo form_label('Título', 'titulo', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'titulo','id' => 'titulo','placeholder' => 'Categoria'), set_value('titulo'));
    echo    '</div>';
    echo '</div>';
    
    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Adicionar', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    ?>