<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('admin_model');
    }
    
    public function index()
    {
        if (isset($_SESSION['usuario']))
        {
            redirect('home');
        }
        $this->form_validation->set_rules($this->admin_model->validation);
        
        if ($this->form_validation->run() !== false)
        {
            $res = $this->admin_model->verify_user($this->input->post('usuario'), 
                                                   $this->input->post('senha'));
            
            if ($res !== false)
            {
                $_SESSION['usuario'] = $this->input->post('usuario');                
                $_SESSION['nome'] = $res->nome;                
            }
            redirect('home');
        }
        
        $this->load->view('login_view');
    }
    
    public function logout()
    {
        session_destroy();
        $this->load->view('login_view');
    }
}