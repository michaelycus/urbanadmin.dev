<?php

class Categorias_requerimento_model extends MY_Model
{
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
        $this->_table = 'categorias_requerimento';
    }
}