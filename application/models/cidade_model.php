<?php

class Cidade_model extends CI_Model
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
        $this->_table = 'cidades';
    }
    
    function get_cidade($id)
    {
        $this->db->from('cidades');
        $this->db->where('id', $id);

        return $this->db->get()->row();
    }    

    function get_cidades($id_estado = null)
    {
        if (!is_null($id_estado))
            $this->db->where(array('estados.id' => $id_estado));
        return $this->db->select('cidades.id, cidades.nome')
                        ->from('estados')
                        ->where('cidades.id !=',CIDADE_PADRAO_ID)
                        ->join('cidades', 'cidades.id_uf = estados.id')
                        ->get()->result();
    }
    
    function get_estado($id)
    {
        $this->db->from('estados');
        $this->db->where('id', $id);

        return $this->db->get()->row();
    }
    
    function get_estados()
    {
        return $this->db->get('estados')->result();
    }
}