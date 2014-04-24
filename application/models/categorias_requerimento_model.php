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
}