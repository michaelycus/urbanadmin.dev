<?php

class Cidades_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getEstados()
    {
        return $this->db->get('estados')->result();
    }

    function getCidades($id = null)
    {
        if (!is_null($id))
            $this->db->where(array('estados.id' => $id));
        return $this->db->select('cidades.id, cidades.nome')
                        ->from('estados')
                        ->join('cidades', 'cidades.id_uf = estados.id')
                        ->get()->result();
    }
    
    function getRuas($id_bairro = null)
    {          
        return $this->db->select('ruas.id, ruas.nome')
                        ->from('ruas')
                        ->join('rua_bairro', 'rua_bairro.id_rua = ruas.id AND rua_bairro.id_bairro='.$id_bairro)
                        ->get()->result();
        
    }
}