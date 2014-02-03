<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contatos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('contato_model');
    }

    public function index()
    {
        $this->listar_contatos();
    }

    public function cadastrar_contato()
    {
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|max_length[255]');

        if ($this->input->post('id_bairro') == 0 || $this->input->post('id_bairro') == 100)
            $this->form_validation->set_rules('endereco', 'ENDERECO', 'required');

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','id_bairro','endereco','telefone','email'),$this->input->post());
            $data['data_cadastro'] = date('Y-m-d');

            $this->contato_model->insert($data);

            $this->session->set_userdata('contato_cadastrado','Contato cadastrado com sucesso!');
            redirect('contatos/cadastrar_contato');
        endif;

        $this->load->model('bairros_model');
        $this->data['bairros'] = $this->bairros_model->get_bairros();

        $this->load_view('contatos/cadastrar_contato', TRUE);
    }

    public function editar_contato($id)
    {
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|max_length[255]');

        if ($this->input->post('id_bairro') == 0 || $this->input->post('id_bairro') == 100)
            $this->form_validation->set_rules('endereco', 'ENDERECO', 'required');

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','id_bairro','endereco','telefone','email'),$this->input->post());

            $this->contato_model->update($id, $data);

            $this->session->set_userdata('contato_editado','Contato editado com sucesso!');
            redirect('contatos/editar_contato/'.$id);
        endif;

        $this->load->model('bairros_model');
        $this->data['bairros'] = $this->bairros_model->get_bairros();

        $this->data['contato'] = $this->contato_model->get($id);

        $this->load_view('contatos/editar_contato', TRUE);
    }

    public function excluir_contato($id)
    {
        if ($_SESSION['autorizacao']==AUTORIZACAO_ADMINISTRADOR)
        {
            $this->contato_model->delete($id);

            $this->session->set_userdata('contato_excluido','Contato excluído com sucesso!');
            redirect('contatos/listar_contatos');
        }
    }

    public function listar_contatos()
    {
        $this->load->model('requerente_model');
        
        $this->data['contatos'] = $this->contato_model->get_contatos_with_bairros();
        $this->data['requerentes'] = $this->requerente_model->get_requerentes_with_bairros();

        $this->load_view('contatos/listar_contatos', TRUE);
    }
}