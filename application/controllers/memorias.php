<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Memorias extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();      
        $this->load->model('memorias_model');
    }

    public function index()
    {
        $this->lista_memorias();
    }

    public function lista_memorias()
    {
        $this->pagination->initialize(array(
            'base_url' => base_url().'memorias/lista_memorias',
            'total_rows' => $this->db->get('memorias')->num_rows()
        ));
        
        $this->data['paginacao'] = $this->pagination->create_links();
        $this->memorias_model->limit(ITENS_POR_PAGINA, $this->uri->segment(3));
        $this->data['memorias'] = $this->memorias_model->get_all();

        $this->load_view('memorias/lista_memorias');
    }

    public function adicionar_memoria()
    {
        $this->form_validation->set_rules($this->memorias_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','horario','local','pauta','participantes','principais_topicos','decisoes'),$this->input->post());
            $data['quando'] = $this->form_validation->convert_human_to_sql($_POST['quando']);
            
            $this->memorias_model->insert($data);                        
            $this->session->set_userdata('memoria_adicionada','Memória adicionada com sucesso!');            
            redirect('memorias/adicionar_memoria');     
        endif;
        
        $this->load_view('memorias/adicionar_memoria');
    }

    public function editar_memoria()
    {
        $id = $this->uri->segment(3);

        $this->form_validation->set_rules($this->memorias_model->validation);
        
        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','horario','local','pauta','participantes','principais_topicos','decisoes'),$this->input->post());
            $data['quando'] = $this->form_validation->convert_human_to_sql($_POST['quando']);            
            
            $this->memorias_model->update($this->input->post('id'), $data);
            $this->session->set_userdata('memoria_editada','Memória editada com sucesso!');
            redirect('memorias/editar_memoria/'.$this->input->post('id'));   
        endif;
        
        $this->data['memorias'] = $this->memorias_model->get($id);

        $this->load_view('memorias/editar_memoria');
    }

    public function excluir_memoria()
    {
        $id = $this->uri->segment(3);
        
        $this->memorias_model->delete($id);
        $this->session->set_userdata('memoria_excluida','Memória excluída com sucesso!');
        redirect('memorias/lista_memorias');
    }
}