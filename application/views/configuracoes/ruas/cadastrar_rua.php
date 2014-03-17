<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-home-8"></i> Cadastrar rua</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <?php
                    echo form_open('configuracoes/ruas/cadastrar_rua', 'role="form" class="form-horizontal"');

                    echo validation_errors('<div class="alert alert-error">','</div>');
                    if ($this->session->userdata('rua_cadastrada'))
                    {
                        echo '<div class="alert alert-success">'. $this->session->userdata('rua_cadastrada') .'</div>';
                        $this->session->unset_userdata('rua_cadastrada');
                    }

                    // nome
                    echo '<div class="form-group">';
                    echo form_label('Nome', 'nome', array('class' => 'col-lg-2 control-label'));
                    echo    '<div class="col-lg-10">';
                    echo    form_input(array('name' => 'nome','id' => 'nome',
                                'class' => 'form-control','autofocus' => 'autofocus'), set_value('nome'));
                    echo    '</div>';
                    echo '</div>';

                    // lei_decreto
                    echo '<div class="form-group">';
                    echo form_label('Decreto de lei', 'lei_decreto', array('class' => 'col-lg-2 control-label'));
                    echo    '<div class="col-lg-10">';
                    echo    form_input(array('name' => 'lei_decreto','id' => 'lei_decreto',
                                'class' => 'form-control'), set_value('lei_decreto'));
                    echo    '</div>';
                    echo '</div>';

                    echo '<div class="form-group">';
                    foreach ($bairros as $bairro)
                    {
                        $data = array(
                        'name'        => 'bairros[]',
                        'checked'     => FALSE,
                        'value'       => $bairro->id,
                        'class'       => 'multiselect',
                        );

                        echo '<div class="col-lg-3">';
                        echo    '<div class="col-lg-4">';
                        echo        form_checkbox($data);
                        echo    '</div>';
                        echo    '<label class="col-lg-8 control-label" for="bairro_'.$bairro->codename.'">'.$bairro->nome.'</label>';
                        echo '</div>';
                    }
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
