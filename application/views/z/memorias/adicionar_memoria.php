
    <ul class="nav nav-pills">
        <li><?php echo anchor('memorias/lista_memorias', 'Listar') ?></li>
        <li class="active"><?php echo anchor('memorias/adicionar_memoria', 'Adicionar') ?></li>
    </ul>

    <?php
    echo form_open('memorias/adicionar_memoria', 'class="bs-docs-example form-horizontal"');
    
    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('memoria_adicionada'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('memoria_adicionada') .'</div>';
        $this->session->unset_userdata('memoria_adicionada');
    }
    
    echo '<h4>Adicionar memória</h4>';

    // nome
    echo '<div class="control-group">';    
    echo form_label('Memória reunião', 'nome', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Memória'), set_value('nome'));
    echo    '</div>';
    echo '</div>';

    // quando
    echo '<div class="control-group">';
    echo form_label('Quando', 'quando', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'quando','id' => 'quando','placeholder' => 'dd/mm/aaaa', 'class' => 'data'), set_value('quando'));
    echo    '</div>';
    echo '</div>';

    // horário
    echo '<div class="control-group">';
    echo form_label('Horário', 'horario', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'horario','id' => 'horario','placeholder' => 'hh:mm'), set_value('horario'));
    echo    '</div>';
    echo '</div>';

    // local
    echo '<div class="control-group">';
    echo form_label('Local', 'local', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'local','id' => 'local','placeholder' => 'Local'), set_value('local'));
    echo    '</div>';
    echo '</div>';

    // pauta
    echo '<div class="control-group">';
    echo form_label('Pauta', 'pauta', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_textarea(array('name' => 'pauta','id' => 'pauta','placeholder' => 'Pauta'), set_value('pauta'));
    echo    '</div>';
    echo '</div>';

    // participantes
    echo '<div class="control-group">';
    echo form_label('Participantes', 'participantes', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_textarea(array('name' => 'participantes','id' => 'participantes','placeholder' => 'Participantes'), set_value('participantes'));
    echo    '</div>';
    echo '</div>';
    
    // principais topicos
    echo '<div class="control-group">';
    echo form_label('Principais Tópicos', 'principais_topicos', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_textarea(array('name' => 'principais_topicos','id' => 'principais_topicos','placeholder' => 'Principais Tópicos'), set_value('principais_topicos'));
    echo    '</div>';
    echo '</div>';
    
    // decisões
    echo '<div class="control-group">';
    echo form_label('Decisões', 'decisoes', array('class' => 'control-label'));    
    echo    '<div class="controls">';
    echo    form_textarea(array('name' => 'decisoes','id' => 'decisoes','placeholder' => 'Decisões'), set_value('decisoes'));
    echo    '</div>';
    echo '</div>';    
    
    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Adicionar', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();
    ?>