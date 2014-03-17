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
    
    public function cadastrar_rua()
    {
        $this->form_validation->set_rules($this->ruas_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome', 'lei_decreto'),$this->input->post());
            $bairros = $this->input->post('bairros');
                    
            $this->ruas_model->insert_rua($data, $bairros);
            
            $this->session->set_userdata('rua_cadastrada','Rua cadastrada com sucesso!');            
            
            redirect('configuracoes/ruas/cadastrar_rua');
        endif;
        
        $this->data['bairros'] = $this->bairros_model->get_bairros();
        
        $this->load_config_view('configuracoes/ruas/cadastrar_rua');
    }
    
    public function editar_rua($id)
    {
        $this->form_validation->set_rules($this->ruas_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome', 'lei_decreto'),$this->input->post());

            $this->ruas_model->update($this->input->post('id'), $data);            
            
            // deletando rua
            $this->ruas_model->delete_rua_from_bairro($this->input->post('id'));

            // inserindo novos bairros
            $this->ruas_model->insert_rua_bairros($this->input->post('id'), 
                                                  $this->input->post('bairros'));
            
            $this->session->set_userdata('rua_editada','Rua editada com sucesso!');

            redirect('configuracoes/ruas/editar_rua/'.$this->input->post('id'));
        endif;

        if ($this->input->post('id')!=NULL)
            $id = $this->input->post('id');

        $this->data['rua'] = $this->ruas_model->get($id);        
        $this->data['bairros'] = $this->bairros_model->get_bairros();
        $this->data['bairros_selecionados'] = $this->bairros_model->get_bairro_by_rua($id);

        $this->load_config_view('configuracoes/ruas/editar_rua');
    }
    
    public function excluir_rua($id)
    {
        $this->ruas_model->delete($id);
        $this->ruas_model->delete_rua_from_bairro($id);
        
        $this->session->set_userdata('rua_excluida','Rua excluída com sucesso!');
        
        redirect('configuracoes/ruas/listar_ruas');
    }
    
    
//    public function salvar_edicao()
//    {        
//        // deletando rua
//        $this->cidades_model->delete_rua_from_bairro($this->input->post('rua'));
//        
//        // inserindo novos bairros
//        $this->cidades_model->insert_rua_bairros($this->input->post('rua'), 
//                                                 $this->input->post('bairros'));
//        
//        echo json_encode('Edição de bairros realizada com sucesso!');
//    }
//    
//    
//    
    
    
    
}