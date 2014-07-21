<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-paragraph-justify-3"></i> Cadastrar faixa</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                <?php                
                
                echo form_open('faixas/cadastrar_faixa', 'class="bs-docs-example form-horizontal"');

                if (!empty($error))
                    echo '<div class="alert alert-error">'. $error .'</div>';

                echo validation_errors('<div class="alert alert-error">','</div>');
                if ($this->session->userdata('faixa_cadastrada'))
                {
                    echo '<div class="alert alert-success">'. $this->session->userdata('faixa_cadastrada') .'</div>';
                    $this->session->unset_userdata('faixa_cadastrada');
                }
                
                // id_bairro
                echo '<div class="form-group">';
                echo    '<label for="id_bairro" class="col-lg-3 control-label">Bairro</label>';
                echo    '<div class="col-lg-9">';
                echo        '<select id="id_bairro" name="id_bairro" class="col-lg-9">';
                echo            '<option value=""> - Todos os bairros - </option>';
                foreach ($bairros as $bairro)
                {
                    echo        '<option value="'.$bairro->id.'" '.set_select('id_bairro', $bairro->id).'>'.$bairro->nome.'</option>';
                }
                echo        '</select>';
                echo    '</div>';
                echo '</div>';

                // id_rua
                echo '<div class="form-group">';
                echo form_label('Rua', 'id_rua', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                        $options = array ('' => 'Escolha um Rua');
                        if (!empty($ruas))
                        {
                            foreach($ruas as $rua)
                                $options[$rua->id] = $rua->nome;
                            echo form_dropdown('id_rua', $options, $faixa->id_rua);
                        }
                        else
                        {
                            echo form_dropdown('id_rua', array('' => 'Escolha uma Rua'), '','id="id_rua" class="col-lg-9"' );
                        }
                echo    '</div>';
                echo '</div>';

                // altura
                echo '<div class="form-group">';
                echo form_label('Altura', 'altura', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo form_input(array('name' => 'altura','id' => 'altura',
                            'class' => 'form-control'), set_value('referencia',$faixa->altura));
                echo    '</div>';
                echo '</div>';
                
                // referencia
                echo '<div class="form-group">';
                echo form_label('Referência', 'referencia', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo form_input(array('name' => 'referencia','id' => 'referencia','placeholder' => 'Perto do...',
                            'class' => 'form-control'), set_value('referencia',$faixa->referencia));
                echo    '</div>';
                echo '</div>';
                

                echo '<hr>';

                echo '<div class="form-group">';
                echo    '<div class="col-lg-offset-3">';
                echo        '<div class="pad-left15">';
                echo        form_submit('submit', 'Adicionar faixa', 'class="btn btn-primary"');
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

<script type="text/javascript" src="<?php echo base_url() . 'js/bairro_rua.js'; ?>"></script>
<script type="text/javascript">
    var path = '<?php echo site_url(); ?>';
</script>
