<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sistema extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {        
        $this->load_config_view('configuracoes/sistema/versao');
    }
}
