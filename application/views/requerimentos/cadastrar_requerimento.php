<style type="text/css">
    .mapTooltip {
        position:fixed;
        background-color : #fff;
        moz-opacity:0.70;
        opacity: 0.70;
        filter:alpha(opacity=70);
        border-radius:10px;
        padding : 10px;
        z-index: 1000;
        max-width: 200px;
        display:none;
        color:#343434;
    }    

    .map {
        position:relative;
    }

</style>


<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-stack-empty"></i> Cadastrar requerimento</h1>
    </div>

    <div class="row">        
        <div class="col-lg-6">
            <div class="panel panel-default">                
                <div class="panel-body">

                <?php    
                echo form_open_multipart('requerimentos/cadastrar_requerimento', 'class="bs-docs-example form-horizontal"');

                if (!empty($error))
                    echo '<div class="alert alert-error">'. $error .'</div>';

                echo validation_errors('<div class="alert alert-error">','</div>');
                if ($this->session->userdata('requerimento_cadastrado'))
                {
                    echo '<div class="alert alert-success">'. $this->session->userdata('requerimento_cadastrado') .'</div>';
                    $this->session->unset_userdata('requerimento_cadastrado');
                }                

                // descricao
                echo '<div class="form-group">';
                echo form_label('Descrição', 'descricao', array('class' => 'col-lg-3 control-label'));    
                echo    '<div class="col-lg-9">';
                echo    form_textarea(array('name' => 'descricao','id' => 'descricao','placeholder' => 'Descrição do requerimento...',
                            'class' => 'form-control','autofocus' => 'autofocus'), set_value('descricao'));
                echo    '</div>';
                echo '</div>';

                // id_bairro
                echo '<div class="form-group">';
                echo    '<label for="id_bairro" class="col-lg-3 control-label">Bairro</label>';
                echo    '<div class="col-lg-9">';
                echo        '<select id="id_bairro" name="id_bairro" class="col-lg-9">';
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
                echo         form_dropdown('id_rua', array('' => 'Escolha uma Rua'), '','id="id_rua" class="col-lg-9"' );
                echo    '</div>';
                echo '</div>';
                
                // cat_requerimento
                echo '<div class="form-group">';
                echo    '<label for="cat_requerimento" class="col-lg-3 control-label">Tipo Req.</label>';
                echo    '<div class="col-lg-9">';
                echo        '<select id="cat_requerimento" name="cat_requerimento" class="col-lg-9">';
                foreach ($cats_requerimento as $c_r)
                {
                    echo        '<option value="'.$c_r->id.'" '.set_select('cat_requerimento', $c_r->id).'>'.$c_r->nome.'</option>';
                }
                echo        '</select>';
                echo    '</div>';
                echo '</div>';
                
                if ($_SESSION['autorizacao'] == AUTORIZACAO_ADMINISTRADOR)
                {
                    echo '<hr>';    

                    // id_requerente
                    echo '<div class="form-group">';
                    echo    '<label for="id_requerente" class="col-lg-3 control-label">Requerente</label>';
                    echo    '<div class="col-lg-9">';
                    echo        '<select id="id_requerente" name="id_requerente">';
                    foreach ($requerentes as $requerente)
                    {
                        echo        '<option value="'.$requerente->id.'" '.set_select('id_requerente', $requerente->id).'>'.$requerente->nome.'</option>';
                    }
                    echo        '</select>';
                    echo    '</div>';
                    echo '</div>';
                    
                    // data_requerimento
                    echo '<div class="form-group">';
                    echo form_label('Data', 'data_requerimento', array('class' => 'col-lg-3 control-label'));    
                    echo    '<div class="col-lg-9">';
                    echo        '<div id="datepicker" class="input-group date" data-date="12-02-2012" data-date-format="dd-mm-yyyy">';
                    echo            form_input(array('name' => 'data_requerimento','id' => 'data_requerimento',
                                    'class' => 'form-control data'), set_value('data_requerimento'));
                    echo            '<span class="input-group-addon"><i class="icon16 i-calendar-4"></i></span>';
                    echo        '</div>';
                    echo    '</div>';
                    echo '</div>';
                }
                else
                {
                    echo form_hidden('id_requerente', REQUERENTE_PADRAO_ID); 
                    echo form_hidden('data_requerimento',  date('d/m/Y')); 
                }
                
                echo '<hr>';

                // anexo_1
                echo '<div class="form-group">';
                echo form_label('Anexo 1', 'anexo_1', array('class' => 'col-lg-3 control-label'));    
                echo    '<div class="col-lg-9">';
                echo        form_upload('anexo_1');
                echo    '</div>';
                echo '</div>';

                // anexo_2
                echo '<div class="form-group">';
                echo form_label('Anexo 2', 'anexo_2', array('class' => 'col-lg-3 control-label'));    
                echo    '<div class="col-lg-9">';
                echo        form_upload('anexo_2');
                echo    '</div>';
                echo '</div>';

                // anexo_3
                echo '<div class="form-group">';
                echo form_label('Anexo 3', 'anexo_3', array('class' => 'col-lg-3 control-label'));    
                echo    '<div class="col-lg-9">';
                echo        form_upload('anexo_3');
                echo    '</div>';
                echo '</div>';

                echo form_hidden('id', $bairro->id);
                echo form_hidden('id_solicitante', $_SESSION['id_user']);
                
                if ($_SESSION['autorizacao'] == AUTORIZACAO_OPERADOR)
                {
                    echo '<hr>'; 
                    
                    // notificar
                    echo '<div class="form-group">';
                    echo    '<label for="notificar" class="col-lg-3 control-label">Notificação</label>';
                    echo    '<div class="col-lg-9">';
                    echo        form_checkbox(array('name' => 'notificar','id' => 'notificar',
                                'class' => 'form-control', 'value' => 'notificar', 'checked' => 'checked'));
                    echo    ' Receber notificações sobre avanço do requerimento.';
                    echo    '</div>';
                    echo '</div>';
                    
                    echo '<hr>'; 
                }
                else
                {
                    echo form_hidden('notificar', 0); 
                }

                echo '<div class="form-group">';
                echo    '<div class="col-lg-offset-2">';
                echo        '<div class="pad-left15">';
                echo        form_submit('submit', 'Cadastrar requerimento', 'class="btn btn-primary"');
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
       <!--<script src="<?php echo base_url(); ?>js/maps/requerimentos_por_bairro.js" charset="utf-8" ></script>-->
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

<script type="text/javascript" src="<?php echo base_url() . 'js/bairro_rua.js'; ?>"></script>
<script type="text/javascript">
    var path = '<?php echo site_url(); ?>';
</script>
