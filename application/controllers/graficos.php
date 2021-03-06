<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graficos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('requerimento_model');
        $this->load->model('bairro_model');
        $this->load->model('categoria_requerimento_model');
        $this->load->model('requerente_model');
        $this->load->model('secretaria_model');
        $this->load->model('newsletter_model');
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
        $this->data['cats_requerimento'] = $this->categoria_requerimento_model->order_by('ordem')->get_all();
        $this->load_view('graficos/requerimentos_por_tipo', TRUE);
    }
    
    public function requerimentos_por_secretaria()
    {
        $this->data['secretarias'] = $this->secretaria_model->get_all();
        $this->load_view('graficos/requerimentos_por_secretaria', TRUE);
    }
    
    public function requerimentos_por_situacao()
    {
        $this->data['status'] = array('Em análise', 'Analisados', 'Protocolados', 'Concluídos', 'Sessão');
        $this->load_view('graficos/requerimentos_por_situacao', TRUE);
    }

    public function requerimentos_por_vereador()
    {
        $this->data['vereadores'] = $this->requerente_model->get_vereadores();
        $this->load_view('graficos/requerimentos_por_vereador', TRUE);
    }
    
    public function newsletters_por_bairro()
    {
        $this->data['newsletters'] = $this->newsletter_model->get_all();
        $this->load_view('graficos/newsletters_por_bairro', TRUE);
    }
    
    public function gerar()            
    {
        generate_charts();
    }
}