<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Secretarias extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('secretarias_model');
    }

    public function index()
    {
        $this->listar_secretarias();
    }

    public function listar_secretarias()
    {
        $this->data['secretarias'] = $this->secretarias_model->get_all();

        $this->load_config_view('configuracoes/secretarias/listar_secretarias');
    }

    public function cadastrar_secretaria()
    {
        $this->form_validation->set_rules($this->secretarias_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','sigla','descricao','email','telefone'),$this->input->post());

            $this->secretarias_model->insert($data);
            
            $this->session->set_userdata('secretaria_cadastrada','Secretaria cadastrada com sucesso!');
            redirect('configuracoes/secretarias/cadastrar_secretaria');
        endif;

        $this->load_config_view('configuracoes/secretarias/cadastrar_secretaria');
    }

    public function editar_secretaria($id)
    {
        $this->form_validation->set_rules($this->secretarias_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','sigla','descricao','email','telefone'),$this->input->post());

            $this->secretarias_model->update($this->input->post('id'), $data);
            $this->session->set_userdata('secretaria_editada','Secretaria editada com sucesso!');

            redirect('configuracoes/secretarias/editar_secretaria/'.$this->input->post('id'));
        endif;

        if ($this->input->post('id')!=NULL)
            $id = $this->input->post('id');

        $this->data['secretaria'] = $this->secretarias_model->get($id);

        $this->load_config_view('configuracoes/secretarias/editar_secretaria');
    }

    public function excluir_secretaria($id)
    {
        if ($_SESSION['autorizacao']==AUTORIZACAO_ADMINISTRADOR)
        {
            $this->secretarias_model->delete($id);

            $this->session->set_userdata('secretaria_excluida','Secretaria excluída com sucesso!');
            redirect('configuracoes/secretarias/listar_secretarias');
        }
    }
}