<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Newsletter extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('bairro_model');
    }
    
    function compor_mensagem()
    {
        $this->data['bairros'] = $this->bairro_model->get_bairros();
        
        $this->load_view('newsletter/compor_mensagem', TRUE);
    }

    function enviar_newsletter()
    {
        
    }
}