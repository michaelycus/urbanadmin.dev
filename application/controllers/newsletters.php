<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Newsletters extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('newsletter_model');
        $this->load->model('bairro_model');        
    }
    
    public function index()
    {
        $this->listar_newsletters();
    }
    
    public function criar_newsletter()
    {
        $this->data['bairros'] = $this->bairro_model->get_bairros();
        
        $this->form_validation->set_rules($this->newsletter_model->validation);
            
        if ($this->form_validation->run()==TRUE):
            $data = elements(array('assunto','mensagem','id_bairro','enviar_para'),$this->input->post());
        
            $this->newsletter_model->insert($data);
            
            $this->session->set_userdata('newsletter_criada','Newsletter criada com sucesso!');
            
            $id = $this->newsletter_model->get_last_id();
            
            redirect('newsletters/editar_newsletter/'.$id);
        endif;
        
        $this->load_view('newsletters/criar_newsletter', TRUE);
    }
    
    public function editar_newsletter($id)
    {
        $this->data['bairros'] = $this->bairro_model->get_bairros();        
        $this->data['newsletter'] = $this->newsletter_model->get($id);
        
        $this->form_validation->set_rules($this->newsletter_model->validation);
            
        if ($this->form_validation->run()==TRUE):
            $data = elements(array('assunto','mensagem','id_bairro','enviar_para'),$this->input->post());
        
            $this->newsletter_model->update($this->input->post('id'), $data);
            
            $this->session->set_userdata('newsletter_editada','Newsletter editada com sucesso!');
            
            redirect('newsletters/editar_newsletter/'.$this->input->post('id'));
        endif;
        
        $this->load_view('newsletters/editar_newsletter', TRUE);
    }
    
    public function visualizar($id)
    {        
        $this->data['newsletter'] = $this->newsletter_model->get($id);
                
        $this->load_view('newsletters/visualizar', TRUE);
    }

    function enviar_newsletter($id)
    {
        $newsletter = $this->newsletter_model->get($id);        
        
        $error = send_newsletter($newsletter);
        
        $data['data_envio'] = date('Y-m-d H:i:s');        
        $this->newsletter_model->update($id, $data);
        
        $this->session->set_userdata('newsletter_enviada', $error == '' ? 'Newsletter enviada com sucesso!' : $error);

        redirect('newsletters/listar_newsletters', TRUE);
    }
    
    public function preview($id)
    {
        $data['mensagem'] = $this->newsletter_model->get($id)->mensagem;
        $data['assunto'] = $this->newsletter_model->get($id)->assunto;
        
        $this->load->view('newsletters/preview', $data);
    }
    
    public function listar_newsletters()
    {
        $this->data['newsletters'] = $this->newsletter_model->get_newsletters_with_bairros();
        
        $this->load_view('newsletters/listar_newsletters', TRUE);
    }
    
    public function excluir_newsletter($id)
    {
        if ($_SESSION['autorizacao']==AUTORIZACAO_ADMINISTRADOR)
        {
            $this->newsletter_model->delete($id);

            $this->session->set_userdata('newsletter_excluida','Newsletter excluída com sucesso!');
            redirect('newsletters/');
        }
    }
    
    public function descadastrar()
    {
        $this->load->model('requerente_model');
        
        $this->form_validation->set_rules('email', 'E-MAIL', 'required|valid_email');
        
        if ($this->input->post('email'))
        {
            if ($this->form_validation->run()==TRUE){
                $this->requerente_model->descadastrar_email($this->input->post('email'));

                $this->session->set_userdata('email_removido','O e-mail informado foi removido da lista de notícias!');
            }
            else
            {
                $this->session->set_userdata('email_invalido','O e-mail informado é inválido!');
            }
        }
       
        $this->load->view('newsletters/descadastrar', $this->data);
    }
    
    public function get_newsletters_ajax($id_bairro)
    {
        $newsletters = $this->newsletter_model->get_newsletters_by_bairro($id_bairro);

        if (empty($newsletters))
            return '{ "descricao": "Nenhum newsletter encontrada" }';

        $arr_new = array();

        foreach ($newsletters as $new)
        {
            $desc = trim(preg_replace('/\s+/', ' ', $new->assunto));
            $arr_new[] = '{"id":' . $new->id . ',"nome":"' . substr($desc, 0, 128)  . '"}';
        }

        echo '[ ' . implode(",", $arr_new) . ']';

        return;
    }
}