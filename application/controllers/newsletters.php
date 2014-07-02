<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Newsletters extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('newsletter_model');
        $this->load->model('bairro_model');
    }
    
    function compor_mensagem()
    {
        $this->data['bairros'] = $this->bairro_model->get_bairros();
        
        $this->load_view('newsletters/compor_mensagem', TRUE);
    }
    
    public function visualizar()
    {
        $data = elements(array('assunto','mensagem','id_bairro'),$this->input->post());
        $data['data_envio'] = date('Y-m-d H:i:s');

        $this->newsletter_model->insert($data);
        
        $this->data['newsletter'] = $this->newsletter_model->get_last();

        $this->session->set_userdata('newsletter_salva','Newsletter salva com sucesso!');
                
        $this->load_view('newsletters/visualizar', TRUE);
    }

    function enviar_newsletter($id)
    {
        $newsletter = $this->newsletter_model->get($id);
        
        send_newsletter($newsletter);
        
        $this->session->set_userdata('newsletter_enviada','Newsletter enviada com sucesso!');

        $this->load_view('requerentes/listar_newsletters', TRUE);
    }
    
    public function preview($id)
    {
        $data['mensagem'] = $this->newsletter_model->get($id)->mensagem;
        
        $this->load->view('newsletters/preview', $data);
    }
    
    public function listar_newsletters()
    {
        $this->data['newsletters'] = $this->newsletter_model->get_newsletters_with_bairros();
        
        $this->load_view('newsletters/listar_newsletters', TRUE);
    }
}