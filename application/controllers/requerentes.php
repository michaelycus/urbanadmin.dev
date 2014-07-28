<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requerentes extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('requerente_model');
        $this->load->model('bairro_model');
    }

    public function index()
    {
        $this->da_cidade();
    }

    public function da_cidade()
    {
        $this->pagination->initialize(array(
            'base_url' => base_url().'requerentes/da_cidade',
            'total_rows' => $this->db->get('requerentes')->num_rows()
        ));

        $this->data['paginacao'] = $this->pagination->create_links();
        $this->data['requerentes'] = $this->requerente_model->get_requerentes_with_bairros();

        $this->load_view('requerentes/da_cidade', TRUE);
    }

    public function de_outras_cidades()
    {
        $this->pagination->initialize(array(
            'base_url' => base_url().'requerentes/de_outras_cidades',
            'total_rows' => $this->db->get('requerentes')->num_rows()
        ));

        $this->data['paginacao'] = $this->pagination->create_links();
        $this->data['requerentes'] = $this->requerente_model->get_requerentes_outras_cidades();

        $this->load_view('requerentes/de_outras_cidades', TRUE);
    }

    public function vereadores()
    {
        $this->pagination->initialize(array(
            'base_url' => base_url().'requerentes/vereadores',
            'total_rows' => $this->db->get('requerentes')->num_rows()
        ));

        $this->data['paginacao'] = $this->pagination->create_links();
        $this->data['requerentes'] = $this->requerente_model->get_vereadores();

        $this->load_view('requerentes/vereadores', TRUE);
    }

    public function cadastrar_requerente()
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

            $data['tipo'] = $this->input->post('tipo') ? 1 : 0;
            
            $data['recebe_emails'] = REQUERENTE_RECEBE_EMAILS;

            $this->requerente_model->insert($data);
            generate_charts();

            $this->session->set_userdata('requerente_cadastrado','Requerente cadastrado com sucesso!');
            redirect('requerentes/cadastrar_requerente');
        endif;

        $this->data['bairros'] = $this->bairro_model->get_bairros();

        $this->load->model('cidade_model');
        $this->data['estados'] = $this->cidade_model->get_estados();

        $this->load_view('requerentes/cadastrar_requerente', TRUE);
    }

    public function editar_requerente($id)
    {
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|max_length[64]');

        if ( $this->input->post('password') != '' && $this->input->post('password2') !=''  )
        {
            $this->form_validation->set_rules('password', 'SENHA', 'trim|required|min_length[5]|matches[password2]');
            $this->form_validation->set_rules('password2', 'REPETIR SENHA', 'trim|required|min_length[5]');
        }

        if (!$this->input->post('id_facebook'))
            $this->form_validation->set_rules('cpf', 'CPF', 'required|valid_cpf');
        $this->form_validation->set_rules('email', 'E-MAIL', 'required|valid_email');

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','pessoa_fisica','cpf','cnpj','rg','email','telefone',
                                   'profissao','endereco','mora_cidade','id_bairro',
                                   'estado','cidade','cep'),$this->input->post());
        
            $data['recebe_emails'] = $this->input->post('recebe_emails') ? 1 : 0;

            if ( $this->input->post('password') != '' && $this->input->post('password2') !=''  )
                $data['password'] = md5($this->input->post('password'));


            $this->requerente_model->update($this->input->post('id'), $data);
            generate_charts();

            $this->session->set_userdata('requerente_editado','Requerente editado com sucesso!');
            redirect('requerimentos');
        endif;

        $this->data['requerente'] = $this->requerente_model->get($id);
        $this->data['bairros'] = $this->bairro_model->get_bairros();

        $this->load->model('cidade_model');
        $this->data['estados'] = $this->cidade_model->get_estados();

        if ($this->data['requerente']->estado != 0)
            $this->data['cidades'] = $this->cidade_model->get_cidades($this->data['requerente']->estado);

        $this->load_view('requerentes/editar_requerente');
    }

    public function excluir_requerente($id)
    {
        if ($_SESSION['autorizacao']==AUTORIZACAO_ADMINISTRADOR)
        {
            $path = $this->uri->segment(4);

            $this->requerente_model->delete($id);
            generate_charts();

            $this->session->set_userdata('requerente_excluido','Requerente excluído com sucesso!');
            redirect('requerentes/'.$path);
        }
    }

    public function visualizar($id)
    {   
        $this->load->model('requerimento_model');

        $this->data['requerente'] = $requerente = $this->requerente_model->get($id);

        $this->data['requerimentos'] = $this->requerimento_model->get_requerimento_by_solicitante($id);

        if ($requerente->id_bairro)
            $this->data['bairro'] = $this->bairro_model->get($requerente->id_bairro);

        if ($requerente->estado)
        {
            $this->load->model('cidade_model');
            $this->data['estado'] = $this->cidade_model->get_estado($requerente->estado);
            $this->data['cidade'] = $this->cidade_model->get_cidade($requerente->cidade);
        }

        $this->load_view('requerentes/visualizar');
    }
    
    public function enviar_mensagem()
    {
        $this->data['teste1'] = $this->input->post('user_email');
        $this->data['teste2'] = $this->input->post('user_message');
                
        $this->load_view('requerentes/teste');               
        
        // transformar isso num metdo de teste
        if ( $this->input->post('user_email') && $this->input->post('user_message') )
        {
            $message = send_message($this->input->post('user_email'), $this->input->post('user_message'));

            $this->session->set_userdata('mensagem_enviada',$message.'xxxx');
//            $this->session->set_userdata('mensagem_enviada','Mensagem enviada com sucesso!');
        }
        
        else
        {            
            $user = $this->input->post('user_email');
            $msg = $this->input->post('user_message');
//            $this->session->set_userdata('mensagem_enviada',"nem entrou aki");
            $this->session->set_userdata('mensagem_enviada',$this->input->post('id') . ' = '. $id . ' - ' .$user . ' e ' . $msg );
        }
//        
//        redirect('requerentes/visualizar/'.$this->input->post('id'));
    }
    
    public function get_requerentes_ajax($id_bairro)
    {
        $requerentes = $this->requerente_model->get_requerentes_by_bairro($id_bairro);

        if (empty($requerentes))
            return '{ "descricao": "Nenhum requerente encontrado" }';

        $arr_req = array();

        foreach ($requerentes as $req)
        {
            $desc = trim(preg_replace('/\s+/', ' ', $req->nome));
            $arr_req[] = '{"id":' . $req->id . ',"nome":"' . substr($desc, 0, 128)  . '"}';
        }

        echo '[ ' . implode(",", $arr_req) . ']';

        return;
    }
    
    public function get_requerentes_newsletter_ajax($id_bairro)
    {
        $requerentes = $this->requerente_model->get_requerentes_newsletter_by_bairro($id_bairro);

        if (empty($requerentes))
            return '{ "descricao": "Nenhum requerente encontrado" }';

        $arr_req = array();

        foreach ($requerentes as $req)
        {
            $desc = trim(preg_replace('/\s+/', ' ', $req->email));
            $arr_req[] = '{"id":' . $req->id . ',"email":"' . substr($desc, 0, 128)  . '"}';
        }

        echo '[ ' . implode(",", $arr_req) . ']';

        return;
    }
}