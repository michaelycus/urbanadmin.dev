<?php
class MY_Controller extends CI_Controller
{
    public $data = array();
    
    function __construct()
    {
        parent::__construct();
        
        session_start();
        
        // Check authentication
        $no_redirect = array('login_view', 'admin', 'some/controller');
        if (!isset($_SESSION['usuario']) && !in_array(uri_string(), $no_redirect))
        {
            redirect('admin');
        }
        
        $this->output->enable_profiler(ENVIRONMENT == 'development');
    }
    
    /**
     * Set subview and load layout
     * @param type $subview
     */
    public function load_view ($subview)
    {
        $this->data['subview'] = $subview;        
        $this->load->view('layouts/layout', $this->data);
    }
}