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
            redirect('login/inicio');
        }

        if ($this->input->post('pessoa_fisica_login') == PESSOA_FISICA)
            $this->form_validation->set_rules('cpf', 'CPF', 'required|valid_cpf');
        if ($this->input->post('pessoa_fisica_login') == PESSOA_JURIDICA)
            $this->form_validation->set_rules('cnpj', 'CNPJ', 'required|valid_cnpj');
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
                $_SESSION['id_bairro'] = $res->id_bairro;

                $_SESSION['requerimentos'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_EM_ANALISE);

                $this->requerente_model->update_last_visit($res->id);
            }
            else
            {
                $this->session->set_userdata('usuario_errado','Usuário e/ou senha inválidos!<br />Por favor, tente novamente.');
            }

            redirect('login/inicio');
        }

        $this->data['bairros'] = $this->bairros_model->get_all();
        $this->data['estados'] = $this->cidades_model->getEstados();

        $this->load_front_view('login_view');
    }

    public function inicio()
    {
        if ($_SESSION['autorizacao']== AUTORIZACAO_OPERADOR)
        {
            $this->data['requerimentos'] = $this->requerimento_model->get_last(8);
            $this->data['total_requerimentos'] = $this->requerimento_model->count_all();
            $this->data['meus_requerimentos'] = $this->requerimento_model->count_meus_requerimentos($_SESSION['id_user']);
            $this->data['total_requerentes'] = $this->requerente_model->count_requerentes();
            
            $this->load_view('layouts/inicio_operador');
        }
        else if ($_SESSION['autorizacao']== AUTORIZACAO_ADMINISTRADOR)
        {
            $this->data['requerimentos'] = $this->requerimento_model->get_last(10);
            $this->data['requerentes'] = $this->requerente_model->get_last(10);

            $this->data['req_em_analise'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_EM_ANALISE);
            $this->data['req_analisado'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_ANALISADO);
            $this->data['req_protocolado'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_PROTOCOLADO);
            $this->data['req_concluido'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_RESOLVIDO);
            $this->data['req_da_sessao'] = $this->requerimento_model->count_da_sessao();
            
            $year = date("Y"); // 2011
            $numericMonth = date("m"); // 01 through 12
            
            
            $this->data['versao_atual'] = "1.1.4";

            $json_str = '{"versoes":[
                    {"versao":"1.1.4", "data":"27/02/2014", "changes": 
                         ["Adicionado links no painel do administrador para requerimentos por etapa"                           
                          ]},
                    {"versao":"1.1.3", "data":"26/02/2014", "changes": 
                         ["Permite envio de fotos maiores e redimensionamento automático", 
                          "Editor de ruas"
                          ]},
                    {"versao":"1.1.2", "data":"19/02/2014", "changes": 
                         ["Utilizando PHPMailer para envio de mensagens", 
                          "Tela inicial do mobile foi corrigida", 
                          "Corrigindo Tipo de requerimento ao visualizar informações do requerimento", 
                          "Requerimentos cadastrados na sessão ficam separados dos demais", 
                          "Incorporar iframe dos gráficos customizados foi corrigido"
                          ]},
                    {"versao":"1.1.1", "data":"11/02/2014", "changes": 
                         ["Criado sistema de versionamento do sistema", 
                          "Contabilizando separadamente outros requerimentos", 
                          "Adicionada possibilidade de escolha de formatação de unidades na criação de gráficos customizados", 
                          "Adicionado link para requerente ao visualizar requerimento", 
                          "Os gráficos customizados agora aceitam valores fracionados com vírgula"
                          ]}
                    ]}';
            
            $jsonObj = json_decode($json_str);
            $this->data['versoes'] = $jsonObj->versoes;

            $this->load_view('layouts/inicio_administrador');
        }
    }

    public function logout()
    {
        session_destroy();

        redirect('login/inicio');
    }

    public function cadastrar_requerente()
    {
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

            $this->session->set_userdata('requerente_cadastrado','Usuário cadastrado com sucesso!<br />Você já pode acessar com seu CPF e senha.');
            redirect('login');
        endif;

        $this->data['bairros'] = $this->bairros_model->get_bairros();
        $this->data['estados'] = $this->cidades_model->getEstados();

        $this->data['view'] = 'reg';

        $this->load_front_view('login_view');
    }

    public function resetar_senha()
    {
        if ($this->input->post('forgot_cpf'))
        {
            $res = $this->login_model->verify_user_cpf_exists($this->input->post('forgot_cpf'),
                                                              $this->input->post('forgot_email'));
        }

        if ($res !== false)
        {
            $key = $this->requerente_model->generate_key($res);

            reset_password($res, $key);

            $this->session->set_userdata('forgot_email_enviado','Uma nova senha de acesso foi gerada e enviada para o seu e-mail.');
        }
        else
        {
            $this->session->set_userdata('forgot_usuario_errado','CPF e e-mail informados não existem no sistema!<br />Por favor, tente novamente.');
        }

        $this->data['view'] = 'forgot';

        $this->load_front_view('login_view');
    }
}