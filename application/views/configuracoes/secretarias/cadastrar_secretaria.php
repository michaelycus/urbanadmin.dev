<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-tree-5"></i> Cadastrar Secretaria</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                    <?php
                    echo form_open('configuracoes/secretarias/cadastrar_secretaria', 'role="form" class="bs-docs-example form-horizontal"');

                    echo validation_errors('<div class="alert alert-error">','</div>');
                    if ($this->session->userdata('secretaria_cadastrada'))
                    {
                        echo '<div class="alert alert-success">'. $this->session->userdata('secretaria_cadastrada') .'</div>';
                        $this->session->unset_userdata('secretaria_cadastrada');
                    }

                    // nome
                    echo '<div class="form-group">';
                    echo form_label('Nome', 'nome', array('class' => 'col-lg-3 control-label'));
                    echo    '<div class="col-lg-9">';
                    echo    form_input(array('name' => 'nome','id' => 'nome',
                                'class' => 'form-control','autofocus' => 'autofocus'), set_value('nome'));
                    echo    '</div>';
                    echo '</div>';

                    // sigla
                    echo '<div class="form-group">';
                    echo form_label('Sigla', 'sigla', array('class' => 'col-lg-3 control-label'));
                    echo    '<div class="col-lg-9">';
                    echo    form_input(array('name' => 'sigla','id' => 'sigla',
                                'class' => 'form-control'), set_value('sigla'));
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

                    // email
                    echo '<div class="form-group">';
                    echo form_label('E-mail', 'email', array('class' => 'col-lg-3 control-label'));
                    echo    '<div class="col-lg-9">';
                    echo    form_input(array('name' => 'email','id' => 'email',
                                'class' => 'form-control'), set_value('email'));
                    echo    '</div>';
                    echo '</div>';

                    // telefone
                    echo '<div class="form-group">';
                    echo form_label('Telefone', 'telefone', array('class' => 'col-lg-3 control-label'));
                    echo    '<div class="col-lg-9">';
                    echo    form_input(array('name' => 'telefone','id' => 'telefone',
                                'class' => 'form-control telefone'), set_value('telefone'));
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

<script>
    $(document).ready(function(){
        $('.telefone').mask('(00) 0000-0000'); //telefone
    });
</script>