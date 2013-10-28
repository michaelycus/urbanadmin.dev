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
        $this->db->select('requerimentos.*, bairros.nome AS nome_bairro, 
                    categorias_requerimento.nome AS nome_categoria, requerentes.nome AS nome_requerente');
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
        $this->db->join('categorias_requerimento', 'requerimentos.cat_requerimento=categorias_requerimento.id');
        $this->db->join('requerentes', 'requerimentos.id_requerente=requerentes.id');

        return $this->get_all();
    }
    
    public function count_requerimentos_with_bairros()
    {
        $this->db->select('requerimentos.id_bairro, bairros.codename, COUNT(*) AS count_requerimentos_bairro, 
            bairros.nome AS nome_bairro');
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
        $this->db->group_by('id_bairro');

        return $this->get_all();
    }
    
    public function count_requerimentos_with_categorias()
    {
        $array_cat = $this->categorias_requerimento_model->get_all();        
        $array_result = array();
        
        foreach ($array_cat as $cat)
        { 
            $this->db->select('bairros.nome AS nome_bairro, bairros.codename AS codename, 
                COUNT(bairros.codename) AS count_requerimentos');
            $this->db->where('cat_requerimento', $cat->id);
            $this->db->join('categorias_requerimento', 'requerimentos.cat_requerimento=categorias_requerimento.id');
            $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
            $this->db->group_by('codename');
            
            $array_result[$cat->id] = $this->get_all();
        }
        
        return $array_result;
    }
    
    public function count_requerimentos_with_vereadores()
    {
        $array_vereadores = $this->requerente_model->get_vereadores();        
        $array_result = array();
        
        foreach ($array_vereadores as $ver)
        { 
            $this->db->select('bairros.nome AS nome_bairro, bairros.codename AS codename, 
                COUNT(bairros.codename) AS count_requerimentos');
            $this->db->where('id_requerente', $ver->id);
            $this->db->join('requerentes', 'requerimentos.id_requerente=requerentes.id');
            $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
            $this->db->group_by('codename');
            
            $array_result[$ver->id] = $this->get_all();
        }
        
        return $array_result;
    }
}