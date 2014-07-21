<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('login_model');
        $this->load->model('bairro_model');
        $this->load->model('cidade_model');
        $this->load->model('requerimento_model');
        $this->load->model('requerente_model');
    }

    public function index()
    {
        if (ENVIRONMENT != 'development')
        {
            // Carregando facebook
            $this->load->library('facebook'); // Automatically picks appId and secret from config

            $user = $this->facebook->getUser();

            if ($user) // Se usuário está online
            {
                try
                {
                    $this->data['user_profile'] = $this->facebook->api('/me');

                    $req = $this->login_model->verify_email($this->data['user_profile']['email']);                

                    if ($req) // Se possui conta no sistema
                    {
                        // Checa e atualiza id facebook cadastrado
                        $this->requerente_model->has_facebook_id($this->data['user_profile']['id'], $req->id);

                        $_SESSION['id_facebook'] = $req->id_facebook;
                        $_SESSION['nome'] = $req->nome;
                        $_SESSION['autorizacao'] = $req->autorizacao;
                        $_SESSION['id_user'] = $req->id;
                        $_SESSION['id_bairro'] = $req->id_bairro;

                        $_SESSION['requerimentos'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_EM_ANALISE);

                        $this->requerente_model->update_last_visit($req->id);
                    }
                    else // não possui email cadastrado
                    {
                        $data['nome'] = $this->data['user_profile']['name'];
                        $data['email'] = $this->data['user_profile']['email'];        
                        $data['id_facebook'] = $this->data['user_profile']['id'];
                        $data['data_cadastro'] = date('Y-m-d');
                        $data['autorizacao'] = AUTORIZACAO_OPERADOR;
                        $data['recebe_emails'] = REQUERENTE_RECEBE_EMAILS;
                        $data['mora_cidade'] = MORA_NA_CIDADE;

                        $this->requerente_model->insert($data);

                        $this->session->set_userdata('primeiro_acesso','Como este é o seu primeiro acesso, por favor informe alguns dados sobre você!');

                        $_SESSION['nome'] = $this->data['user_profile']['name'];
                        $_SESSION['id_facebook'] = $this->data['user_profile']['id'];
                        $_SESSION['autorizacao'] = AUTORIZACAO_OPERADOR;
                        $_SESSION['id_user'] =  $this->requerente_model->get_last_id();

                        $_SESSION['requerimentos'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_EM_ANALISE);
                    }

                    redirect('login/inicio');                

                } catch (FacebookApiException $e)
                {
                    $user = null;
                }
            }
            else
            {
                $this->facebook->destroySession();
            }

            $this->data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('login'),
                'scope' => array("email") // permissions here
            ));     
        }           
        
        if (isset($_SESSION['cpf']) || isset($_SESSION['cnpj']) || isset($_SESSION['id_facebook']))
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
            $res = $this->login_model->verify_user_cpf($this->input->post('cpf'),
                                                       $this->input->post('password'));

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

        $this->data['bairros'] = $this->bairro_model->get_all();
        $this->data['estados'] = $this->cidade_model->get_estados();

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
            
            if ($this->session->userdata('primeiro_acesso'))
                redirect('requerentes/editar_requerente/'. $_SESSION['id_user']);

            $this->load_view('layouts/inicio_operador');
        }
        else if ($_SESSION['autorizacao']== AUTORIZACAO_ADMINISTRADOR)
        {
            $this->data['requerimentos'] = $this->requerimento_model->get_last(10);
            $this->data['requerentes'] = $this->requerente_model->get_last(10);

            $this->data['req_em_analise'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_EM_ANALISE);
            $this->data['req_analisado'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_ANALISADO);
            $this->data['req_protocolado'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_PROTOCOLADO);
            $this->data['req_verificar'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_VERIFICAR);
            $this->data['req_concluido'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_RESOLVIDO);
            $this->data['req_da_sessao'] = $this->requerimento_model->count_da_sessao();

            $meses = array();

            for ($i=0; $i<12; $i++)
            {
                $inicio = date("Y-m-01", strtotime("-$i months") ) ;
                $fim    = date("Y-m-t", strtotime("-$i months") ) ;

                $count = $this->requerimento_model->count_requerimentos_by_mes($inicio, $fim);

                array_push($meses, array(date("m/Y", strtotime("-$i months")) => $count ));
            }
            $this->data['meses'] = array_reverse($meses);

            $this->data['versao_atual'] = "1.5.0";

            $json_str = '{"versoes":[
                    {"versao":"1.5.0", "data":"21/07/2014", "changes":
                         ["Sistema permite acesso pelo Facebook"
                          ]}
                    ]}';

            $jsonObj = json_decode($json_str);
            $this->data['versoes'] = $jsonObj->versoes;

            $this->load_view('layouts/inicio_administrador');
        }
    }

    public function logout()
    {
        $this->load->library('facebook');

        // Logs off session from website
        $this->facebook->destroySession();
        // Make sure you destory website session as well.
        
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
            $data['recebe_emails'] = REQUERENTE_RECEBE_EMAILS;

            $this->requerente_model->insert($data);
            generate_charts();

            $this->session->set_userdata('requerente_cadastrado','Usuário cadastrado com sucesso!<br />Você já pode acessar com seu CPF e senha.');
            redirect('login');
        endif;

        $this->data['bairros'] = $this->bairro_model->get_bairros();
        $this->data['estados'] = $this->cidade_model->get_estados();

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