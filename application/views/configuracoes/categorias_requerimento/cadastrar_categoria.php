<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-tag-3"></i> Cadastrar categoria</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                    <?php
                    echo form_open('configuracoes/categorias_requerimento/cadastrar_categoria', 'role="form" class="bs-docs-example form-horizontal"');

                    echo validation_errors('<div class="alert alert-error">','</div>');
                    if ($this->session->userdata('categoria_cadastrada'))
                    {
                        echo '<div class="alert alert-success">'. $this->session->userdata('categoria_cadastrada') .'</div>';
                        $this->session->unset_userdata('categoria_cadastrada');
                    }

                    // nome
                    echo '<div class="form-group">';
                    echo form_label('Nome', 'nome', array('class' => 'col-lg-3 control-label'));
                    echo    '<div class="col-lg-9">';
                    echo    form_input(array('name' => 'nome','id' => 'nome',
                                'class' => 'form-control','autofocus' => 'autofocus'), set_value('nome'));
                    echo    '</div>';
                    echo '</div>';                    

                    // descricao
                    echo '<div class="form-group">';
                    echo form_label('Descrição', 'descricao', array('class' => 'col-lg-3 control-label'));
                    echo    '<div class="col-lg-9">';
                    echo    form_textarea(array('name' => 'descricao','id' => 'descricao',
                                'class' => 'form-control'), set_value('descricao'));
                    echo    '</div>';
                    echo '</div>';
                    
//                    $options = array();
//                    $options_list = array();
//                    foreach ($secretarias as $secretaria)
//                    {
//                        $options[$secretaria->id]=$secretaria->nome;
//                        $options_list[]=$secretaria->id;
//                    }                    

                    // id_secretaria
//                    echo '<div class="form-group">';
//                    echo    '<label for="id_secretaria" class="col-lg-3 control-label">Secretária</label>';
//                    echo    '<div class="col-lg-9">';
//                    echo        form_dropdown('secretarias[]', $options, $options_list);
//                    echo    '</div>';
//                    echo '</div>';
                    
                    // id_secretaria
                    echo '<div class="form-group">';
                    echo    '<label for="id_secretaria" class="col-lg-3 control-label">Secretária</label>';
                    echo    '<div class="col-lg-9">';
                    echo        '<select id="secretarias[]" name="secretarias[]" multiple>';
                    foreach ($secretarias as $secretaria)
                    {
                        echo        '<option value="'.$secretaria->id.'">'.$secretaria->nome.'</option>';
                    }
                    echo        '</select>';
                    echo    '</div>';
                    echo '</div>';
                    
                    echo '<div class="form-group">';
                    echo    '<div class="col-lg-offset-3">';
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