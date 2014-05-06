<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias_requerimento extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('categorias_requerimento_model');
        $this->load->model('secretarias_model');
    }

    public function index()
    {
        $this->listar_categorias();
    }

    public function listar_categorias()
    {
        $this->data['categorias'] = $this->categorias_requerimento_model->get_categorias_with_secretarias();

        $this->load_config_view('configuracoes/categorias_requerimento/listar_categorias');
    }

    public function cadastrar_categoria()
    {
        $this->form_validation->set_rules($this->categorias_requerimento_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','descricao','id_secretaria'),$this->input->post());
        
            $this->db->select_max('ordem');
            $data['ordem'] = $this->db->get('categorias_requerimento')->row()->ordem + 1;
            
            $secretarias = $this->input->post('secretarias');
            $next_id = $this->categorias_requerimento_model->get_next_id();
            $this->categorias_requerimento_model->relacao_secretarias($next_id, $secretarias);

            $this->categorias_requerimento_model->insert($data);
            
            $this->session->set_userdata('categoria_cadastrada','Categoria cadastrada com sucesso!');
            redirect('configuracoes/categorias_requerimento/cadastrar_categoria');
        endif;
        
        $this->data['secretarias'] = $this->secretarias_model->get_all();

        $this->load_config_view('configuracoes/categorias_requerimento/cadastrar_categoria');
    }

    public function editar_categoria($id)
    {
        $this->form_validation->set_rules($this->categorias_requerimento_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','descricao','id_secretaria'),$this->input->post());
        
            $secretarias = $this->input->post('secretarias');            
            $this->categorias_requerimento_model->relacao_secretarias($this->input->post('id'), $secretarias);

            $this->categorias_requerimento_model->update($this->input->post('id'), $data);
            $this->session->set_userdata('categoria_editada','Categoria editada com sucesso!');

            redirect('configuracoes/categorias_requerimento/editar_categoria/'.$this->input->post('id'));
        endif;

        if ($this->input->post('id')!=NULL)
            $id = $this->input->post('id');

        $this->data['categoria'] = $this->categorias_requerimento_model->get($id);
        $this->data['secretarias'] = $this->secretarias_model->get_all();
        $this->data['secretarias_sel'] = $this->categorias_requerimento_model->get_secretarias_by_categoria($id);

        $this->load_config_view('configuracoes/categorias_requerimento/editar_categoria');
    }

    public function excluir_categoria($id)
    {
        if ($_SESSION['autorizacao']==AUTORIZACAO_ADMINISTRADOR)
        {
            $this->categorias_requerimento_model->delete($id);
            
            $this->categorias_requerimento_model->reordenar();

            $this->session->set_userdata('categoria_excluida','Categoria excluída com sucesso!');
            redirect('configuracoes/categorias_requerimento/listar_categorias');
        }
    }
    
    public function diminuir_ordem($id)
    {
        $this->categorias_requerimento_model->diminuir_ordem($id);
        
        redirect('configuracoes/categorias_requerimento/listar_categorias');
    }
    
    public function aumentar_ordem($id)
    {
        $this->categorias_requerimento_model->aumentar_ordem($id);
        
        redirect('configuracoes/categorias_requerimento/listar_categorias');
    }    
}