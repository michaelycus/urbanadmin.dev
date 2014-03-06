<?php
class MY_Controller extends CI_Controller
{
    public $data = array();

    function __construct()
    {
        parent::__construct();

        session_start();

        // Check authentication
        $no_redirect = array('login_view', 'login', 'login/cadastrar_requerente', 'login/resetar_senha', 'some/controller');
        
        if ( !isset($_SESSION['cpf']) && (!in_array(uri_string(), $no_redirect ) ))                
        {
            if ( !startsWith(uri_string(), 'graficos_customizados/incorporar') )
            redirect('login');
        }

        if ( !$this->input->is_ajax_request())
        {
//            $this->output->enable_profiler(ENVIRONMENT == 'development');
        }
    }

    /**
     * Set subview and load layout
     * @param type $subview
     */
    public function load_view ($subview, $restricted=FALSE)
    {
        // Redireciona usuários operadores instrusos
        if ( $_SESSION['autorizacao']==AUTORIZACAO_OPERADOR && $restricted)
        {
            redirect('requerimentos/meus_requerimentos');
        }
        $this->data['subview'] = $subview;
        $this->load->view('layouts/layout', $this->data);
    }

    public function load_front_view ($view)
    {
        $this->load->view($view, $this->data);
    }
}