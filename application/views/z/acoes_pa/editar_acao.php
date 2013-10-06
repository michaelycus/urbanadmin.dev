 
    <ul class="nav nav-pills">
        <li class="active"><?php echo anchor('plano_acoes/editar_plano_acao/'.$acao->id_plano_acao, '<i class="icon-arrow-left"></i> Voltar para o plano') ?></li>
    </ul>

    <?php
    $id = $this->uri->segment(3);
    if ($id==NULL) redirect('plano_acoes/lista_plano_acao');

    echo '<h4>Editar ação</h4>';

    echo form_open('plano_acoes/editar_acao/'.$acao->id, 'class="bs-docs-example form-horizontal"');

    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('acao_editada'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('acao_editada') .'</div>';
        $this->session->unset_userdata('acao_editada');
    }

    // o_que
    echo '<div class="control-group">';
    echo form_label('O que', 'o_que', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'o_que','id' => 'o_que','placeholder' => 'O que'), set_value('o_que',$acao->o_que));
    echo    '</div>';
    echo '</div>';

    // como
    echo '<div class="control-group">';
    echo form_label('Como', 'como', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'como','id' => 'como','placeholder' => 'Como'), set_value('como',$acao->como));
    echo    '</div>';
    echo '</div>';

    // onde
    echo '<div class="control-group">';
    echo form_label('Onde?', 'onde', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'onde','id' => 'onde','placeholder' => 'Onde'), set_value('onde',$acao->onde));
    echo    '</div>';
    echo '</div>';

    // id_responsavel
    echo '<div class="control-group">';
    echo    '<label for="id_responsavel" class="control-label">Responsável</label>';
    echo    '<div class="controls">';
    echo        '<select id="id_responsavel" name="id_responsavel">';
    echo           '<option value=""> -- Selecione -- </option>';
    foreach ($usuarios as $usuario)
    {
        echo        '<option value="'.$usuario->id.'" '.set_select('id_responsavel', $usuario->id, $usuario->id==$acao->id_responsavel).'>'.$usuario->nome.'</option>';
    }
    echo        '</select>';
    echo    '</div>';
    echo '</div>';

    // delegado
    echo '<div class="control-group">';
    echo form_label('Delegado', 'delegado', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'delegado','id' => 'delegado','placeholder' => 'Delegado'), set_value('delegado',$acao->delegado));
    echo    '</div>';
    echo '</div>';

    $niveis = unserialize(NIVEIS_ACOES);

    // id_nivel
    echo '<div class="control-group">';
    echo form_label('Nível', 'id_nivel', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo        '<select id="id_nivel" name="id_nivel">';
    $i = 1;
    foreach ($niveis as $item):
        echo '<option value="'.$i.'" '. ($i==$acao->id_nivel? 'selected' : '').'>'.$item.'</option>'."\n";
        $i++;
    endforeach;
    echo        '</select>';
    echo    '</div>';
    echo '</div>';

    // quando
    echo '<div class="control-group">';
    echo form_label('Quando', 'data_acao', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'data_acao','id' => 'data_acao','placeholder' => 'dd/mm/aaaa', 'class' => 'data'), set_value('data_acao',$this->my_utilities->convert_date($acao->data_acao)));
    echo    '</div>';
    echo '</div>';

    // materiais
    echo '<div class="control-group">';
    echo form_label('Materiais', 'materiais', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'materiais','id' => 'materiais','placeholder' => 'Materiais'), set_value('materiais'),$acao->materiais);
    echo    '</div>';
    echo '</div>';

    echo form_hidden('id', $acao->id);

    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Salvar alterações', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();

    ?>

