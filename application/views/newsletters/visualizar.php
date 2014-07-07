<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-newspaper"></i> Visualizar newsletter</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <?php
                    echo '<h3>Assunto: <em>'. $newsletter->assunto .'</em></h3>';
                    
                    echo '<iframe width="600" height="600" src="'. base_url() . 'newsletters/preview/'. $newsletter->id .'" frameborder="1"></iframe>';
                    ?>
                
                </div><!-- End .panel-body -->
           </div><!-- End .widget -->
       </div><!-- End .col-lg-6  -->
    </div><!-- End .row-fluid  -->
</div>

<?php

echo '<div class="form-group">';
echo        '<div class="pad-left15">';
echo        anchor('newsletters/enviar_newsletter/'.$newsletter->id,' Enviar newsletter ', array('class' => 'btn btn-success confirm_newsletter')). ' ';
echo        anchor('newsletters/editar_newsletter/'.$newsletter->id,' Editar newsletter ', array('class' => 'btn btn-primary'));
echo        '</div>';
echo '</div>';
                
?>