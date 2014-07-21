<?php

class Faixa_model extends MY_Model
{
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
        $this->_table = 'faixas';
    }
    
    protected $soft_delete = TRUE;
    protected $soft_delete_key = 'faixa_deleted';
    
    public function get_faixas_with_info()
    {
        $this->db->select('faixas.*, bairros.nome AS nome_bairro, ruas.nome AS nome_rua');
        $this->db->join('bairros', 'faixas.id_bairro=bairros.id','LEFT');
        $this->db->join('ruas', 'faixas.id_rua=ruas.id','LEFT');
        
        return $this->get_all();
    }
}