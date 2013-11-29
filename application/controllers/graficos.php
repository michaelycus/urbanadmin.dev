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
        // apagar
        $this->data['requerentes_bairro'] = $this->requerente_model->count_requerentes_por_bairro();

        $this->load_view('graficos/requerentes_por_bairro', TRUE);
    }

    public function requerimentos_por_bairro()
    {
        $this->load_view('graficos/requerimentos_por_bairro', TRUE);
    }

    public function requerimentos_por_tipo()
    {
        $this->data['cats_requerimento'] = $this->categorias_requerimento_model->get_all();
        $this->load_view('graficos/requerimentos_por_tipo', TRUE);
    }

    public function requerimentos_por_vereador()
    {
        $this->data['vereadores'] = $this->requerente_model->get_vereadores();
        $this->load_view('graficos/requerimentos_por_vereador', TRUE);
    }

    public function gerar()
    {
        $this->data['bairros'] = $this->bairros_model->get_all();
        $this->data['requerimentos_bairro'] = $this->requerimento_model->count_requerimentos_with_bairros();
        $this->data['cats_requerimento'] = $this->categorias_requerimento_model->get_all();
        $this->data['requerimentos_categoria'] = $this->requerimento_model->count_requerimentos_with_categorias();
        $this->data['vereadores'] = $this->requerente_model->get_vereadores();
        $this->data['requerimentos_vereadores'] = $this->requerimento_model->count_requerimentos_with_vereadores();
        $this->data['requerentes_bairro'] = $this->requerente_model->count_requerentes_por_bairro();

        $this->load_view('graficos/gerar', TRUE);
    }
}