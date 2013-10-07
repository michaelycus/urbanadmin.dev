<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acoes extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('acoes_model');
    } 

    public function index()
    {        
        $this->data['usuarios_ativos'] = $this->usuarios_model->get_usuarios_ativos();        
        
        $this->load_view('usuarios/lista_usuarios');
    }
    
    public function lista_acoes_corretivas()
    {
        $this->load_view('acoes/lista_acoes_corretivas');
    }
    
    public function adicionar_acao_corretiva()
    {
        $this->form_validation->set_rules($this->acoes_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('titulo','tipo_averiguacao','constatacao','id_responsavel','descricao'),$this->input->post());
            $data['data'] = $this->form_validation->convert_human_to_sql($_POST['data']);
            $this->acoes_model->add_plano_acao($data);
        endif;
        
        $this->data['usuarios'] = $this->usuarios_model->get_usuarios_ativos();
     
        $this->load_view('acoes/adicionar_acao_corretiva');
    }
    
    public function editar_acao_corretiva()
    {        
    }
    
    public function excluir_acao_corretiva()
    {        
    }
    
    public function lista_acoes_preventivas()
    {
        $this->load_view('acoes/lista_acoes_preventivas');
    }
    
    public function adicionar_acao_preventiva()
    {
    }
    
    public function editar_acao_preventiva()
    {        
    }
    
    public function excluir_acao_preventiva()
    {        
    }
}
