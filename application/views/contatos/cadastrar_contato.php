<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-contact-add-2"></i> Cadastrar contato</h1>
    </div>

    <div class="row">        
        <div class="col-lg-6">
            <div class="panel panel-default">                
                <div class="panel-body">

                <?php    
                echo form_open('contatos/cadastrar_contato', 'class="form-horizontal"');

                echo validation_errors('<div class="alert alert-error">','</div>');
                if ($this->session->userdata('contato_cadastrado'))
                {
                    echo '<div class="alert alert-success">'. $this->session->userdata('contato_cadastrado') .'</div>';
                    $this->session->unset_userdata('contato_cadastrado');
                }

                // nome
                echo '<div class="form-group">';
                echo form_label('Nome', 'nome', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'nome','id' => 'nome','placeholder' => 'Nome',
                            'class' => 'form-control','autofocus' => 'autofocus'), set_value('nome'));
                echo    '</div>';
                echo '</div>';
                
                // email
                echo '<div class="form-group">';
                echo form_label('E-mail', 'email', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'email','id' => 'email','placeholder' => 'E-mail','class' => 'form-control'), set_value('email'));
                echo    '</div>';
                echo '</div>';
                
                // id_bairro
                echo '<div class="form-group">';
                echo    '<label for="id_bairro" class="col-lg-3 control-label">Bairro</label>';
                echo    '<div class="col-lg-9">';
                echo        '<select id="id_bairro" name="id_bairro">';
                echo            '<option value=""> - Selecione um bairro - </option>';
                foreach ($bairros as $bairro)
                {
                    echo        '<option value="'.$bairro->id.'" '.set_select('id_bairro', $bairro->id).'>'.$bairro->nome.'</option>';
                }
                echo            '<option value="100" > - Outra cidade - </option>';
                echo        '</select>';
                echo    '</div>';
                echo '</div>';

                // endereco
                echo '<div class="form-group" id="div_endereco">';
                echo form_label('Endereço', 'endereco', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'endereco','id' => 'endereco','placeholder' => 'Endereço','class' => 'form-control'), set_value('endereco'));
                echo    '</div>';
                echo '</div>';
                
                // telefone
                echo '<div class="form-group">';
                echo form_label('Telefone', 'telefone', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'telefone','id' => 'telefone','placeholder' => '(xx) xxxx-xxxx','class' => 'form-control telefone'), set_value('telefone'));
                echo    '</div>';
                echo '</div>';
                
                // celular_1
                echo '<div class="form-group">';
                echo form_label('Celular (1)', 'celular_1', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'celular_1','id' => 'celular_1','placeholder' => '(xx) xxxx-xxxx','class' => 'form-control celular_1'), set_value('celular_1'));
                echo    '</div>';
                echo '</div>';
                
                // celular_2
                echo '<div class="form-group">';
                echo form_label('Celular (2)', 'celular_2', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'celular_2','id' => 'celular_2','placeholder' => '(xx) xxxx-xxxx','class' => 'form-control celular_2'), set_value('celular_2'));
                echo    '</div>';
                echo '</div>';

                // --- --- --- 

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
       
       <script src="<?php echo base_url(); ?>js/maps/raphael.js" charset="utf-8" ></script>
       <script src="<?php echo base_url(); ?>js/maps/jquery.mapael.js" charset="utf-8" ></script>
       <script src="<?php echo base_url(); ?>js/maps/cidade.js" charset="utf-8" ></script>       
       <script src="<?php echo base_url(); ?>js/maps/bairros.js" charset="utf-8" ></script>
       
       <div class="col-lg-6">
           <div class="panel panel-default">                
               <div class="panel-body">
                   <div class="maparea1">
                       <div class="map">
                           <span>Alternative content for the map</span>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       
    </div><!-- End .row-fluid  -->
</div> 

<script>
    $(document).ready(function(){        
        $('.telefone').mask('(00) 0000-0000'); //telefone
        $('.celular_1').mask('(00) 0000-0000'); //telefone
        $('.celular_2').mask('(00) 0000-0000'); //telefone
        
        $('#div_endereco').hide();
        
        $('#id_bairro').change(function() {
            if ($('#id_bairro').val()==100)
            {
                $('#div_endereco').show(200);
            }
            else
            {
                $('#div_endereco').hide(400);
            }         
        });
    });
</script>