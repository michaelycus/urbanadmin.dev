<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bairros extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();      
        $this->load->model('bairros_model');
    }

    public function index()
    {
        $this->listar_bairros();
    }

    public function listar_bairros()
    {
        $this->data['bairros'] = $this->bairros_model->get_bairros();

        $this->load_view('bairros/listar_bairros', TRUE);
    }

    public function cadastrar_bairro()
    {
        $this->form_validation->set_rules($this->bairros_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','descricao','nome_presidente','telefone_presidente',
                                   'endereco_presidente','email_presidente',
                                   'populacao'),$this->input->post());
            
            $this->bairros_model->insert($data);                  
            generate_charts();
            $this->session->set_userdata('bairro_cadastrado','Bairro cadastrado com sucesso!');            
            redirect('bairros/cadastrar_bairro');     
        endif;
        
        $this->load_view('bairros/cadastrar_bairro', TRUE);
    }

    public function editar_bairro($id)
    {
        $this->form_validation->set_rules($this->bairros_model->validation);
        
        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','descricao','nome_presidente','telefone_presidente','endereco_presidente','email_presidente','populacao'),$this->input->post());
            
            $this->bairros_model->update($this->input->post('id'), $data);
            $this->session->set_userdata('bairro_editado','Bairro editado com sucesso!');
            generate_charts();
            
            redirect('bairros/editar_bairro/'.$this->input->post('id'));   
        endif;
        
        if ($this->input->post('id')!=NULL)
            $id = $this->input->post('id');
        
        $this->data['bairro'] = $this->bairros_model->get($id);

        $this->load_view('bairros/editar_bairro', TRUE);
    }

    public function excluir_bairro($id)
    {   
        if ($_SESSION['autorizacao']==AUTORIZACAO_ADMINISTRADOR)
        {
            $this->bairros_model->delete($id);
            generate_charts();

            $this->session->set_userdata('bairro_excluido','Bairro excluído com sucesso!');
            redirect('bairros/listar_bairros', TRUE);
        }        
    }
}