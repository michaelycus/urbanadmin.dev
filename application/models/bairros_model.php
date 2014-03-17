<?php

class Bairros_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'nome',
            'label' => 'NOME',
            'rules' => 'trim|required|max_length[64]',
        )
    );

    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
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