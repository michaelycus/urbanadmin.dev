<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct()
    {            
        parent::__construct();
    } 

    public function index()
    {
//            $data = array(            
//            'view' => 'templates/production-body'
//            );
//            $this->load->view('painel',$data);
        if ($_SESSION['autorizacao']== AUTORIZACAO_OPERADOR)
            redirect ('requerimentos/meus_requerimentos/');

        $this->load_view('layouts/home');
    }
}
