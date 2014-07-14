<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-road"></i> Editar rua</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <?php
                    $id = $this->uri->segment(4);

                    if ($id==NULL && $rua==NULL) redirect('ruas');
                
                    echo form_open('configuracoes/ruas/editar_rua/'.$id, 'role="form" class="form-horizontal"');
                    
                    if ($this->session->userdata('rua_editada'))
                    {
                        echo '<div class="alert alert-success">'. $this->session->userdata('rua_editada') .'</div>';
                        $this->session->unset_userdata('rua_editada');
                    }
                    
                    // nome
                    echo '<div class="form-group">';
                    echo form_label('Nome', 'nome', array('class' => 'col-lg-2 control-label'));
                    echo    '<div class="col-lg-10">';
                    echo    form_input(array('name' => 'nome','id' => 'nome',
                                'class' => 'form-control','autofocus' => 'autofocus'), set_value('nome', $rua->nome));
                    echo    '</div>';
                    echo '</div>';

                    // lei_decreto
                    echo '<div class="form-group">';
                    echo form_label('Decreto de lei', 'lei_decreto', array('class' => 'col-lg-2 control-label'));
                    echo    '<div class="col-lg-10">';
                    echo    form_input(array('name' => 'lei_decreto','id' => 'lei_decreto',
                                'class' => 'form-control'), set_value('lei_decreto', $rua->lei_decreto));
                    echo    '</div>';
                    echo '</div>';

                    echo '<div class="form-group">';
                    foreach ($bairros as $bairro)
                    {
                        $select = FALSE;
                        foreach($bairros_selecionados as $b_s)
                        {
                            if ($bairro->id == $b_s->id_bairro)
                                $select = TRUE;
                        }
                        $data = array(
                        'name'        => 'bairros[]',
                        'checked'     => $select,
                        'value'       => $bairro->id,
//                        'class'       => 'multiselect',
                        'class'       => 'control-label',
                        );

                        
                        echo '<div class="col-lg-3">';
                        echo    '<div class="col-lg-12 pad-top15">';
                        echo        form_checkbox($data) . ' ' . $bairro->nome;
                        echo    '</div>';
//                        echo    '<label class="col-lg-8 control-label" for="bairro_'.$bairro->codename.'">'.$bairro->nome.'</label>';
                        echo '</div>';
                    }
                    echo '</div>';
                    
                    echo form_hidden('id', $id);

                    echo '<div class="form-group">';                    
                    echo    '<div class="pad-left15">';
                    echo        form_submit('submit', 'Editar rua', 'class="btn btn-primary"');
                    echo    '</div>';                    
                    echo '</div>';

                    echo form_close();
                    
                    ?>   
                    
                </div>
            </div>
        </div>

    </div><!-- End .row-fluid  -->    
    
</div>
