<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-home-8"></i> Cadastrar bairro</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <?php
                    echo form_open('bairros/cadastrar_rua', 'role="form" class="form-horizontal"');

                    echo validation_errors('<div class="alert alert-error">','</div>');
                    if ($this->session->userdata('rua_cadastrada'))
                    {
                        echo '<div class="alert alert-success">'. $this->session->userdata('rua_cadastrada') .'</div>';
                        $this->session->unset_userdata('rua_cadastrada');
                    }

                    // nome
                    echo '<div class="form-group">';
                    echo form_label('Nome', 'nome', array('class' => 'col-lg-3 control-label'));
                    echo    '<div class="col-lg-9">';
                    echo    form_input(array('name' => 'nome','id' => 'nome',
                                'class' => 'form-control','autofocus' => 'autofocus'), set_value('nome'));
                    echo    '</div>';
                    echo '</div>';
                    
                    echo '<div class="form-group">';
                    echo    '<div class="col-lg-offset-2">';
                    echo        '<div class="pad-left15">';
                    echo            form_submit('submit', 'Cadastrar rua', 'class="btn btn-primary"');
                    echo        '</div>';
                    echo    '</div>';
                    echo '</div>';

                    echo form_close();                    
                    ?>
                    
                </div>
           </div><!-- End .widget -->
       </div><!-- End .col-lg-6  -->
    </div><!-- End .row-fluid  -->
</div>

<script>
    $(document).ready(function(){
        $('.telefone_presidente').mask('(00) 0000-0000'); //telefone
    });
</script>