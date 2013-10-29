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
    }

    public function listar_usuarios()
    {
        $this->data['usuarios_ativos'] = $this->usuarios_model->get_all();

        $this->load_view('usuarios/listar_usuarios');
    }

    public function adicionar_usuario()
    {
        $config['upload_path'] = './uploads/avatars/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2048';
        $config['max_height'] = '1024';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        $this->form_validation->set_rules($this->usuarios_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','usuario','email','autorizacao'),$this->input->post());
            $data['senha'] = md5($this->input->post('senha'));
            
            if ($this->upload->do_upload())
            {
                $file_data = $this->upload->data();

                $data['avatar'] = $file_data['raw_name'].$file_data['file_ext'];
            }
            else
            {
                $this->data['error'] = $this->upload->display_errors();
            }

            if (!$this->data['error'])
            {
                $this->usuarios_model->insert($data);
                $this->session->set_userdata('usuario_adicionado','Usuário adicionado com sucesso!');

                redirect('usuarios/adicionar_usuario');
            }

        endif;

        $this->load_view('usuarios/adicionar_usuario');
    }

    public function editar_usuario()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2048';
        $config['max_height'] = '1024';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        
        $id = $this->uri->segment(3);

        $this->form_validation->set_rules($this->usuarios_model->validation);

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','usuario','email','autorizacao'),$this->input->post());
            $data['senha'] = md5($data['senha']);
            
            if ($this->upload->do_upload())
            {
                $file_data = $this->upload->data();

                $data['avatar'] = $file_data['raw_name'].$file_data['file_ext'];
            }
            else
            {
                $this->data['error'] = $this->upload->display_errors();
            }
            
            if (!$this->data['error'])
            {
                $this->usuarios_model->update($this->input->post('id'), $data);
                $this->session->set_userdata('usuario_editado','Usuário editado com sucesso!');
                
                redirect('usuarios/editar_usuario/'.$this->input->post('id'));
            }
            
        endif;

        $this->data['usuario'] = $this->usuarios_model->get($id);

        $this->load_view('usuarios/editar_usuario');
    }

    public function excluir_usuario()
    {
        $id = $this->uri->segment(3);

        $this->usuarios_model->delete($id);
        $this->session->set_userdata('usuario_excluido','Usuario excluído com sucesso!');
        redirect('usuarios/listar_usuarios');
    }
}
