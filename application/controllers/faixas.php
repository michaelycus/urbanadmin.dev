<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faixas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('faixa_model');
        $this->load->model('bairro_model');
        $this->load->model('rua_model');
    }

    public function index()
    {
        $this->listar_faixas();
    }

    public function cadastrar_faixa()
    {
        $this->form_validation->set_rules('id_bairro', 'BAIRRO', 'required');
        
        if ($this->form_validation->run()==TRUE):
            $data = elements(array('id_bairro','id_rua','altura','referencia'),$this->input->post());
            $data['data_cadastro'] = date('Y-m-d');

            $this->faixa_model->insert($data);

            $this->session->set_userdata('faixa_cadastrada','Faixa cadastrada com sucesso!');
            redirect('faixas/listar_faixas');
        endif;

        $this->data['bairros'] = $this->bairro_model->get_bairros();

        $this->load_view_faixas('faixas/cadastrar_faixa');
    }

    public function editar_faixa($id)
    {
        $this->form_validation->set_rules('id_bairro', 'BAIRRO', 'required');
        
        if ($this->form_validation->run()==TRUE):
            $data = elements(array('id_bairro','id_rua','altura','referencia'),$this->input->post());

            $this->faixa_model->update($id, $data);

            $this->session->set_userdata('faixa_editada','Faixa editada com sucesso!');
            redirect('faixas/editar_faixa/'.$id);
        endif;

        $this->data['bairros'] = $this->bairro_model->get_bairros();
        
        $this->data['faixa'] = $this->faixa_model->get($id);
        
        if ($this->data['faixa']->id_rua != 0)
            $this->data['ruas'] = $this->rua_model->get_ruas_by_bairro($this->data['faixa']->id_bairro);

        $this->load_view_faixas('faixas/editar_faixa');
    }

    public function excluir_faixa($id)
    {
        $this->faixa_model->delete($id);

        $this->session->set_userdata('faixa_excluida','Faixa excluída com sucesso!');
        redirect('faixas/listar_faixas');
    }

    public function listar_faixas()
    {
        $this->data['faixas'] = $this->faixa_model->get_faixas_with_info();

        $this->load_view_faixas('faixas/listar_faixas');
    }
}