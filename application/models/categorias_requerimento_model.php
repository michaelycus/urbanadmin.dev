<?php

class Categorias_requerimento_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'nome',
            'label' => 'NOME',
            'rules' => 'trim|required|max_length[64]',
        )
    );
    
    protected $soft_delete = TRUE;
    protected $soft_delete_key = 'categoria_deleted';
    
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
        $this->_table = 'categorias_requerimento';
    }
    
    public function get_categorias_with_secretarias()
    {
        $this->db->select('categorias_requerimento.*, secretarias.nome AS nome_secretaria');
        $this->db->join('secretarias', 'secretarias.id=categorias_requerimento.id_secretaria','LEFT');

        return $this->get_all();
    }
}