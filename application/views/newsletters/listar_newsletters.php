<div class="container-fluid">
    <div id="heading" class="page-header">
        <h1><i class="icon20 i-list"></i> Listar newsletters</h1>
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
        if ($this->session->userdata('newsletter_enviada'))
        {
            echo '<div class="alert alert-success">'. $this->session->userdata('newsletter_enviada') .'</div>';
            $this->session->unset_userdata('newsletter_enviada');
        }

        $this->table->set_template($tmpl);
        $this->table->set_heading('Assunto', 'Bairro', 'Enviado em','');

        if (!empty($newsletters))
        {
            foreach ($newsletters as $newsletter):

                $this->table->add_row(array('data'=>'<small>'. anchor('newsletters/visualizar/'.$newsletter->id, $newsletter->assunto) .'</strong>'.'</small>'),
                                      array('data'=>'<small>'.$newsletter->nome_bairro.'</small>'),
                                      array('data'=>'<small>'. (startsWith($newsletter->data_envio, '000') ? '' : $this->form_validation->convert_sql_to_human($newsletter->data_envio)) .'</small>'),
                                      array('data'=>anchor('newsletters/editar_newsletter/'.$newsletter->id,'<i class="icon-edit"></i> Editar ', array('class' => 'btn btn-block btn-primary btn-xs')).' '.
                                                    anchor('newsletters/excluir_newsletter/'.$newsletter->id,' <i class="icon-trash"></i> Excluir',array('class' => 'confirmdelete btn btn-block btn-danger btn-xs')), 'style'=>'width:100px'));
            endforeach;

           echo $this->table->generate();
        }
        else
        {
            echo '<div class="alert alert-info">Nenhuma newsletter enviada!</div>';
        }
        ?>

    </div><!-- End .row-fluid  -->
</div>