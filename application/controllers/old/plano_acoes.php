<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plano_acoes extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('plano_acoes_model');
        $this->load->model('usuarios_model');
        $this->load->model('categorias_pa_model');
        $this->load->model('acoes_pa_model');
    }

    public function index()
    {
        $this->lista_plano_acoes();
    }

    public function lista_plano_acoes()
    {
        $id_categoria = isset($_POST['id_categoria']) ? $_POST['id_categoria'] : '';

        $this->pagination->initialize(array(
            'base_url' => base_url().'plano_acoes/lista_plano_acoes',
            'total_rows' => $this->db->get('plano_acoes')->num_rows()
        ));

        $this->data['categorias'] = $this->categorias_pa_model->get_all();
        $this->data['id_categoria'] = $id_categoria;
        if (!empty($id_categoria))
            $this->db->where('id_categoria', $id_categoria);
        $this->plano_acoes_model->limit(ITENS_POR_PAGINA, $this->uri->segment(3));
        $this->data['plano_acoes'] = $this->plano_acoes_model->get_plano_acoes_with_usuarios();
        $this->data['paginacao'] = $this->pagination->create_links();

        $this->load_view('plano_acoes/lista_plano_acoes');
    }

    public function adicionar_plano_acao()
    {
        $this->form_validation->set_rules($this->plano_acoes_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data_pa = elements(array('titulo','id_categoria','id_responsavel','indicador','recurso'),$this->input->post());
            $data_pa['quando'] = $this->form_validation->convert_human_to_sql($_POST['quando']);
            $this->plano_acoes_model->add_plano_acao($data_pa);
        endif;

        $this->data['categorias'] = $this->categorias_pa_model->get_all();
        $this->data['usuarios'] = $this->usuarios_model->get_all();

        $this->load_view('plano_acoes/adicionar_plano_acao');
    }

    public function editar_plano_acao()
    {
        $id = $this->uri->segment(3);

        $this->form_validation->set_rules($this->plano_acoes_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('titulo','id_categoria','id_responsavel','indicador','recurso'),$this->input->post());
            $data['quando'] = $this->form_validation->convert_human_to_sql($_POST['quando']);
            $this->plano_acoes_model->update_plano_acao($data,array('id'=>$this->input->post('id')));
        endif;
        
        $this->data['plano_acao'] = $this->plano_acoes_model->get_plano_acao($id);
        $this->data['categorias'] = $this->categorias_pa_model->get_all();
        $this->data['usuarios'] = $this->usuarios_model->get_all();
        $this->db->where('id_plano_acao', $id);
        $this->data['acoes'] = $this->acoes_pa_model->get_acoes_with_usuarios();
        
        $this->load_view('plano_acoes/editar_plano_acao');
    }

    public function excluir_plano_acao()
    {
        $id = $this->uri->segment(3);

        $this->plano_acoes_model->delete_plano_acao($id);
        
        $this->load_view('plano_acoes/lista_plano_acoes');
    }
    
    public function testando ()
    {
        echo 'e isso ai';
    }
    
}