<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-tag-3"></i> Editar categoria</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                <?php
                $id = $this->uri->segment(3);

                if ($id==NULL && $categoria==NULL) redirect('categorias_requerimento');

                echo form_open('configuracoes/categorias_requerimento/editar_categoria', 'class="bs-docs-example form-horizontal"');

                echo validation_errors('<div class="alert alert-error">','</div>');
                if ($this->session->userdata('categoria_editada'))
                {
                    echo '<div class="alert alert-success">'. $this->session->userdata('categoria_editada') .'</div>';
                    $this->session->unset_userdata('categoria_editada');
                }

                // nome
                echo '<div class="form-group">';
                echo form_label('Nome', 'nome', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'nome','id' => 'nome','class' => 'form-control'), set_value('nome',$categoria->nome));
                echo    '</div>';
                echo '</div>';

                // descricao
                echo '<div class="form-group">';
                echo form_label('Descrição', 'descricao', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_textarea(array('name' => 'descricao','id' => 'descricao','class' => 'form-control'), set_value('descricao',$categoria->descricao));
                echo    '</div>';
                echo '</div>';
                
                // id_secretaria
                echo '<div class="form-group">';
                echo    '<label for="id_secretaria" class="col-lg-3 control-label">Bairro</label>';
                echo    '<div class="col-lg-9">';
                echo        '<select id="id_secretaria" name="id_secretaria">';
                echo            '<option value=""> - Selecione uma secretaria - </option>';
                foreach ($secretarias as $secretaria)
                {
                    echo        '<option value="'.$secretaria->id.'" '.set_select('id_secretaria', $secretaria->id, $secretaria->id==$categoria->id_secretaria).'>'.$secretaria->nome.'</option>';
                }
                echo        '</select>';
                echo    '</div>';
                echo '</div>';

                echo form_hidden('id', $categoria->id);

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