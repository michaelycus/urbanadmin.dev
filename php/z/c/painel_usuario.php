<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_cadastro extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();        
        
        $this->load->model('bairros_model');
    }

    public function index()
    {
        $this->load_front_view('painel_usuario/home');
    }
    
    public function listar_requerimentos()
    {
        $this->load_front_view('painel_usuario/cadastrar');
    }
    
    public function criar_requerimento()
    {
        $this->load_front_view('painel_usuario/criar_requerimento');
    }
    
    public function editar_configuracoes()
    {
        $this->load_front_view('painel_usuario/editar_configuracoes');
    }
}