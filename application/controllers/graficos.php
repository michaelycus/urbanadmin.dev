<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graficos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('requerimento_model');
        $this->load->model('bairros_model');
//        $this->load->model('cidades_model');
//        $this->load->model('requerente_model');
    }

    public function index()
    {
        $this->listar_requerimentos();
    }

    public function requerimentos_por_bairro()
    {
        $this->data['teste'] = $this->requerimento_model->count_requerimentos_with_bairros();

        $this->load_view('graficos/requerimentos_por_bairro');
    }

    public function gerar()
    {
        $this->data['bairros'] = $this->bairros_model->get_all();
        
        $this->load_view('graficos/gerar');
    }

    public function excluir_requerimento()
    {
        $id = $this->uri->segment(3);

        $this->memorias_model->delete($id);
        $this->session->set_userdata('memoria_excluida','Memória excluída com sucesso!');
        redirect('memorias/lista_memorias');
    }
}