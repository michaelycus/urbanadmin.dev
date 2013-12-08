
<ul class="nav nav-pills">
    <li class="active"><?php echo anchor('categorias_pa/listar_categorias', 'Listar') ?></li>
    <li><?php echo anchor('categorias_pa/adicionar_categoria', 'Adicionar') ?></li>
</ul>

<h4>Categorias</h4>

<?php
$tmpl = array(
    'table_open' => '<table class="table table-striped">',
    'table_close' => '</table>'
);

echo validation_errors('<div class="alert alert-error">', '</div>');
if ($this->session->userdata('categoria_excluida'))
{
    echo '<div class="alert alert-success">' . $this->session->userdata('categoria_excluida') . '</div>';
    $this->session->unset_userdata('categoria_excluida');
}

$this->table->set_template($tmpl);
$this->table->set_heading('Título', 'Operações');

if (!empty($categorias))
{
    foreach ($categorias as $categoria):
        $this->table->add_row(array('data' => $categoria->titulo), array('data' => anchor('categorias_pa/editar_categoria/' . $categoria->id, '<i class="icon-edit"></i> Editar ', array('class' => 'btn .btn-mini')) . ' ' .
            anchor('categorias_pa/excluir_categoria/' . $categoria->id, ' <i class="icon-trash"></i> Excluir', array('class' => 'confirm_delete btn .btn-mini')), 'style' => 'width:200px'));
    endforeach;

    echo $this->table->generate();
}
else
{
    echo '<div class="alert alert-info">Nenhuma categoria cadastrada!</div>';
}
?>