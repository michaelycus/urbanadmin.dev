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
}