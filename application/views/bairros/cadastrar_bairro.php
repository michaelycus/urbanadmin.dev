<div class="crumb">
    <ul class="breadcrumb">
        <li><a href="#"><i class="icon16 i-home-4"></i>Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
    </ul>
</div>

<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-home-8"></i> Cadastrar bairro</h1>
    </div>

    <div class="row">        
        <div class="col-lg-6">
            <div class="panel panel-default">                
                <div class="panel-body">
                    
                    <?php
                    echo form_open('bairros/cadastrar_bairro', 'role="form" class="bs-docs-example form-horizontal"');

                    echo validation_errors('<div class="alert alert-error">','</div>');
                    if ($this->session->userdata('bairro_cadastrado'))
                    {
                        echo '<div class="alert alert-success">'. $this->session->userdata('bairro_cadastrado') .'</div>';
                        $this->session->unset_userdata('bairro_cadastrado');
                    }

                    // nome                    
                    echo '<div class="form-group">';    
                    echo form_label('Nome', 'nome', array('class' => 'col-lg-2 control-label'));
                    echo    '<div class="col-lg-10">';
                    echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Nome do bairro',
                                'class' => 'form-control','autofocus' => 'autofocus'), set_value('nome'));
                    echo    '</div>';
                    echo '</div>';

                    // descricao
                    echo '<div class="form-group">';
                    echo form_label('Descrição', 'descricao', array('class' => 'col-lg-2 control-label'));    
                    echo    '<div class="col-lg-10">';
                    echo    form_textarea(array('name' => 'descricao','id' => 'descricao',
                                'placeholder' => 'Descrição','class' => 'form-control'), set_value('descricao'));
                    echo    '</div>';
                    echo '</div>';

                    // nome_presidente
                    echo '<div class="form-group">';
                    echo form_label('Nome presidente', 'nome_presidente', array('class' => 'col-lg-2 control-label'));    
                    echo    '<div class="col-lg-10">';
                    echo    form_input(array('name' => 'nome_presidente','id' => 'nome_presidente','placeholder' => 'Nome presidente','class' => 'form-control'), set_value('nome_presidente'));
                    echo    '</div>';
                    echo '</div>';

                    // telefone_presidente
                    echo '<div class="form-group">';
                    echo form_label('Telefone presidente', 'telefone_presidente', array('class' => 'col-lg-2 control-label'));    
                    echo    '<div class="col-lg-10">';
                    echo    form_input(array('name' => 'telefone_presidente','id' => 'telefone_presidente','placeholder' => 'Telefone presidente','class' => 'form-control'), set_value('telefone_presidente'));
                    echo    '</div>';
                    echo '</div>';

                    // endereco_presidente
                    echo '<div class="form-group">';
                    echo form_label('Endereço presidente', 'endereco_presidente', array('class' => 'col-lg-2 control-label'));    
                    echo    '<div class="col-lg-10">';
                    echo    form_input(array('name' => 'endereco_presidente','id' => 'endereco_presidente','placeholder' => 'Endereço presidente','class' => 'form-control'), set_value('endereco_presidente'));
                    echo    '</div>';
                    echo '</div>';

                    // email_presidente
                    echo '<div class="form-group">';
                    echo form_label('E-mail presidente', 'email_presidente', array('class' => 'col-lg-2 control-label'));    
                    echo    '<div class="col-lg-10">';
                    echo    form_input(array('name' => 'email_presidente','id' => 'email_presidente','placeholder' => 'E-mail presidente','class' => 'form-control'), set_value('email_presidente'));
                    echo    '</div>';
                    echo '</div>';

                    // populacao
                    echo '<div class="form-group">';
                    echo form_label('População', 'populacao', array('class' => 'col-lg-2 control-label'));    
                    echo    '<div class="col-lg-10">';
                    echo    form_input(array('name' => 'populacao','id' => 'populacao','placeholder' => 'População','class' => 'form-control'), set_value('populacao'));
                    echo    '</div>';
                    echo '</div>';    

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