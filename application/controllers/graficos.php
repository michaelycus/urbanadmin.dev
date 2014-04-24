<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graficos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('requerimento_model');
        $this->load->model('bairros_model');
        $this->load->model('categorias_requerimento_model');
        $this->load->model('requerente_model');
    }

    public function populacao_por_bairro()
    {
        $this->load_view('graficos/populacao_por_bairro', TRUE);
    }

    public function requerentes_por_bairro()
    {
        $this->load_view('graficos/requerentes_por_bairro', TRUE);
    }

    public function requerimentos_por_bairro()
    {
        $this->load_view('graficos/requerimentos_por_bairro', TRUE);
    }

    public function requerimentos_por_tipo()
    {
        $this->data['cats_requerimento'] = $this->categorias_requerimento_model->order_by('ordem')->get_all();
        $this->load_view('graficos/requerimentos_por_tipo', TRUE);
    }

    public function requerimentos_por_vereador()
    {
        $this->data['vereadores'] = $this->requerente_model->get_vereadores();
        $this->load_view('graficos/requerimentos_por_vereador', TRUE);
    }
}