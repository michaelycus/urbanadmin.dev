<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ruas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bairros_model');
        $this->load->model('ruas_model');
        $this->load->model('cidades_model');
    }

    public function index()
    {
        $this->listar_ruas();
    }
    
    public function listar_ruas()
    {
        $this->ruas_model->order_by('nome');
        $this->data['ruas'] = $this->ruas_model->get_all();
        
        $this->load_config_view('configuracoes/ruas/listar_ruas');
    }
    
//    public function editar_rua()
//    {
//        $this->data['ruas'] = $this->cidades_model->get_ruas();
//        $this->data['bairros'] = $this->bairros_model->get_bairros();
//        
//        $this->load_config_view('bairros/editar_rua');
//    }
    
    public function salvar_edicao()
    {        
        // deletando rua
        $this->cidades_model->delete_rua_from_bairro($this->input->post('rua'));
        
        // inserindo novos bairros
        $this->cidades_model->insert_rua_bairros($this->input->post('rua'), 
                                                 $this->input->post('bairros'));
        
        echo json_encode('Edição de bairros realizada com sucesso!');
    }
    
    public function cadastrar_rua()
    {
        $this->form_validation->set_rules($this->cidades_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome'),$this->input->post());

            $this->cidades_model->insert_rua($data);
            
            $this->session->set_userdata('rua_cadastrada','Rua cadastrada com sucesso!');            
            
            redirect('configuracoes/ruas/cadastrar_rua');
        endif;
        
        $this->load_config_view('configuracoes/ruas/cadastrar_rua');
    }
    
    public function editar_rua($id)
    {
        $this->form_validation->set_rules($this->bairros_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome'),$this->input->post());

            $this->bairros_model->update($this->input->post('id'), $data);
            $this->session->set_userdata('bairro_editado','Bairro editado com sucesso!');
            generate_charts();

            redirect('configuracoes/bairros/editar_bairro/'.$this->input->post('id'));
        endif;

        if ($this->input->post('id')!=NULL)
            $id = $this->input->post('id');

        $this->data['bairro'] = $this->bairros_model->get($id);

        $this->load_config_view('configuracoes/bairros/editar_bairro');
    }
    
    public function excluir_rua($id)
    {
        $this->cidades_model->delete_rua($id);
        
        $this->session->set_userdata('rua_excluida','Rua excluída com sucesso!');
        redirect('bairros/editar_rua', TRUE);
    }
}