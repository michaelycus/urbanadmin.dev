<?php

class Graficos_customizados_model extends MY_Model
{
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
        $this->_table = 'graficos_customizados';
    }
    
    public function inserir_dados_bairro($data)
    {
        $this->db->insert('graficos_customizados_dados', $data); 
    }
    
    public function get_chart_values($id)
    {
        $this->db->from('graficos_customizados_dados');
        $this->db->where('id_grafico', $id);        
        
        return $this->db->get()->result();
    }
    
    public function get_charts_with_requerentes()
    {
        $this->db->select('graficos_customizados.*, requerentes.nome AS nome_requerente');
        $this->db->join('requerentes', 'requerentes.id=graficos_customizados.id_requerente');

        return $this->get_all();
    }
}