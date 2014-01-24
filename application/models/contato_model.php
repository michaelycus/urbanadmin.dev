<?php

class Contato_model extends MY_Model
{
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
    }
    
    public function get_contatos_with_bairros()
    {
        $this->db->select('contatos.*, bairros.nome AS nome_bairro');
        $this->db->join('bairros', 'contatos.id_bairro=bairros.id','LEFT');

        return $this->get_all();
    }
}