<?php

class Memorias_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'nome',
            'label' => 'NOME',
            'rules' => 'trim|required|max_length[64]',
        ),
        array(
            'field' => 'quando',
            'label' => 'QUANDO',
            'rules' => 'required|valid_date',
        )
    );
    
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
    }
//    
//    public function get_memorias($id = NULL)
//    {
//        if ( $id != NULL )
//        {
//            $this->db->where('id',$id);
//        }
//
//        $this->db->order_by('quando','desc');
//        
//        $query = $this->db->get('memorias');
//
//        $appended_memorias_array = array();
//
//        if($query->num_rows() > 0)
//        {
//            return $appended_memorias_array = $query->result();
//        }
//        else
//        {
//            return FALSE;
//        }
//    }
//    
//    public function get_memoria($id)
//    {
//        $result_array = array();        
//        $result_array = $this->get_memorias($id);
//        
//        return $result_array[0];
//    }
//    
//    public function get_lista_memorias($per_page, $offset)
//    {
//        $this->db->limit($per_page,$offset);
//        return $this->get_all();
//    }
    
//    public function add_memoria($data)
//    {
//        $this->insert($data);                        
//        $this->session->set_userdata('memoria_adicionada','Memória adicionada com sucesso!');            
//        redirect('memorias/adicionar_memoria');     
//    }
//    
//    public function update_memoria($id, $data=NULL)
//    {        
//        $this->update($id, $data);
//        $this->session->set_userdata('memoria_editada','Memória editada com sucesso!');
//        redirect('memorias/editar_memoria/'.$id);        
//    }
//    
//    public function delete_memoria($id)
//    {
//        $this->db->delete('memorias',array('id' => $id));
//        $this->session->set_userdata('memoria_excluida','Memória excluída com sucesso!');
//        redirect('memorias/lista_memorias');        
//    }
}