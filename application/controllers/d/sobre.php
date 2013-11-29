<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sobre extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();      
    }

    public function index()
    {
        $this->load_view('layouts/sobre');
    }
}