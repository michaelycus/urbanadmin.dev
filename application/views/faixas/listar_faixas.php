<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-paragraph-justify-3"></i> Faixas</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="text-left">
                <?php echo anchor('faixas/cadastrar_faixa', '<strong><i class="icon20  i-plus-circle"></i> Cadastrar faixa</strong>', 'class="btn btn-success"'); ?>
            </div>
        </div>        
    </div>
    
    <div class="row">

        <?php
        echo validation_errors('<div class="alert alert-error">','</div>');
        if ($this->session->userdata('faixa_excluida'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('faixa_excluida') .'</div>';
            $this->session->unset_userdata('faixa_excluida');
        }
        if ($this->session->userdata('faixa_cadastrada'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('faixa_cadastrada') .'</div>';
            $this->session->unset_userdata('faixa_cadastrada');
        }

        $tmpl = array(
            'table_open' => '<table cellpadding="0" cellspacing="0" border="0"
                              class="table table-striped table-bordered table-hover" id="dataTable">',
            'table_close' => '</table>'
        );

        $this->table->set_template($tmpl);
        $this->table->set_heading('Bairro', 'Rua', 'Altura', 'Referência','');

        if (!empty($faixas))
        {
            foreach ($faixas as $faixa):
                $this->table->add_row(array('data'=>'<span class="location">'. $faixa->nome_bairro .'</span>'),
                                      array('data'=>$faixa->nome_rua),
                                      array('data'=>$faixa->altura),
                                      array('data'=>$faixa->referencia),
                                      array('data'=>anchor('faixas/editar_faixa/'.$faixa->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-block btn-primary btn-xs')).' '.
                                                    anchor('faixas/excluir_faixa/'.$faixa->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirmdelete btn btn-block btn-danger btn-xs')), 'style'=>'width:100px'));
            endforeach;
        }

        echo $this->table->generate();
        ?>

    </div> 
</div>