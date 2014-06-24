<?php

class Bairro_model extends MY_Model
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
        $this->_table = 'bairros';
    }

    public function get_bairros()
    {
        $this->db->where('id !=', -1);
        return $this->get_all();
    }
    
    public function get_bairro_by_rua($id_rua)
    {
        return $this->db->select('rua_bairro.*')
                        ->from('rua_bairro')                        
                        ->where('id_rua', $id_rua)                        
                        ->get()->result();
    }
}