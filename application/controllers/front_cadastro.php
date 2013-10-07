<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_cadastro extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();        
    }

    public function index()
    {
        $this->load_front_view('front/home');
    }
    
    public function cadastrar()
    {
        $this->load_front_view('front/cadastrar');
    }
}