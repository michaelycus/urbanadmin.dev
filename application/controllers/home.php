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

        $this->load_view('layouts/home');
    }
}
