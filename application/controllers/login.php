<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('login_model');
        $this->load->model('bairros_model');
        $this->load->model('cidades_model');
        $this->load->model('requerimento_model');
        $this->load->model('requerente_model');
    }

    public function index()
    {
        if (isset($_SESSION['cpf']) || isset($_SESSION['cnpj']))
        {
            redirect('home');
        }

        if ($this->input->post('pessoa_fisica_login') == PESSOA_FISICA)
            $this->form_validation->set_rules('cpf', 'CPF', 'required|valid_cpf|is_unique[requerentes.cpf]');
        if ($this->input->post('pessoa_fisica_login') == PESSOA_JURIDICA)
            $this->form_validation->set_rules('cnpj', 'CNPJ', 'required|valid_cnpj|is_unique[requerentes.cnpj]');
        $this->form_validation->set_rules('password', 'SENHA', 'trim|required|min_length[5]');

        if ($this->form_validation->run() !== false)
        {
            if ($this->input->post('cpf'))
            {
                
                $res = $this->login_model->verify_user_cpf($this->input->post('cpf'),
                                                   $this->input->post('password'));
            }
            else
            {
                $res = $this->login_model->verify_user_cnpj($this->input->post('cnpj'),
                                                   $this->input->post('password'));
            }
            
            if ($res !== false)
            {
                if ($this->input->post('cpf'))                
                    $_SESSION['cpf'] = $this->input->post('cpf');
                
                if ($this->input->post('cnpj'))                
                    $_SESSION['cnpj'] = $this->input->post('cnpj');
                
                $_SESSION['nome'] = $res->nome;
                $_SESSION['autorizacao'] = $res->autorizacao;
                $_SESSION['id_user'] = $res->id;
                
                $_SESSION['requerimentos'] = $this->requerimento_model->count_requerimentos_em_analise();
                
                $this->requerente_model->update_last_visit($res->id);
            }
            else
            {
                $this->session->set_userdata('usuario_errado','Usuário e/ou senha inválidos!<br />Por favor, tente novamente.');
            }

            redirect('home');
        }

        $this->data['bairros'] = $this->bairros_model->get_all();

        $this->load->model('cidades_model');
        $this->data['estados'] = $this->cidades_model->getEstados();

        $this->load_front_view('login_view');
    }

    public function logout()
    {
        session_destroy();
        
        redirect('home');
        
//        $this->load->view('login_view');
    }

    public function cadastrar_requerente()
    {
        $this->load->model('requerente_model');

        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|max_length[64]');
        $this->form_validation->set_rules('password', 'SENHA', 'trim|required|min_length[5]|matches[password2]');
        $this->form_validation->set_rules('password2', 'SENHA', 'trim|required|min_length[5]');
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
            $data = elements(array('nome','pessoa_fisica','cpf','cnpj','email','telefone',
                                   'endereco','mora_cidade','id_bairro',
                                   'estado','cidade','cep'),$this->input->post());
            $data['data_cadastro'] = date('Y-m-d');
            $data['password'] = md5($this->input->post('password'));
            $data['autorizacao'] = AUTORIZACAO_OPERADOR;

            $this->requerente_model->insert($data);
            generate_charts();

            $this->session->set_userdata('requerente_cadastrado','Usuário cadastrado com sucesso!<br />Você já pode acessar com seu CPF/CNPJ e senha.');
            redirect('login');
        endif;

        $this->data['bairros'] = $this->bairros_model->get_bairros();

        $this->load->model('cidades_model');
        $this->data['estados'] = $this->cidades_model->getEstados();

        $this->data['view'] = 'reg';

        $this->load_front_view('login_view');
    }
}