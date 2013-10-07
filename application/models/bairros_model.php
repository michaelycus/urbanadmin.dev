<?php

class Bairros_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'nome',
            'label' => 'NOME',
            'rules' => 'trim|required|max_length[64]',
        )
    );
    
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
    }
}