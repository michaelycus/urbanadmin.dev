<?php

class Categorias_requerimento_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'nome',
            'label' => 'NOME',
            'rules' => 'trim|required|max_length[128]',
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
        $this->load->model('secretarias_model');
        $query = $this->get_all();    
                
        foreach ($query as $value)
        {
            $list = $this->get_secretarias_by_categoria($value->id);
            
            $nomes = NULL;
            
            foreach ($list as $id_sec)
            {
                $nomes[] = $this->secretarias_model->get($id_sec->id_secretaria)->sigla;
            }
            
            $value->secretarias = implode (", ", $nomes);
        }
        
        return $query;
    }
        
    public function diminuir_ordem($id)
    {
        $cat_selecionada = $this->get($id);
        
        if ($cat_selecionada->ordem != 1)
        {
            $cat_abaixo = $this->as_object()->get_by('ordem', $cat_selecionada->ordem - 1);
             
             $this->update($cat_abaixo->id, array('ordem' => $cat_abaixo->ordem + 1));
             $this->update($cat_selecionada->id, array('ordem' => $cat_selecionada->ordem - 1));            
        }
    }
    
    public function aumentar_ordem($id)
    {
        $cat_selecionada = $this->get($id);
        
        if ($cat_selecionada->ordem < $this->get_next_id() - 1)
        {
            $cat_acima = $this->as_object()->get_by('ordem', $cat_selecionada->ordem + 1);   
            
            if ($cat_acima != NULL)
            {
                $this->update($cat_acima->id, array('ordem' => $cat_acima->ordem - 1));
                $this->update($cat_selecionada->id, array('ordem' => $cat_selecionada->ordem + 1));
            }
        }
    }
    
    public function reordenar()
    {        
        $cats = $this->order_by('ordem')->get_all();
        
        $i = 0;
        foreach ($cats as $cat)
        {
            $this->update($cat->id, array('ordem' => ++$i));
        }
    }
    
    public function relacao_secretarias($id_categoria, $ids_secretarias)
    {
        $this->db->delete('rel_categorias_secretarias', array('id_categoria' => $id_categoria)); 
        
        foreach ($ids_secretarias as $id_secretaria)
        {
            $data = array(
                'id_categoria' => $id_categoria,
                'id_secretaria' => $id_secretaria
            );
            $this->db->insert('rel_categorias_secretarias', $data); 
        }        
    }
    
    public function get_secretarias_by_categoria($id_categoria)
    {
        return $this->db->select('rel_categorias_secretarias.id_secretaria')
                        ->from('rel_categorias_secretarias')                        
                        ->where('id_categoria', $id_categoria)                        
                        ->get()->result();
    }
}