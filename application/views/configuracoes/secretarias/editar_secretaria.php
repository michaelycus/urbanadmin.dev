<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-tree-5"></i> Editar Secretaria</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                <?php
                $id = $this->uri->segment(3);

                if ($id==NULL && $secretaria==NULL) redirect('secretarias');

                echo form_open('configuracoes/secretarias/editar_secretaria', 'class="bs-docs-example form-horizontal"');

                echo validation_errors('<div class="alert alert-error">','</div>');
                if ($this->session->userdata('secretaria_editada'))
                {
                    echo '<div class="alert alert-success">'. $this->session->userdata('secretaria_editada') .'</div>';
                    $this->session->unset_userdata('secretaria_editada');
                }

                // nome
                echo '<div class="form-group">';
                echo form_label('Nome', 'nome', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'nome','id' => 'nome','class' => 'form-control'), set_value('nome',$secretaria->nome));
                echo    '</div>';
                echo '</div>';
                
                // sigla
                echo '<div class="form-group">';
                echo form_label('Sigla', 'sigla', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'sigla','id' => 'sigla',
                            'class' => 'form-control'), set_value('sigla',$secretaria->sigla));
                echo    '</div>';
                echo '</div>';  

                // descricao
                echo '<div class="form-group">';
                echo form_label('Descrição', 'descricao', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_textarea(array('name' => 'descricao','id' => 'descricao','class' => 'form-control'), set_value('descricao',$secretaria->descricao));
                echo    '</div>';
                echo '</div>';
                
                // email
                echo '<div class="form-group">';
                echo form_label('E-mail', 'email', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'email','id' => 'email',
                            'class' => 'form-control'), set_value('email',$secretaria->email));
                echo    '</div>';
                echo '</div>';

                // telefone
                echo '<div class="form-group">';
                echo form_label('Telefone', 'telefone', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'telefone','id' => 'telefone',
                            'class' => 'form-control telefone'), set_value('telefone',$secretaria->telefone));
                echo    '</div>';
                echo '</div>';

                echo form_hidden('id', $secretaria->id);

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

<script>
    $(document).ready(function(){
        $('.telefone').mask('(00) 0000-0000'); //telefone       
    });
</script>