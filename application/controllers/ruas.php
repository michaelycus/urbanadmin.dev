<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ruas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bairro_model');
        $this->load->model('rua_model');
    }

    public function index()
    {
        $this->listar_ruas();
    }
    
    public function listar_ruas()
    {
        $this->rua_model->order_by('nome');
        $this->data['ruas'] = $this->rua_model->get_all();
        
        $this->load_config_view('configuracoes/ruas/listar_ruas');
    }
    
    public function cadastrar_rua()
    {
        $this->form_validation->set_rules($this->rua_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome', 'lei_decreto'),$this->input->post());
            $bairros = $this->input->post('bairros');
                    
            $this->rua_model->insert_rua($data, $bairros);
            
            $this->session->set_userdata('rua_cadastrada','Rua cadastrada com sucesso!');            
            
            redirect('configuracoes/ruas/cadastrar_rua');
        endif;
        
        $this->data['bairros'] = $this->bairro_model->get_bairros();
        
        $this->load_config_view('configuracoes/ruas/cadastrar_rua');
    }
    
    public function editar_rua($id)
    {
        $this->form_validation->set_rules($this->rua_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome', 'lei_decreto'),$this->input->post());

            $this->rua_model->update($this->input->post('id'), $data);            
            
            // deletando rua
            $this->rua_model->delete_rua_from_bairro($this->input->post('id'));

            // inserindo novos bairros
            $this->rua_model->insert_rua_bairros($this->input->post('id'), 
                                                  $this->input->post('bairros'));
            
            $this->session->set_userdata('rua_editada','Rua editada com sucesso!');

            redirect('configuracoes/ruas/editar_rua/'.$this->input->post('id'));
        endif;

        if ($this->input->post('id')!=NULL)
            $id = $this->input->post('id');

        $this->data['rua'] = $this->rua_model->get($id);        
        $this->data['bairros'] = $this->bairro_model->get_bairros();
        $this->data['bairros_selecionados'] = $this->bairro_model->get_bairro_by_rua($id);

        $this->load_config_view('configuracoes/ruas/editar_rua');
    }
    
    public function excluir_rua($id)
    {
        $this->rua_model->delete($id);
        $this->rua_model->delete_rua_from_bairro($id);
        
        $this->session->set_userdata('rua_excluida','Rua excluída com sucesso!');
        
        redirect('configuracoes/ruas/listar_ruas');
    }
    
    public function get_ruas_ajax($id_bairro)
    {                
        $ruas = $this->rua_model->get_ruas_by_bairro($id_bairro);

        if (empty($ruas))
            return '{ "nome": "Nenhuma rua encontrada" }';

        $arr_rua = array();

        foreach ($ruas as $rua)
        {
            $arr_rua[] = '{"id":' . $rua->id . ',"nome":"' . $rua->nome . '"}';
        }

        echo '[ ' . implode(",", $arr_rua) . ']';

        return;
    }
}