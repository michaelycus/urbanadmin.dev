<?php

class Grafico_customizado_model extends MY_Model
{
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
        $this->_table = 'graficos_customizados';
    }
    
    public function get_by_code($code)
    {
        $q = $this->db->where('code', $code)                      
                      ->limit(1)
                      ->get('graficos_customizados');

        if ($q->num_rows > 0)
        {
            return $q->row();
        }
        return false;
    }

    public function inserir_dados_bairro($data)
    {
        $this->db->insert('graficos_customizados_dados', $data);
    }

    public function deletar_dados_bairro($id)
    {
        $this->db->delete('graficos_customizados_dados', array('id_grafico' => $id));
    }

    public function get_chart_values($id)
    {
        $this->db->from('graficos_customizados_dados');
        $this->db->where('id_grafico', $id);

        return $this->db->get()->result();
    }

    public function get_charts_with_requerentes_by_requerente($id)
    {
        $this->db->select('graficos_customizados.*, requerentes.nome AS nome_requerente');
        $this->db->join('requerentes', 'requerentes.id=graficos_customizados.id_requerente');
        $this->db->where('id_requerente', $id);

        return $this->get_all();
    }
}