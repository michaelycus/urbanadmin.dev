
<div id="reload">
<?php

echo '<h4>Ações</h4>';

$tmpl = array(
    'table_open' => '<table class="table table-striped">',
    'table_close' => '</table>'
);

$this->table->set_template($tmpl);
$this->table->set_heading('O que fazer?', 'Como?', 'Onde?', 'Quem?', 'Delegado', 'Nível', 'Quando?', 'Materiais?');

$niveis = unserialize(NIVEIS_ACOES);

if (!empty($acoes))
{
    foreach ($acoes as $acao):
//        $responsavel = $this->usuarios_model->get_usuario($acao->id_responsavel, 'nome');

        $this->table->add_row(array('data'=>$acao->o_que),
                              array('data'=>$acao->como),
                              array('data'=>$acao->onde),
                              array('data'=>$acao->nome_responsavel),
                              array('data'=>$acao->delegado),
                              array('data'=>$niveis[$acao->id_nivel]),
                              array('data'=>$this->my_utilities->convert_date($acao->data_acao)),
                              array('data'=>$acao->materiais),
                              array('data'=>anchor('acoes_pa/editar_acao/'.$acao->id, ' <i class="icon-edit"></i> Editar',array('class' => ' btn .btn-min')). ' '.
                                            anchor('acoes_pa/excluir_acao/'.$acao->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn .btn-mini')), 'style'=>'width:200px'));

    endforeach;

    echo $this->table->generate();
}
else
{
    echo '<div class="alert alert-info">Nenhuma ação cadastrada!</div>';
}

echo anchor('acoes_pa/adicionar_acao/'.$id_plano, '<i class="icon-plus-sign icon-white"></i> Adicionar Ação',array('class' => 'btn btn-primary', 'id'=> 'add_acao', 'role' => 'button'));

?>

<script>

$(function () {
    $("a.confirm_delete").click(function(e) {
        e.preventDefault();
        var location = $(this).attr('href');
        bootbox.confirm("Excluir esse item?", "Não", "Sim", function(confirmed) {
            if(confirmed) {
            window.location.replace(location);
            }
        });
    });
});

</script>

