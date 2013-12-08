    
    <ul class="nav nav-pills">
        <li class="active"><?php echo anchor('acoes_pa/editar_plano_acao/'.$id_plano, '<i class="icon-arrow-left"></i> Voltar para o plano') ?></li>        
    </ul>
    
    <?php        
    echo '<h4>Adicionar ação</h4>';

    echo form_open('acoes_pa/adicionar_acao', 'class="bs-docs-example form-horizontal"');
    
    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('acao_adicionada'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('acao_adicionada') .'</div>';
        $this->session->unset_userdata('acao_adicionada');
    }

    // o_que
    echo '<div class="control-group">';
    echo form_label('O que', 'o_que', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'o_que','id' => 'o_que','placeholder' => 'O que'), set_value('o_que'));
    echo    '</div>';
    echo '</div>';

    // como
    echo '<div class="control-group">';
    echo form_label('Como', 'como', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'como','id' => 'como','placeholder' => 'Como'), set_value('como'));
    echo    '</div>';
    echo '</div>';

    // onde
    echo '<div class="control-group">';
    echo form_label('Onde?', 'onde', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'onde','id' => 'onde','placeholder' => 'Onde'), set_value('onde'));
    echo    '</div>';
    echo '</div>';

    // id_responsavel
    echo '<div class="control-group">';
    echo    '<label for="id_responsavel" class="control-label">Quem</label>';    
    echo    '<div class="controls">';
    echo        '<select id="id_responsavel" name="id_responsavel">';    
    echo           '<option value=""> -- Selecione -- </option>';
    foreach ($usuarios as $usuario)
    {
        echo        '<option value="'.$usuario->id.'">'.$usuario->nome.'</option>';
    }
    echo        '</select>';
    echo    '</div>';
    echo '</div>'; 

    // delegado
    echo '<div class="control-group">';
    echo form_label('Delegado?', 'delegado', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'delegado','id' => 'delegado','placeholder' => 'Delegado'), set_value('delegado'));
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
        echo '<option value="'.$i.'">'.$item.'</option>'."\n";
        $i++;
    endforeach;
    echo        '</select>';
    echo    '</div>';
    echo '</div>';

    // quando
    echo '<div class="control-group">';
    echo form_label('Quando', 'data_acao', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'data_acao','id' => 'data_acao','placeholder' => 'dd/mm/aaaa', 'class' => 'data'), set_value('data_acao'));
    echo    '</div>';
    echo '</div>';

    // materiais
    echo '<div class="control-group">';
    echo form_label('Materiais?', 'materiais', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'materiais','id' => 'materiais','placeholder' => 'Materiais'), set_value('materiais'));
    echo    '</div>';
    echo '</div>';

    echo form_hidden('id_plano_acao', $id_plano);

    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Adicionar ação', 'class="btn btn-primary"');    
    echo    '</div>';
    echo '</div>';

    echo form_close();

    ?>  
    
    <hr>
