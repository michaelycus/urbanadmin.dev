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
        $this->db->where('tipo', !REQUERENTE_TIPO_VEREADOR);
        $this->db->join('bairros', 'requerentes.id_bairro=bairros.id');

        return $this->get_all();
    }
    
    public function get_requerentes_outras_cidades()
    {
        $this->db->select('requerentes.*, cidades.nome AS cidade, estados.sigla AS estado');
        $this->db->where('mora_cidade', MORA_OUTRA_CIDADE);
        $this->db->join('cidades', 'cidades.id=requerentes.cidade');
        $this->db->join('estados', 'estados.id=requerentes.estado');

        return $this->get_all();
    }
    
    public function get_vereadores()
    {
        $this->db->select('requerentes.*, bairros.nome AS nome_bairro');
        $this->db->where('tipo', REQUERENTE_TIPO_VEREADOR);
        $this->db->join('bairros', 'requerentes.id_bairro=bairros.id');        
        $this->db->order_by('id');

        return $this->get_all();
    }
    
    public function count_requerentes_por_bairro()
    {
        $this->db->select('bairros.nome AS nome_bairro, bairros.codename, COUNT(requerentes.id) AS count_requerentes');
        $this->db->where('mora_cidade', MORA_NA_CIDADE);
        $this->db->join('bairros', 'requerentes.id_bairro=bairros.id');
        $this->db->group_by('requerentes.id_bairro');

        return $this->get_all();
//        SELECT bairros.nome, COUNT( requerentes.id ) 
//FROM  `requerentes` 
//JOIN bairros ON requerentes.id_bairro = bairros.id
//GROUP BY requerentes.id_bairro
//LIMIT 0 , 30
    }
}