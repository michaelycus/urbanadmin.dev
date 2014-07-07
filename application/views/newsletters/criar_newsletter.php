<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-pencil-5"></i> Criar newsletter</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                <?php                
                
                echo form_open('newsletters/criar_newsletter', 'class="bs-docs-example form-horizontal" id="form" ');

                echo validation_errors('<div class="alert alert-error">','</div>');
                
                // assunto
                echo '<div class="form-group">';
                echo form_label('Assunto', 'nome', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo    form_input(array('name' => 'assunto','id' => 'assunto','placeholder' => '',
                            'class' => 'form-control','autofocus' => 'autofocus'), set_value('assunto'));
                echo    '</div>';
                echo '</div>';

                // mensagem
                echo '<div class="form-group">';
                echo form_label('Mensagem', 'editor', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                
                ?>
                <div id="alerts"></div>
                <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                            <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                            <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
                    </div>
                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
                        <div class="dropdown-menu input-append">
                            <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
                            <button class="btn" type="button">Add</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>
                    </div>
                </div>
                <div id="editor"></div>
                <input type="hidden" id="mensagem" name="mensagem">
                
                <?php                
                
                echo    '</div>';
                echo '</div>';
                
                // id_bairro
                echo '<div class="form-group">';
                echo    '<label for="id_bairro" class="col-lg-3 control-label">Bairro</label>';
                echo    '<div class="col-lg-9">';
                echo        '<select id="id_bairro" name="id_bairro" class="col-lg-9">';
                echo            '<option value=""> - Todos os bairros - </option>';
                foreach ($bairros as $bairro)
                {
                    echo        '<option value="'.$bairro->id.'" '.set_select('id_bairro', $bairro->id, $bairro->id==$requerimento->id_bairro).'>'.$bairro->nome.'</option>';
                }
                echo        '</select>';
                echo    '</div>';
                echo '</div>';
                
                echo '<div class="form-group">';
                echo form_label('', '', array('class' => 'col-lg-3 control-label'));
                echo    '<div class="col-lg-9">';
                echo        form_submit('submit', 'Criar newsletter', 'class="btn btn-primary"');
                echo    '</div>';
                echo '</div>';

                echo form_close();
                ?>

                </div><!-- End .panel-body -->
           </div><!-- End .widget -->
       </div><!-- End .col-lg-6  -->
       
<!--       <script src="<?php echo base_url(); ?>js/maps/raphael.js" charset="utf-8" ></script>
       <script src="<?php echo base_url(); ?>js/maps/jquery.mapael.js" charset="utf-8" ></script>
       <script src="<?php echo base_url(); ?>js/maps/cidade.js" charset="utf-8" ></script>
       <script src="<?php echo base_url(); ?>js/maps/newsletters_por_bairro.js" charset="utf-8" ></script>

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
       </div>-->

    </div><!-- End .row-fluid  -->
</div>

<script>
    $('#editor').wysiwyg();
    
    $('#form').submit(function() {
        $('#mensagem').val($('#editor').html())
    });
</script>
