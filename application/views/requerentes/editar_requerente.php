<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-user-3"></i> Editar requerente</h1>
    </div>

    <div class="row">        
        <div class="col-lg-6">
            <div class="panel panel-default">                
                <div class="panel-body">

                <?php
                $id = $this->uri->segment(3);
                
                // Redireciona quando usuário não é apresentado
                if ($id==NULL && $requerente==NULL) redirect('requerentes');
                
                // Evita de operadores editarem outros usuários
                if ($_SESSION['autorizacao']==AUTORIZACAO_OPERADOR && $_SESSION['id_user']!=$id) redirect('requerimentos');

                echo form_open('requerentes/editar_requerente/'.$id, 'role="form" class="bs-docs-example form-horizontal"');

                echo validation_errors('<div class="alert alert-error">','</div>');
                if ($this->session->userdata('requerente_editado'))
                {
                    echo '<div class="alert alert-success">'. $this->session->userdata('requerente_editado') .'</div>';
                    $this->session->unset_userdata('requerente_editado');
                }

                // nome
                echo '<div class="form-group">';
                echo form_label('Nome', 'nome', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Nome do bairro',
                            'class' => 'form-control','autofocus' => 'autofocus'), set_value('nome',$requerente->nome));
                echo    '</div>';
                echo '</div>';

                echo '<hr>';

                // pessoa_fisica
                ?>
                <div class="form-group">
                    <label for="pessoa_fisica" class="control-label"></label>
                    <div class="col-lg-10">
                        <label class="radio-inline">
                            <input type="radio" name="pessoa_fisica" id="pessoa_fisica_0" class="form-control" value="0" <?php echo $requerente->pessoa_fisica == PESSOA_FISICA ? " checked " : ""; ?> >
                            Pessoa física
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="pessoa_fisica" id="pessoa_fisica_1" class="form-control" value="1"<?php echo $requerente->pessoa_fisica == PESSOA_JURIDICA ? " checked " : ""; ?> >
                            Pessoa jurídica
                        </label>
                    </div>
                </div>
                <?php

                // --- PESSOA FÍSICA ---
                echo '<div id="pessoa_f">';

                // cpf
                echo '<div class="form-group">';
                echo form_label('CPF', 'cpf', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                echo    form_input(array('name' => 'cpf','id' => 'cpf','placeholder' => 'CPF','class' => 'form-control cpf'), set_value('cpf',$requerente->cpf));
                echo    '</div>';
                echo '</div>';

                // rg
                echo '<div class="form-group">';
                echo form_label('RG', 'rg', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                echo    form_input(array('name' => 'rg','id' => 'rg','placeholder' => 'RG','class' => 'form-control rg'), set_value('rg',$requerente->rg));
                echo    '</div>';
                echo '</div>';

                // profissao
                echo '<div class="form-group">';
                echo form_label('Profissão', 'profissao', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                echo    form_input(array('name' => 'profissao','id' => 'profissao','placeholder' => 'Profissão','class' => 'form-control'), set_value('profissao',$requerente->profissao));
                echo    '</div>';
                echo '</div>';

                echo '</div>';
                // --- --- --- ---

                // --- PESSOA JURIDICA ---

                echo '<div id="pessoa_j">';

                // cnpj
                echo '<div class="form-group">';
                echo form_label('CNPJ', 'cnpj', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                echo    form_input(array('name' => 'cnpj','id' => 'cnpj','placeholder' => 'CNPJ','class' => 'form-control cnpj'), set_value('cnpj',$requerente->cnpj));
                echo    '</div>';
                echo '</div>';

                echo '</div>';
                // --- --- --- ---

                echo '<hr>';

                // email
                echo '<div class="form-group">';
                echo form_label('E-mail', 'email', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                echo    form_input(array('name' => 'email','id' => 'email','placeholder' => 'e-mail','class' => 'form-control'), set_value('email',$requerente->email));
                echo    '</div>';
                echo '</div>';

                // telefone
                echo '<div class="form-group">';
                echo form_label('Telefone', 'telefone', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                echo    form_input(array('name' => 'telefone','id' => 'telefone','placeholder' => 'Telefone','class' => 'form-control telefone'), set_value('telefone',$requerente->telefone));
                echo    '</div>';
                echo '</div>';

                // endereco
                echo '<div class="form-group">';
                echo form_label('Endereço', 'endereco', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                echo    form_input(array('name' => 'endereco','id' => 'endereco','placeholder' => 'Endereço','class' => 'form-control'), set_value('endereco',$requerente->endereco));
                echo    '</div>';
                echo '</div>';

                echo '<hr>';

                // mora_cidade
                echo '<div class="form-group">';
                echo form_label('Reside na cidade?', 'mora_cidade', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                echo        '<select id="mora_cidade" name="mora_cidade">';
                echo            '<option value="1" '.set_select('mora_cidade', $requerente->mora_cidade, $requerente->mora_cidade==1).'>Sim</option>';
                echo            '<option value="0" '.set_select('mora_cidade', $requerente->mora_cidade, $requerente->mora_cidade==0).'>Não</option>';
                echo        '</select>';
                echo    '</div>';
                echo '</div>';


                // --- NA CIDADE ---
                echo '<div id="na_cidade">';

                // id_bairro
                echo '<div class="form-group">';
                echo    '<label for="id_bairro" class="col-lg-2 control-label">Bairro</label>';
                echo    '<div class="col-lg-10">';
                echo        '<select id="id_bairro" name="id_bairro" class="col-lg-6">';
                foreach ($bairros as $bairro)
                {
                    echo        '<option value="'.$bairro->id.'" '.set_select('id_bairro', $bairro->id, $bairro->id==$requerente->id_bairro).'>'.$bairro->nome.'</option>';
                }
                echo        '</select>';
                echo    '</div>';
                echo '</div>';

                echo '</div>';

                // --- --- ---

                // --- OUTRA CIDADE ---
                echo '<div id="outra_cidade">';

                echo '<div class="form-group">';
                echo form_label('Estado', 'estado', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                            $options = array ('' => 'Escolha um Estado');
                            foreach($estados as $estado)
                                $options[$estado->id] = $estado->nome;
                echo        form_dropdown('estado', $options, $requerente->estado);
                echo    '</div>';
                echo '</div>';

                echo '<div class="form-group">';
                echo form_label('Cidade', 'cidade', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                        $options = array ('' => 'Escolha um Cidade');
                        if (!empty($cidades))
                        {
                            foreach($cidades as $cidade)
                                $options[$cidade->id] = $cidade->nome;
                            echo form_dropdown('cidade', $options, $requerente->cidade);
                        }
                        else
                        {
                            echo form_dropdown('cidade', array('' => 'Escolha uma Cidade'), '','id="cidade"' );
                        }

                echo    '</div>';
                echo '</div>';    

                // cep
                echo '<div class="form-group">';
                echo form_label('CEP', 'cep', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                echo    form_input(array('name' => 'cep','id' => 'cep','placeholder' => 'CEP','class' => 'form-control cep'), set_value('cep',$requerente->cep));
                echo    '</div>';
                echo '</div>';

                echo '</div>';

                echo form_hidden('id', $requerente->id);

                echo '<div class="form-group">';
                echo    '<div class="col-lg-offset-2">';
                echo        '<div class="pad-left15">';
                echo            form_submit('submit', 'Editar', 'class="btn btn-primary"');
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
    var path = '<?php echo site_url(); ?>'
</script>

<script>
    $(document).ready(function(){    
         
        $('.telefone').mask('(00) 0000-0000'); //telefone
        $('.cep').mask("00000-000");//cep
        $('.rg').mask('00.00.00.00.00'); //RG
        $('.cpf').mask('000.000.000-00'); //CPF
        $('.cnpj').mask('00.000.000/0000-00'); //CNPJ
        
        //mora cidade
        var mora_c = <?php echo $requerente->mora_cidade; ?>;

        if (mora_c == 1)
        {
            $("#na_cidade").show();
            $("#outra_cidade").hide();
        }
        else
        {
            $("#na_cidade").hide();
            $("#outra_cidade").show();
        }

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
        
        // pessoa fisica
        var pessoa_f = <?php echo $requerente->pessoa_fisica; ?>;

        if (pessoa_f == 1)
        {
            $("#pessoa_j").show();
            $("#pessoa_f").hide();
        }
        else
        {
            $("#pessoa_j").hide();
            $("#pessoa_f").show();
        } 

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