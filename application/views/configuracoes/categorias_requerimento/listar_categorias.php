<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-tag-3"></i> Listar categorias</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="text-left">
                <?php echo anchor('configuracoes/categorias_requerimento/cadastrar_categoria', '<strong><i class="icon20  i-plus-circle"></i> Cadastrar Categoria</strong>', 'class="btn btn-success"'); ?>
            </div>
        </div>        
    </div>

    <div class="row">
        <!-- Start page from here  -->

        <?php
        $tmpl = array(
            'table_open' => '<table cellpadding="0" cellspacing="0" border="0"
                              class="table table-striped table-bordered table-hover" id="categorias">',
            'table_close' => '</table>'
        );

        echo validation_errors('<div class="alert alert-error">','</div>');
        if ($this->session->userdata('categoria_excluida'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('categoria_excluida') .'</div>';
            $this->session->unset_userdata('categoria_excluida');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('','Categoria', 'Descrição', 'Secretaria', '');

        if (!empty($categorias))
        {
            foreach ($categorias as $categoria):
                $this->table->add_row(array('data'=>'<div style="display:none;">'. ( $categoria->ordem < 10 ? '0' : ''). $categoria->ordem.'</div>'.                                                                            
                                                    anchor('configuracoes/categorias_requerimento/diminuir_ordem/'.$categoria->id,'<i class="i-arrow-up-2"></i>') .' '.
                                                    anchor('configuracoes/categorias_requerimento/aumentar_ordem/'.$categoria->id,'<i class="i-arrow-down-2"></i>'), 'style'=>'width:35px'),
                                      array('data'=>'<small><strong>'.$categoria->nome.'</strong>'.'</small>'),
                                      array('data'=>'<small>'.$categoria->descricao.'</small>'),
                                      array('data'=>'<small>'. $categoria->nome_secretaria .'</small>'),                                      
                                      array('data'=>anchor('configuracoes/categorias_requerimento/editar_categoria/'.$categoria->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-primary btn-xs')).' '.
                                                    anchor('configuracoes/categorias_requerimento/excluir_categoria/'.$categoria->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirm_delete btn btn-danger btn-xs')), 'style'=>'width:150px'));
            endforeach;

           echo $this->table->generate();
        }
        else
        {
            echo '<div class="alert alert-info">Nenhuma categoria cadastrada!</div>';
        }
        ?>

    </div><!-- End .row-fluid  -->
</div>