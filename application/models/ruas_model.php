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
    
    function get_ruas_by_bairro($id_bairro)
    {
        $this->db->select('requerimentos.*');
        $this->db->join('rua_bairro', 'rua_bairro.id_rua = ruas.id AND rua_bairro.id_bairro='.$id_bairro);
        
        return $this->get_all();
        
//        return $this->db->select('ruas.id, ruas.nome')
//                        ->from('ruas')
//                        ->join('rua_bairro', 'rua_bairro.id_rua = ruas.id AND rua_bairro.id_bairro='.$id_bairro)
//                        ->get()->result();
    }
    
//    function delete_rua($id)
//    {
//        $this->db->delete($id); 
////        $this->db->delete('ruas', array('id' => $id)); 
//        $this->db->delete('rua_bairro', array('id_rua' => $id)); 
//    }
    
    
    
    
//    
//    
//    
//    function update_rua($id, $data, $bairros)
//    {
//        $this->db->update('ruas', $data); 
//        
//        foreach ($bairros as $bairro)
//        {
//            $this->db->insert('rua_bairro', array('id_rua' => $id, 'id_bairro' => $bairro)); 
//        }
//    }
//    
//    
//
//    function get_ruas_by_bairro($id_bairro = null)
//    {
//        return $this->db->select('ruas.id, ruas.nome')
//                        ->from('ruas')
//                        ->join('rua_bairro', 'rua_bairro.id_rua = ruas.id AND rua_bairro.id_bairro='.$id_bairro)
//                        ->get()->result();
//    }
//    
//    function get_bairro_by_rua($id_rua)
//    {
//        return $this->db->select('rua_bairro.*')
//                        ->from('rua_bairro')                        
//                        ->where('id_rua', $id_rua)                        
//                        ->get()->result();
//    }
    
//    function get_ruas()
//    {
//        $this->db->order_by('nome');
//        
//        return $this->db->get_all();
//        
////        return $this->db->select('ruas.*')
////                        ->from('ruas')                        
////                        ->order_by('nome')
////                        ->get()->result();
//    }

//    function get_rua($id)
//    {
//        $this->db->from('ruas');
//        $this->db->order_by('nome');
//        $this->db->where('id', $id);
//
//        return $this->db->get()->row();
//    }
//    
//    function delete_rua_from_bairro($rua)
//    {
//        $this->db->delete('rua_bairro', array('id_rua' => $rua)); 
//    }
//    
//    function insert_rua_bairros($rua, $bairros)
//    {
//        foreach ($bairros as $bairro)
//        {
//            $this->db->insert('rua_bairro', array('id_rua' => $rua, 'id_bairro' => $bairro)); 
//        }
//    }
//    
//    
//    
//    function delete_rua($id)
//    {
//        $this->db->delete('rua_bairro', array('id_rua' => $id)); 
//        $this->db->delete('ruas', array('id' => $id)); 
//    }
}