<?php

class Categorias_pa_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'titulo',
            'label' => 'CATEGORIA',
            'rules' => 'trim|required|max_length[255]',
        )
    );
    
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
        
        $this->_table = 'categorias_pa';
    }
    
    // -- CATEGORIAS --

//    public function get_categorias($id = NULL)
//    {
//        if ( $id != NULL )
//        {
//            $this->db->where('id',$id);
//        }
//
//        $this->db->order_by('id','asc');
//
//        $query = $this->db->get('categorias_plano_acao');
//
//        $appended_array = array();
//
//        if($query->num_rows() > 0)
//        {
//            return $appended_array = $query->result();
//        }
//        else
//        {
//            return FALSE;
//        }
//    }
//
//    public function get_categoria($id)
//    {
//        $result_array = array();
//        $result_array = $this->get_categorias($id);
//
//        return $result_array[0];
//    }

//    public function add_categoria($data)
//    {
//        if ($data!=NULL)
//        {
//            $this->db->insert('categorias_plano_acao',$data);
//
//            $this->session->set_userdata('categoria_adicionada','Categoria adicionada com sucesso!');
//
//            redirect('plano_acoes/adicionar_categoria');
//        }
//    }
//
//    public function update_categoria($data=NULL,$condition=NULL)
//    {
//        if ($data!=NULL && $condition!=NULL)
//        {
//            $this->db->update('categorias_plano_acao',$data,$condition);
//
//            $this->session->set_userdata('categoria_editada','Categoria editada com sucesso!');
//
//            redirect('plano_acoes/editar_categoria/'.$condition['id']);
//        }
//    }
//
//    public function delete_categoria($id)
//    {
//        if ($id!=NULL)
//        {
//            $this->db->delete('categorias_plano_acao',array('id' => $id));
//
//            $this->session->set_userdata('categoria_excluida','Categoria excluída com sucesso!');
//
//            redirect('plano_acoes/lista_categorias');
//        }
//    }
}