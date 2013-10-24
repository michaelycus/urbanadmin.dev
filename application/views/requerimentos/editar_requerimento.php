<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-drawer-3"></i> Editar requerimento</h1>
    </div>

    <div class="row">        
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                <?php
                $id = $this->uri->segment(3);
                if ($id==NULL && $requerimento==NULL) redirect('requerimentos');

                echo form_open_multipart('requerimentos/editar_requerimento', 'class="bs-docs-example form-horizontal"');

                echo validation_errors('<div class="alert alert-error">','</div>');
                if ($this->session->userdata('requerimento_editado'))
                {
                    echo '<div class="alert alert-success">'. $this->session->userdata('requerimento_editado') .'</div>';
                    $this->session->unset_userdata('requerimento_editado');
                }

                // descricao
                echo '<div class="form-group">';
                echo form_label('Descrição', 'descricao', array('class' => 'col-lg-2 control-label'));    
                echo    '<div class="col-lg-10">';
                echo        form_textarea(array('name' => 'descricao','id' => 'descricao','placeholder' => 'Descrição do requerimento...','class' => 'form-control'), set_value('descricao',$requerimento->descricao));
                echo    '</div>';
                echo '</div>';

                // bairros
                echo '<div class="form-group">';
                echo    '<label for="id_bairro" class="col-lg-2 control-label">Bairro</label>';
                echo    '<div class="col-lg-10">';
                echo        '<select id="id_bairro" name="id_bairro">';
                foreach ($bairros as $bairro)
                {
                    echo        '<option value="'.$bairro->id.'" '.set_select('id_bairro', $bairro->id, $bairro->id==$requerimento->id_bairro).'>'.$bairro->nome.'</option>';
                }
                echo        '</select>';
                echo    '</div>';
                echo '</div>';
                
                // id_rua
                echo '<div class="form-group">';
                echo form_label('Rua', 'id_rua', array('class' => 'col-lg-2 control-label'));
                echo    '<div class="col-lg-10">';
                        $options = array ('' => 'Escolha um Rua');
                        if (!empty($ruas))
                        {
                            foreach($ruas as $rua)
                                $options[$rua->id] = $rua->nome;
                            echo form_dropdown('id_rua', $options, $requerimento->id_rua);
                        }
                        else
                        {
                            echo form_dropdown('id_rua', array('' => 'Escolha uma Rua'), '','id="id_rua" class="col-lg-10"' );
                        }
                echo    '</div>';
                echo '</div>';
                
                // cat_requerimento
                echo '<div class="form-group">';
                echo    '<label for="cat_requerimento" class="col-lg-2 control-label">Tipo Req.</label>';
                echo    '<div class="col-lg-10">';
                echo        '<select id="cat_requerimento" name="cat_requerimento" class="col-lg-10">';
                foreach ($cats_requerimento as $c_r)
                {
                    echo        '<option value="'.$c_r->id.'" '.set_select('cat_requerimento', $c_r->id, $c_r->id==$requerimento->cat_requerimento).'>'.$c_r->nome.'</option>';
                }
                echo        '</select>';
                echo    '</div>';
                echo '</div>';
                
                echo '<hr>';
                
                // id_requerente
                echo '<div class="form-group">';
                echo    '<label for="id_requerente" class="col-lg-2 control-label">Requerente</label>';
                echo    '<div class="col-lg-10">';
                echo        '<select id="id_requerente" name="id_requerente">';
                foreach ($requerentes as $requerente)
                {
                    echo        '<option value="'.$requerente->id.'" '.set_select('id_requerente', $requerente->id, $requerente->id==$requerimento->id_requerente).'>'.$requerente->nome.'</option>';
                }
                echo        '</select>';
                echo    '</div>';
                echo '</div>';
                
                echo '<hr>';

                echo form_hidden('id', $requerimento->id);

                echo '<div class="form-group">';
                echo    '<div class="col-lg-10">';
                echo        form_submit('submit', 'Editar requerimento', 'class="btn btn-primary"');
                echo    '</div>';
                echo '</div>';

                echo form_close();
                ?>

                </div><!-- End .panel-body -->
           </div><!-- End .widget -->
       </div><!-- End .col-lg-6  -->     
    </div><!-- End .row-fluid  -->
</div>