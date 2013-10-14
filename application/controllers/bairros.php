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
//        $this->pagination->initialize(array(
//            'base_url' => base_url().'bairros/listar_bairros',
//            'total_rows' => $this->db->get('bairros')->num_rows()
//        ));
        
//        $this->data['paginacao'] = $this->pagination->create_links();
//        $this->bairros_model->limit(ITENS_POR_PAGINA, $this->uri->segment(3));
        $this->data['bairros'] = $this->bairros_model->get_all();

        $this->load_view('bairros/listar_bairros');
    }

    public function cadastrar_bairro()
    {
        $this->form_validation->set_rules($this->bairros_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','descricao','nome_presidente','telefone_presidente',
                                   'endereco_presidente','email_presidente',
                                   'populacao'),$this->input->post());
            
            $this->bairros_model->insert($data);                        
            $this->session->set_userdata('bairro_cadastrado','Bairro cadastrado com sucesso!');            
            redirect('bairros/cadastrar_bairro');     
        endif;
        
        $this->load_view('bairros/cadastrar_bairro');
    }

    public function editar_bairro()
    {
        $id = $this->uri->segment(3);

        $this->form_validation->set_rules($this->bairros_model->validation);
        
        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','descricao','nome_presidente','telefone_presidente','endereco_presidente','email_presidente','populacao'),$this->input->post());
            
            $this->bairros_model->update($this->input->post('id'), $data);
            $this->session->set_userdata('bairro_editado','Bairro editado com sucesso!');
            
            redirect('bairros/editar_bairro/'.$this->input->post('id'));   
        endif;
        
        if ($this->input->post('id')!=NULL)
            $id = $this->input->post('id');
        
        $this->data['bairro'] = $this->bairros_model->get($id);

        $this->load_view('bairros/editar_bairro');
    }

    public function excluir_bairro()
    {
        $id = $this->uri->segment(3);
        
        $this->bairros_model->delete($id);
        $this->session->set_userdata('bairro_excluido','Bairro excluído com sucesso!');
        redirect('bairros/listar_bairros');
    }
}