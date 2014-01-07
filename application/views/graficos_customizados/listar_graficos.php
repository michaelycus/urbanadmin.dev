<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-list-2"></i> Listar gráficos</h1>
    </div>

    <div class="row">
        <!-- Start page from here  -->        
        
        <?php
        $tmpl = array(
            'table_open' => '<table cellpadding="0" cellspacing="0" border="0" 
                              class="table table-striped table-bordered table-hover" id="table-graficos">',
            'table_close' => '</table>'
        );

        echo validation_errors('<div class="alert alert-error">','</div>');
        if ($this->session->userdata('grafico_excluido'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('grafico_excluido') .'</div>';
            $this->session->unset_userdata('grafico_excluido');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('Título', 'Requerente', '');

        if (!empty($charts))
        {
            foreach ($charts as $chart):
                
                switch ($chart->tipo)
                {
                    case TIPO_GRAFICO_MAPA:
                        $icon = 'i-map-4';
                        break;
                    
                    case TIPO_GRAFICO_BARRAS:
                        $icon = 'i-bars';
                        break;

                    default:
                        break;
                }
                
                $this->table->add_row(array('data'=>'<small><strong><i class="icon24 '. $icon .' blue"></i> '.$chart->titulo.'</strong>'.'</small>'),
                                      array('data'=>'<small>'.$chart->nome_requerente.'</small>'),
                                      array('data'=>'<div style="display:none;">'.$chart->data.'</div>'.
                                                    anchor('graficos_customizados/visualizar_grafico/'.$chart->id,'<i class="icon-search"></i> Visualizar ', array('class' => 'btn btn-block btn-warning btn-xs')).' '.                                          
                                                    anchor('graficos_customizados/editar_grafico/'.$chart->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-block btn-primary btn-xs')).' '.
                                                    anchor('graficos_customizados/excluir_grafico/'.$chart->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn btn-block btn-danger btn-xs')), 'style'=>'width:100px'));
            endforeach;

           echo $this->table->generate();
        }
        else
        {
            echo '<div class="alert alert-info">Nenhum gráfico cadastrado!</div>';
        }
        ?>

    </div><!-- End .row-fluid  -->
</div> 
    