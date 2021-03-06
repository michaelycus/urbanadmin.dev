<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-office"></i> Editar bairro</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                <?php
                $id = $this->uri->segment(3);

                if ($id==NULL && $bairro==NULL) redirect('bairros');

                echo form_open('configuracoes/bairros/editar_bairro', 'class="bs-docs-example form-horizontal"');

                echo validation_errors('<div class="alert alert-error">','</div>');
                if ($this->session->userdata('bairro_editado'))
                {
                    echo '<div class="alert alert-success">'. $this->session->userdata('bairro_editado') .'</div>';
                    $this->session->unset_userdata('bairro_editado');
                }

                // nome
                echo '<div class="form-group">';
                echo form_label('Nome', 'nome', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'nome','id' => 'nome','class' => 'form-control'), set_value('nome',$bairro->nome));
                echo    '</div>';
                echo '</div>';

                // descricao
                echo '<div class="form-group">';
                echo form_label('Descrição', 'descricao', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_textarea(array('name' => 'descricao','id' => 'descricao','class' => 'form-control'), set_value('descricao',$bairro->descricao));
                echo    '</div>';
                echo '</div>';

                // nome_presidente
                echo '<div class="form-group">';
                echo form_label('Nome presidente', 'nome_presidente', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'nome_presidente','id' => 'nome_presidente','class' => 'form-control'), set_value('nome_presidente',$bairro->nome_presidente));
                echo    '</div>';
                echo '</div>';

                // telefone_presidente
                echo '<div class="form-group">';
                echo form_label('Telefone presidente', 'telefone_presidente', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'telefone_presidente','id' => 'telefone_presidente','class' => 'form-control telefone_presidente'), set_value('telefone_presidente',$bairro->telefone_presidente));
                echo    '</div>';
                echo '</div>';

                // endereco_presidente
                echo '<div class="form-group">';
                echo form_label('Endereço presidente', 'endereco_presidente', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'endereco_presidente','id' => 'endereco_presidente','class' => 'form-control'), set_value('endereco_presidente',$bairro->endereco_presidente));
                echo    '</div>';
                echo '</div>';

                // email_presidente
                echo '<div class="form-group">';
                echo form_label('E-mail presidente', 'email_presidente', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'email_presidente','id' => 'email_presidente','class' => 'form-control'), set_value('email_presidente',$bairro->email_presidente));
                echo    '</div>';
                echo '</div>';

                // populacao
                echo '<div class="form-group">';
                echo form_label('População', 'populacao', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'populacao','id' => 'populacao','class' => 'form-control'), set_value('populacao',$bairro->populacao));
                echo    '</div>';
                echo '</div>';

                echo form_hidden('id', $bairro->id);

                echo '<div class="form-group">';
                echo    '<div class="col-lg-offset-3">';
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

<script>
    $(document).ready(function(){
        $('.telefone_presidente').mask('(00) 0000-0000'); //telefone
    });
</script>