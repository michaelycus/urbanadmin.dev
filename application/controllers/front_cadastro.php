<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_cadastro extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();        
        
        $this->load->model('bairros_model');
    }

    public function index()
    {
        $this->load_front_view('front/home');
    }
    
    public function cadastrar()
    {
        $this->load_front_view('front/cadastrar');
    }
    
    public function criar_cadastro()
    {
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|max_length[64]');            
        if ($this->input->post('pessoa_fisica') == PESSOA_FISICA)
            $this->form_validation->set_rules('cpf', 'CPF', 'required|valid_cpf|is_unique[requerentes.cpf]');            
        if ($this->input->post('pessoa_fisica') == PESSOA_JURIDICA)
            $this->form_validation->set_rules('cnpj', 'CNPJ', 'required|valid_cnpj|is_unique[requerentes.cnpj]');            
        $this->form_validation->set_rules('email', 'E-MAIL', 'required|valid_email|is_unique[requerentes.email]');            
        if ($this->input->post('mora_cidade') == MORA_NA_CIDADE)
            $this->form_validation->set_rules('id_bairro', 'BAIRRO', 'required');  
        if ($this->input->post('mora_cidade') == MORA_OUTRA_CIDADE)
        {
            $this->form_validation->set_rules('estado', 'CIDADE', 'required');  
            $this->form_validation->set_rules('cidade', 'ESTADO', 'required');  
        }            

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','pessoa_fisica','cpf','cnpj','rg','email','telefone',
                                   'profissao','endereco','mora_cidade','id_bairro',
                                   'estado','cidade','cep'),$this->input->post());
            $data['data_cadastro'] = date('Y-m-d');
            
            $this->requerente_model->insert($data);
            generate_charts();
            
            $this->session->set_userdata('requerente_cadastrado','Requerente cadastrado com sucesso!');            
            redirect('front/criar_cadastro');     
        endif;
        
        $this->data['bairros'] = $this->bairros_model->get_all();
        
        $this->load->model('cidades_model');
        $this->data['estados'] = $this->cidades_model->getEstados();
        
//        $this->load_view('requerentes/cadastrar_requerente');
        
        $this->load_front_view('front/criar_cadastro');
    }
}