<?php

class Secretarias_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'nome',
            'label' => 'NOME',
            'rules' => 'trim|required|max_length[64]',
        )
    );
    
    protected $soft_delete = TRUE;

    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
        $this->_table = 'secretarias';
    }
}