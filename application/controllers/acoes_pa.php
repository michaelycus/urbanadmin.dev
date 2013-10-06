<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acoes_pa extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('acoes_pa_model');
    }

    public function index()
    {
        $this->lista_acoes();
    }

    public function lista_acoes()
    {
//        $id_plano = $this->uri->segment(3);
        
        echo 'ok dddd';
//        $this->db->where('id_plano_acao', $id_plano);
//        $this->data['acoes'] = $this->acoes_pa_model->get_acoes_with_usuarios();
//        $this->data['id_plano'] = $id_plano;

//        $this->load_view('acoes_pa/lista_acoes');
//         $this->load->view('acoes_pa/lista_acoes');
//         $this->load->view('acoes_pa/teste');
//         $this->load->view('acoes_pa/lista_acoes', $data);
    }
    
    public function teste ()
    {
        echo 'testeeeee ';
    }

    public function adicionar_acao()
    {
        $id_plano = $this->uri->segment(3);

        $this->form_validation->set_rules($this->acoes_pa_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('o_que','como','onde','delegado','id_nivel','materiais','id_plano_acao','id_responsavel'),$this->input->post());
            $data['data_acao'] = $this->form_validation->convert_human_to_sql($_POST['data_acao']);

            $this->acoes_pa_model->get($data);
        endif;

        $this->data['id_plano'] = $id_plano;
        $this->data['usuarios'] = $this->usuarios_model->get_all();

        $this->load_view('acoes_pa/adicionar_acao');
    }

    public function editar_acao()
    {
        $id = $this->uri->segment(3);

        $this->form_validation->set_rules($this->acoes_pa_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('o_que','como','onde','delegado','id_nivel','materiais','id_responsavel'),$this->input->post());
            $data['data_acao'] = $this->form_validation->convert_human_to_sql($_POST['data_acao']);

            $this->acoes_pa_model->update($this->input->post('id'), $data);
            $this->session->set_userdata('acao_editada','Ação editada com sucesso!');
            redirect('plano_acoes/editar_acao/'.$this->input->post('id'));
        endif;

        $this->data['usuarios'] = $this->usuarios_model->get_all();
        $this->data['acao'] = $this->acoes_pa_model->get($id);

        $this->load_view('acoes_pa/editar_acao');
    }

    public function excluir_acao()
    {
        $id = $this->uri->segment(3);
        $this->acoes_pa_model->delete($id);
        $this->session->set_userdata('acao_excluida','Ação excluída com sucesso!');
    }
}