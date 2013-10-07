

    <ul class="nav nav-pills">
        <li><?php echo anchor('requerentes/da_cidade', 'Da cidade') ?></li>
        <li><?php echo anchor('requerentes/de_outras_cidades', 'De outras cidades') ?></li>
        <li class="active"><?php echo anchor('requerentes/cadastrar_requerente', 'Cadastrar') ?></li>
    </ul>

    <?php    
    echo form_open('requerentes/cadastrar_requerente', 'class="bs-docs-example form-horizontal"');

    echo validation_errors('<div class="alert alert-error">','</div>');
    if ($this->session->userdata('requerente_cadastrado'))
    {
        echo '<div class="alert alert-success">'. $this->session->userdata('requerente_cadastrado') .'</div>';
        $this->session->unset_userdata('requerente_cadastrado');
    }

    echo '<h4>Cadastrar requerente</h4>';

    // nome
    echo '<div class="control-group">';
    echo form_label('Nome', 'nome', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Nome'), set_value('nome'));
    echo    '</div>';
    echo '</div>';
    
    echo '<hr>';

    // pessoa_fisica
    ?>
    <div class="control-group">
        <label for="pessoa_fisica" class="control-label"></label>
        <div class="controls">
            <label class="radio inline">
                <input type="radio" name="pessoa_fisica" id="pessoa_fisica_0" value="0" checked>
                Pessoa física
            </label>
            <label class="radio inline">
                <input type="radio" name="pessoa_fisica" id="pessoa_fisica_1" value="1">
                Pessoa jurídica
            </label>
        </div>
    </div>
    <?php

    // --- PESSOA FÍSICA ---
    echo '<div id="pessoa_f">';

    // cpf
    echo '<div class="control-group">';
    echo form_label('CPF', 'cpf', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'cpf','id' => 'cpf','placeholder' => 'CPF'), set_value('cpf'));
    echo    '</div>';
    echo '</div>';

    // rg
    echo '<div class="control-group">';
    echo form_label('RG', 'rg', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'rg','id' => 'rg','placeholder' => 'RG'), set_value('rg'));
    echo    '</div>';
    echo '</div>';

    // profissao
    echo '<div class="control-group">';
    echo form_label('Profissão', 'profissao', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'profissao','id' => 'profissao','placeholder' => 'Profissão'), set_value('profissao'));
    echo    '</div>';
    echo '</div>';

    echo '</div>';
    // --- --- --- ---

    // --- PESSOA JURIDICA ---

    echo '<div id="pessoa_j">';

    // cnpj
    echo '<div class="control-group">';
    echo form_label('CNPJ', 'cnpj', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'cnpj','id' => 'cnpj','placeholder' => 'CNPJ'), set_value('cnpj'));
    echo    '</div>';
    echo '</div>';

    echo '</div>';
    // --- --- --- ---
    
    echo '<hr>';

    // email
    echo '<div class="control-group">';
    echo form_label('E-mail', 'email', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'email','id' => 'email','placeholder' => 'E-mail'), set_value('email'));
    echo    '</div>';
    echo '</div>';

    // telefone
    echo '<div class="control-group">';
    echo form_label('Telefone', 'telefone', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'telefone','id' => 'telefone','placeholder' => 'Telefone'), set_value('telefone'));
    echo    '</div>';
    echo '</div>';

    // endereco
    echo '<div class="control-group">';
    echo form_label('Endereço', 'endereco', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'endereco','id' => 'endereco','placeholder' => 'Endereço'), set_value('endereco'));
    echo    '</div>';
    echo '</div>';
    
    echo '<hr>';

    // mora_cidade
    echo '<div class="control-group">';
    echo form_label('Reside na cidade?', 'mora_cidade', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo        '<select id="mora_cidade" name="mora_cidade">';
    echo            '<option value="1" '.set_select('mora_cidade').'>Sim</option>';
    echo            '<option value="0" '.set_select('mora_cidade').'>Não</option>';
    echo        '</select>';
    echo    '</div>';
    echo '</div>';

    // --- NA CIDADE ---
    echo '<div id="na_cidade">';

    // id_bairro
    echo '<div class="control-group">';
    echo    '<label for="id_bairro" class="control-label">Bairro</label>';
    echo    '<div class="controls">';
    echo        '<select id="id_bairro" name="id_bairro">';
    foreach ($bairros as $bairro)
    {
        echo        '<option value="'.$bairro->id.'" '.set_select('id_bairro', $bairro->id).'>'.$bairro->nome.'</option>';
    }
    echo        '</select>';
    echo    '</div>';
    echo '</div>';

    echo '</div>';
    // --- --- ---
    
    // --- OUTRA CIDADE ---
    echo '<div id="outra_cidade">';

    echo '<div class="control-group">';
    echo form_label('Estado', 'estado', array('class' => 'control-label'));
    echo    '<div class="controls">';
                $options = array ('' => 'Escolha um Estado');
                foreach($estados as $estado)
                    $options[$estado->id] = $estado->nome;
    echo        form_dropdown('estado', $options);
    echo    '</div>';
    echo '</div>';

    echo '<div class="control-group">';
    echo form_label('Cidade', 'cidade', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo         form_dropdown('cidade', array('' => 'Escolha uma Cidade'), '','id="cidade"' );
    echo    '</div>';
    echo '</div>';

    // cep
    echo '<div class="control-group">';
    echo form_label('CEP', 'cep', array('class' => 'control-label'));
    echo    '<div class="controls">';
    echo    form_input(array('name' => 'cep','id' => 'cep','placeholder' => 'CEP'), set_value('cep'));
    echo    '</div>';
    echo '</div>';

    echo '</div>';
    
    // --- --- --- 

    echo '<div class="control-group">';
    echo    '<div class="controls">';
    echo form_submit('submit', 'Cadastrar', 'class="btn btn-primary"');
    echo    '</div>';
    echo '</div>';

    echo form_close();

    ?>

<script type="text/javascript" src="<?php echo base_url() . 'js/jquery.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'js/cep.js'; ?>"></script>
<script type="text/javascript">
    var path = '<?php echo site_url(); ?>';
</script>

<script>
    jQuery(function($) {
        $.mask.definitions['~']='[+-]';
        $('#telefone').mask('(99) 9999-9999'); //telefone
        $("#cep").mask("99999-999");//cep
        $('#rg').mask('99.99.99.99.99'); //RG
        $('#cpf').mask('999.999.999-99'); //CPF
        $('#cnpj').mask('99.999.999/9999-99'); //CNPJ).mask('999.999.999-99'); //CPF
    });

    $(document).ready(function(){
        $("#outra_cidade").hide();

        $("#mora_cidade").change(function(){
            var opt = $("#mora_cidade option:selected").val();

            if (opt == '1')
            {
                $("#na_cidade").show(200);
                $("#outra_cidade").hide(200);
            }
            else
            {
                $("#na_cidade").hide(200);
                $("#outra_cidade").show(200);
            }
        });

        $("#pessoa_j").hide();

        $(":radio").change(function(){
            var rad = $('input[name=pessoa_fisica]:checked').val();

            if (rad == '0')
            {
                $("#pessoa_f").show(200);
                $("#pessoa_j").hide(200);
            }
            else
            {
                $("#pessoa_f").hide(200);
                $("#pessoa_j").show(200);
            }
        });
    });
</script>