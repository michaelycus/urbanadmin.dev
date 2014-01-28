<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-user-3"></i> Cadastrar requerente</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                <?php
                echo form_open('requerentes/cadastrar_requerente', 'class="bs-docs-example form-horizontal"');

                echo validation_errors('<div class="alert alert-error">','</div>');
                if ($this->session->userdata('requerente_cadastrado'))
                {
                    echo '<div class="alert alert-success">'. $this->session->userdata('requerente_cadastrado') .'</div>';
                    $this->session->unset_userdata('requerente_cadastrado');
                }

                // nome
                echo '<div class="form-group">';
                echo form_label('Nome', 'nome', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Nome',
                            'class' => 'form-control','autofocus' => 'autofocus'), set_value('nome'));
                echo    '</div>';
                echo '</div>';

                echo '<hr>';

                // pessoa_fisica
                ?>
<!--                <div class="form-group">
                    <label for="pessoa_fisica" class="col-lg-3 control-label"></label>
                    <div class="col-lg-9">
                        <label class="radio-inline">
                            <input type="radio" name="pessoa_fisica" id="pessoa_fisica_0" class="form-control" value="0" checked>
                            Pessoa física
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="pessoa_fisica" id="pessoa_fisica_1" class="form-control" value="1">
                            Pessoa jurídica
                        </label>
                    </div>
                </div>-->
                <?php

                // --- PESSOA FÍSICA ---
                echo '<div id="pessoa_f">';

                // cpf
                echo '<div class="form-group">';
                echo form_label('CPF', 'cpf', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'cpf','id' => 'cpf','placeholder' => 'CPF','class' => 'form-control cpf'), set_value('cpf'));
                echo    '</div>';
                echo '</div>';

                // rg
                echo '<div class="form-group">';
                echo form_label('RG', 'rg', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'rg','id' => 'rg','placeholder' => 'RG','class' => 'form-control rg'), set_value('rg'));
                echo    '</div>';
                echo '</div>';

                // profissao
                echo '<div class="form-group">';
                echo form_label('Profissão', 'profissao', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'profissao','id' => 'profissao','placeholder' => 'Profissão','class' => 'form-control'), set_value('profissao'));
                echo    '</div>';
                echo '</div>';

                echo '</div>';
                // --- --- --- ---

                // --- PESSOA JURIDICA ---

                echo '<div id="pessoa_j">';

                // cnpj
                echo '<div class="form-group">';
                echo form_label('CNPJ', 'cnpj', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'cnpj','id' => 'cnpj','placeholder' => 'CNPJ','class' => 'form-control cnpj'), set_value('cnpj'));
                echo    '</div>';
                echo '</div>';

                echo '</div>';
                // --- --- --- ---

                echo '<hr>';

                // email
                echo '<div class="form-group">';
                echo form_label('E-mail', 'email', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'email','id' => 'email','placeholder' => 'E-mail','class' => 'form-control'), set_value('email'));
                echo    '</div>';
                echo '</div>';

                // telefone
                echo '<div class="form-group">';
                echo form_label('Telefone', 'telefone', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'telefone','id' => 'telefone','placeholder' => 'Telefone','class' => 'form-control telefone'), set_value('telefone'));
                echo    '</div>';
                echo '</div>';

                // endereco
                echo '<div class="form-group">';
                echo form_label('Endereço', 'endereco', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'endereco','id' => 'endereco','placeholder' => 'Endereço','class' => 'form-control'), set_value('endereco'));
                echo    '</div>';
                echo '</div>';

                echo '<hr>';

                // mora_cidade
                echo '<div class="form-group">';
                echo form_label('Reside na cidade?', 'mora_cidade', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo        '<select id="mora_cidade" name="mora_cidade">';
                echo            '<option value="1" '.set_select('mora_cidade').'>Sim</option>';
                echo            '<option value="0" '.set_select('mora_cidade').'>Não</option>';
                echo        '</select>';
                echo    '</div>';
                echo '</div>';

                // --- NA CIDADE ---
                echo '<div id="na_cidade">';

                // id_bairro
                echo '<div class="form-group">';
                echo    '<label for="id_bairro" class="col-lg-3 control-label">Bairro</label>';
                echo    '<div class="col-lg-9">';
                echo        '<select id="id_bairro" name="id_bairro">';
                echo            '<option value=""> - Selecione um bairro - </option>';
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

                echo '<div class="form-group">';
                echo form_label('Estado', 'estado', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                            $options = array ('' => 'Escolha um Estado');
                            foreach($estados as $estado)
                                $options[$estado->id] = $estado->nome;
                echo        form_dropdown('estado', $options);
                echo    '</div>';
                echo '</div>';

                echo '<div class="form-group">';
                echo form_label('Cidade', 'cidade', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo         form_dropdown('cidade', array('' => 'Escolha uma Cidade'), '','id="cidade"' );
                echo    '</div>';
                echo '</div>';

                // cep
                echo '<div class="form-group">';
                echo form_label('CEP', 'cep', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'cep','id' => 'cep','placeholder' => 'CEP','class' => 'form-control cep'), set_value('cep'));
                echo    '</div>';
                echo '</div>';

                echo '</div>';

                echo '<hr>';

                echo '<div class="form-group">';
                echo form_label('É vereador?', 'tipo', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo        '<div class="switch" data-on="primary" data-off="danger" data-on-label="<i class=\'i-checkmark-3\'></i>" data-off-label="<i class=\'i-close\'></i>">';
                echo            '<input class="toggle"controls-row type="checkbox" id="tipo" name="tipo" />';
                echo        '</div>';
                echo    '</div>';
                echo '</div>';

                // --- --- ---

                echo '<div class="form-group">';
                echo    '<div class="col-lg-offset-2">';
                echo        '<div class="pad-left15">';
                echo            form_submit('submit', 'Cadastrar', 'class="btn btn-primary"');
                echo        '</div>';
                echo    '</div>';
                echo '</div>';

                echo form_close();

                ?>

                </div><!-- End .panel-body -->
           </div><!-- End .widget -->
       </div><!-- End .col-lg-6  -->
    </div><!-- End .row-fluid  -->
</div>

<script type="text/javascript" src="<?php echo base_url() . 'js/cep.js'; ?>"></script>
<script type="text/javascript">
    var path = '<?php echo site_url(); ?>';
</script>

<script>
    $(document).ready(function(){
        $('.telefone').mask('(00) 0000-0000'); //telefone
        $('.cep').mask("00000-000");//cep
        $('.rg').mask('00.00.00.00.00'); //RG
        $('.cpf').mask('000.000.000-00'); //CPF
        $('.cnpj').mask('00.000.000/0000-00'); //CNPJ

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