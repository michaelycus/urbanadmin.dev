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
        
        if ( (!isset($_SESSION['cpf']) && !isset($_SESSION['id_facebook'])) && !in_array(uri_string(), $no_redirect))
//        if ( (!isset($_SESSION['cpf']) || !isset($_SESSION['id_facebook'])) && (!in_array(uri_string(), $no_redirect ) ))
        {
            if ( !startsWith(uri_string(), 'requerimentos/visualizar_requerimento') &&
                 !startsWith(uri_string(), 'requerimentos/imprimir_requerimento') &&
                 !startsWith(uri_string(), 'requerimentos/informar_resultado') &&
                 !startsWith(uri_string(), 'requerimentos/resultado_informado') &&
                 !startsWith(uri_string(), 'graficos_customizados/incorporar') &&
                 !startsWith(uri_string(), 'newsletters/descadastrar') &&
                 
                 !startsWith(uri_string(), 'faixas') && // experimental
                 !startsWith(uri_string(), 'faixas/listar_faixas') && // experimental
                 !startsWith(uri_string(), 'faixas/editar_faixa') &&
                 !startsWith(uri_string(), 'faixas/excluir_faixa') &&
                 !startsWith(uri_string(), 'faixas/cadastrar_faixa') &&
                 !startsWith(uri_string(), 'ruas/get_ruas_ajax') &&
                    
                 !startsWith(uri_string(), 'requerimentos/relatorio_por_mes') )
            redirect('login');
        }

        if ( !$this->input->is_ajax_request())
        {
//            $this->output->enable_profiler(ENVIRONMENT == 'development');
//            $this->output->enable_profiler(TRUE);
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
    
    public function load_config_view ($subview)
    {
        // Redireciona usuários operadores instrusos
        if ( $_SESSION['autorizacao']==AUTORIZACAO_OPERADOR)
        {
            redirect('requerimentos/meus_requerimentos');
        }
        $this->data['subview'] = $subview;
        $this->load->view('layouts/layout_config', $this->data);
    }

    public function load_front_view ($view)
    {
        $this->load->view($view, $this->data);
    }
    
    // Experimental
    public function load_view_faixas ($subview)
    {
        $this->data['subview'] = $subview;
        $this->load->view('faixas/layout', $this->data);
    }
}