
    <ul class="nav nav-pills">
        <li><?php echo anchor('memorias/lista_memorias', 'Listar') ?></li>
        <li><?php echo anchor('memorias/adicionar_memoria', 'Adicionar') ?></li>
    </ul>

    <?php
    $id = $this->uri->segment(3);
    if ($id==NULL) redirect('memorias');
    
    echo form_open('memorias/editar_memoria', 'class="bs-docs-example form-horizontal"');
    
    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('memoria_editada'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('memoria_editada') .'</div>';
        $this->session->unset_userdata('memoria_editada');
    }
    
    echo '<h4>Editar memória</h4>';

    // nome
    echo '<div class="control-group">';    
    echo form_label('Memória reunião', 'nome', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Memória'), set_value('nome',$memorias->nome));
    echo    '</div>';
    echo '</div>';

    // quando
    echo '<div class="control-group">';
    echo form_label('Quando', 'quando', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'quando','id' => 'quando','placeholder' => 'dd/mm/aaaa', 'class' => 'data'), set_value('quando',$this->form_validation->convert_sql_to_human($memorias->quando)));
    echo    '</div>';
    echo '</div>';

    // horário
    echo '<div class="control-group">';
    echo form_label('Horário', 'horario', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'horario','id' => 'horario','placeholder' => 'hh:mm'), set_value('horario',$memorias->horario));
    echo    '</div>';
    echo '</div>';

    // local
    echo '<div class="control-group">';
    echo form_label('Local', 'local', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'local','id' => 'local','placeholder' => 'Local'), set_value('local',$memorias->local));
    echo    '</div>';
    echo '</div>';

    // pauta
    echo '<div class="control-group">';
    echo form_label('Pauta', 'pauta', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_textarea(array('name' => 'pauta','id' => 'pauta','placeholder' => 'Pauta'), set_value('pauta',$memorias->pauta));
    echo    '</div>';
    echo '</div>';

    // participantes
    echo '<div class="control-group">';
    echo form_label('Participantes', 'participantes', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_textarea(array('name' => 'participantes','id' => 'participantes','placeholder' => 'Participantes'), set_value('participantes',$memorias->participantes));
    echo    '</div>';
    echo '</div>';
    
    // principais topicos
    echo '<div class="control-group">';
    echo form_label('Principais Tópicos', 'principais_topicos', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_textarea(array('name' => 'principais_topicos','id' => 'principais_topicos','placeholder' => 'Principais Tópicos'), set_value('principais_topicos',$memorias->principais_topicos));
    echo    '</div>';
    echo '</div>';
    
    // decisões
    echo '<div class="control-group">';
    echo form_label('Decisões', 'decisoes', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_textarea(array('name' => 'decisoes','id' => 'decisoes','placeholder' => 'Decisões'), set_value('decisoes',$memorias->decisoes));
    echo    '</div>';
    echo '</div>';    
    
    echo form_hidden('id', $memorias->id);
    
    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Editar', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    ?>