<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graficos_Customizados extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('requerimento_model');
    }
    
    public function index()
    {
        $this->listar_graficos();
    }
    
    public function criar_grafico()
    {
        $this->load_view('graficos_customizados/criar_grafico', TRUE);
    }
    
    public function listar_graficos()
    {
        $this->load_view('graficos_customizados/listar_graficos', TRUE);
    }
}