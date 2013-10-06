<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuarios_model');
    }

    public function index ()
    {
        $this->data['usuarios_ativos'] = $this->usuarios_model->get_all();

        $this->load_view('usuarios/lista_usuarios');
    }

    public function adicionar_usuario ()
    {
        $this->form_validation->set_rules($this->usuarios_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','usuario','email','autorizacao'),$this->input->post());
            $data['senha'] = md5($data['senha']);

            $this->usuarios_model->insert($data);
            $this->session->set_userdata('usuario_adicionado','Usuário adicionado com sucesso!');            
            redirect('usuarios/adicionar_usuario');
        endif;

        $this->load_view('usuarios/adicionar_usuario');
    }
    
    public function editar_usuario ()
    {
        $id = $this->uri->segment(3);
        
        $this->form_validation->set_rules($this->usuarios_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','usuario','email','autorizacao'),$this->input->post());
            $data['senha'] = md5($data['senha']);

            $this->usuarios_model->update($this->input->post('id'), $data);
            $this->session->set_userdata('usuario_editado','Usuário editado com sucesso!');            
            redirect('usuarios/editar_usuario/'.$this->input->post('id'));
        endif;
        
        $this->data['usuario'] = $this->usuarios_model->get($id);

        $this->load_view('usuarios/editar_usuario');
    }
}
