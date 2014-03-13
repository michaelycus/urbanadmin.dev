<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="pt">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $chart->titulo; ?></title>
        
        <link href="<?php echo base_url(); ?>css/bootstrap/bootstrap.css" rel="stylesheet" />
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
        
        <script>
        function getURLParameter(name) {
            return decodeURI(
                    (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
            );
        }	

        $(document).ready(function(){		
            $(".desc").hide();

            if (getURLParameter("desc")=='yes')
            {	
                $(".desc").show();
            }
            if (getURLParameter("fullscreen")=='yes')
            {	                
                $("span.maximizer").hide();
            }
            
            $('img.max').hide();
            
            $('div#info').mouseenter(function() {
               $('img.max').show(150);
            });
            $('div#info').mouseleave(function() {
               $('img.max').hide(150);
            });
        });

        </script>
                       
    </head>
    <body>
        
        <!--<div class="row">-->            

            <?php
            echo '<h3>'.$titulo.'</h3>';
            $tmpl = array(
                'table_open' => '<table cellpadding="0" cellspacing="0" border="0"
                                  class="table table-striped table-bordered table-hover" id="table-requerimentos">',
                'table_close' => '</table>'
            );

            $this->table->set_template($tmpl);
            $this->table->set_heading('Bairro', "Requerimento", "Data", "Expediente");

            if (!empty($requerimentos))
            {
                foreach ($requerimentos as $requerimento):
                    $this->table->add_row(array('data'=>'<small>'.$requerimento->nome_bairro.'</small>'),
                                          array('data'=>'<small>'.$requerimento->descricao.'</small>'),
                                          array('data'=>'<small>'.$this->form_validation->convert_sql_to_human($requerimento->data_requerimento).'</small>'),
                                          array('data'=>'<small>'.$requerimento->expediente . '/' . $requerimento->ano_expediente.'</small>'));
                endforeach;

                echo $this->table->generate();
                
                echo '<p><strong>Total de Requerimentos: '. sizeof($requerimentos).'</strong></p>';
            }
            else
            {
                echo '<div class="alert alert-info">Nenhum requerimento cadastrado nesse período!</div>';
            }
            ?>
        
    </body>
</html>