<?php

class Requerimento_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'descricao',
            'label' => 'DESCRICAO',
            'rules' => 'required',
        )
    );
    
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
    }
    
    public function get_requerimentos_with_bairros()
    {
        $this->db->select('requerimentos.*, bairros.nome AS nome_bairro');
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');

        return $this->get_all();
    }
    
    public function count_requerimentos_with_bairros()
    {
        $this->db->select('requerimentos.id_bairro,COUNT(*), bairros.nome AS nome_bairro');
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
        $this->db->group_by('id_bairro');

        return $this->get_all();
    }
    
//    SELECT requerimentos.id_bairro,COUNT(*), bairros.nome  
//FROM requerimentos 
//INNER JOIN bairros
//ON requerimentos.id_bairro=bairros.id
//GROUP BY id_bairro;
}