<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-office"></i> Listar bairros</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-list-3"></i></div>
                    <h4>Editar rua</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->
                
                <div class="panel-body">
                    
                    <?php
                    if ($this->session->userdata('rua_excluida'))
                    {
                        echo '<div class="alert alert-success">'. $this->session->userdata('rua_excluida') .'</div>';
                        $this->session->unset_userdata('rua_excluida');
                    }
                    ?>
                    
                    <div class="row">
                        <div class="form-group">
                            <label class="col-lg-3 control-label" for="select2">Selecione uma rua</label>
                            <div class="col-lg-9">                            

                                <select name="select1" id="select1" class="select2">
                                    <option></option>

                                    <?php

                                    foreach ($ruas as $rua)
                                    {
                                        echo '<option value="'.$rua->id.'">'.$rua->nome.'</option>';
                                    }                                
                                    ?>

                                </select>

                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="alert alert-success hidden" id="msg">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <i class="icon24 i-checkmark-circle"></i> 
                        </div>    
                    </div>                    
                    
                    <div class="row">
                        <?php
                        foreach ($bairros as $bairro)
                        {
                            $data = array(
                            'name'        => 'bairros[]',
                            'checked'     => FALSE,
                            'value'       => $bairro->id,
                            'class'       => 'multiselect',
                            );

                            echo '<div class="col-lg-6">';
                            echo    '<div class="col-lg-2">';
                            echo        form_checkbox($data);
                            echo    '</div>';
                            echo    '<label class="col-lg-10 control-label" for="bairro_'.$bairro->codename.'">'.$bairro->nome.'</label>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <div class="row">
                        <?php

                        echo '<div class="col-lg-12">';
                        echo    '<button id="bt_salvar" class="btn btn-primary"> Salvar alterações </button> ';
                        echo    '<button id="bt_excluir" class="btn btn-danger"> Excluir rua </button> ';                        
                        echo '</div>';

                        ?>
                    </div>    
                    
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <div class="icon"><i class="icon20 i-plus-circle"></i></div>
                    <h4>Adicionar rua</h4>
                    <a href="#" class="minimize"></a>
                </div><!-- End .panel-heading -->
                
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
            </div>
        </div>

    </div><!-- End .row-fluid  -->    
    
</div>


<script type="text/javascript" src="<?php echo base_url() . 'js/ruas.js'; ?>"></script>
<script type="text/javascript">
    var path = '<?php echo site_url(); ?>';
    
    $('#bt_salvar').click(function(){ 
        
        var val_bairros = [];
        $(':checkbox:checked').each(function(i){
          val_bairros[i] = $(this).val();
        });
        
        var form_data = {
            rua: $('#select1').val(),
            bairros: val_bairros
        };        

        $.ajax({
            url: '<?php echo base_url('bairros/salvar_edicao');?>',
            type:'POST',
            data: form_data,
            dataType: 'json',
            success: function(output_string){
                    $('#msg').removeClass('hidden').append(output_string).delay(4000).fadeOut(1000);
                } // End of success function of ajax form
            }); // End of ajax call  
    });    
    
    $('#bt_excluir').click(function(e){   
    
        e.preventDefault();
        bootbox.confirm("Excluir esse item?", function(confirmed) {
            if(confirmed) {
                var id = $('#select1').val();
                if (id.length != 0)
                {
                    window.location = "<?php echo base_url() . 'bairros/excluir_rua/';?>" + id + "";
                }
            }
        });
    });    
    
</script>
