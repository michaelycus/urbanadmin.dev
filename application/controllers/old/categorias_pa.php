<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias_pa extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('categorias_pa_model');
    }

    public function index()
    {
        $this->lista_categorias();
    }
    
    public function lista_categorias()
    {
        $this->data['categorias'] =  $this->categorias_pa_model->get_all();
        
        $this->load_view('categorias_pa/lista_categorias');
    }

    public function adicionar_categoria()
    {
        $this->form_validation->set_rules($this->categorias_pa_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('titulo'),$this->input->post());
            
            $this->categorias_pa_model->insert($data);            
            $this->session->set_userdata('categoria_adicionada','Categoria adicionada com sucesso!');
            redirect('categorias_pa/adicionar_categoria');
        endif;
        
        $this->load_view('categorias_pa/adicionar_categoria');
    }

    public function editar_categoria()
    {
        $id = $this->uri->segment(3);

        $this->form_validation->set_rules($this->categorias_pa_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('titulo'), $this->input->post());
            
            $this->categorias_pa_model->update($this->input->post('id'), $data);            
            $this->session->set_userdata('categoria_editada','Categoria editada com sucesso!');
            redirect('categorias_pa/editar_categoria/'.$this->input->post('id'));
        endif;
        
        $this->data['categoria'] =  $this->categorias_pa_model->get_categoria($id);
        
        $this->load_view('categorias_pa/editar_categoria');
    }

    public function excluir_categoria()
    {
        $id = $this->uri->segment(3);

        $this->categorias_pa_model->delete($id);        
        $this->session->set_userdata('categoria_excluida','Categoria excluída com sucesso!');
        redirect('categorias_pa/lista_categorias');
    }
}