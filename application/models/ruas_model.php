<?php

class Ruas_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'nome',
            'label' => 'NOME',
            'rules' => 'trim|required|max_length[64]',
        )
    );
    
    protected $soft_delete = TRUE;
    
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
        $this->_table = 'ruas';
    }
    
    function get_ruas_by_bairro($id_bairro)
    {
        $this->db->select('ruas.id, ruas.nome');
        $this->db->join('rua_bairro', 'rua_bairro.id_rua = ruas.id AND rua_bairro.id_bairro='.$id_bairro);       
        
        return $this->get_all();        
    }
    
    function insert_rua($data, $bairros)
    {
        $id = $this->get_next_id();        
        
        $this->db->insert('ruas', $data); 
        
        foreach ($bairros as $bairro)
        {
            $this->db->insert('rua_bairro', array('id_rua' => $id, 'id_bairro' => $bairro)); 
        }
    }
    
    function insert_rua_bairros($rua, $bairros)
    {
        foreach ($bairros as $bairro)
        {
            $this->db->insert('rua_bairro', array('id_rua' => $rua, 'id_bairro' => $bairro)); 
        }
    }
    
    function delete_rua_from_bairro($rua)
    {
        $this->db->delete('rua_bairro', array('id_rua' => $rua)); 
    }    
}