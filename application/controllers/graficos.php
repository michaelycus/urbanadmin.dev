<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graficos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('requerimento_model');
        $this->load->model('bairros_model');
    }

    public function populacao_por_bairro()
    {
        $this->load_view('graficos/populacao_por_bairro');
    }
    
    public function requerimentos_por_bairro()
    {
        $this->load_view('graficos/requerimentos_por_bairro');
    }
    
    public function requerimentos_por_tipo()
    {
        $this->load_view('graficos/requerimentos_por_tipo');
    }
    
    public function requerimentos_por_vereador()
    {
        $this->load_view('graficos/requerimentos_por_vereador');
    }

    public function gerar()
    {
        $this->data['bairros'] = $this->bairros_model->get_all();
        $this->data['requerimentos_bairro'] = $this->requerimento_model->count_requerimentos_with_bairros();
        
        $this->load_view('graficos/gerar');
    }
}