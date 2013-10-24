<?php

class Requerente_model extends MY_Model
{    
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
    }
    
    public function get_requerentes_with_bairros()
    {
        $this->db->select('requerentes.*, bairros.nome AS nome_bairro');
        $this->db->where('mora_cidade', MORA_NA_CIDADE);
        $this->db->join('bairros', 'requerentes.id_bairro=bairros.id');

        return $this->get_all();
    }
    
    public function get_requerentes_outras_cidades()
    {
        $this->db->where('mora_cidade', MORA_OUTRA_CIDADE);

        return $this->get_all();
    }
    
    public function get_vereadores()
    {
        $this->db->where('tipo', REQUERENTE_TIPO_VEREADOR);
        $this->db->order_by('id');

        return $this->get_all();
    }
}