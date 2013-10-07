<?php

class Acoes_model extends CI_Model
{        
    public $validation = array(
        array(
            'field' => 'titulo',
            'label' => 'TÍTULO',
            'rules' => 'trim|required|max_length[255]',
        ),
        array(
            'field' => 'data',
            'label' => 'DATA',
            'rules' => 'required|valid_date',
        )
    );
    
    function __construct()
    {
    }
    
    public function get_acoes_corretivas($id = NULL)
    {
        if ( $id != NULL )
        {
            $this->db->where('id',$id);
        }

        $this->db->order_by('id','desc');
        
        $query = $this->db->get('acoes_corretivas');

        $appended_array = array();

        if($query->num_rows() > 0)
        {
            return $appended_array = $query->result();
        }
        else
        {
            return FALSE;
        }
    }
    
    public function get_acao_corretiva($id)
    {
        $result_array = array();        
        $result_array = $this->get_acoes_corretivas($id);
        
        return $result_array[0];
    }
    
    public function get_lista_acoes_corretivas($per_page, $offset)
    {
        $this->db->limit($per_page,$offset);
        return $this->get_acoes_corretivas();
    }
    
    public function add_acao_corretiva($data)
    {
        if ($data!=NULL)
        {
            $this->db->insert('acoes_corretivas',$data);            
            
            $this->session->set_userdata('acao_corretiva_adicionada','Ação corretiva adicionada com sucesso!');
            
            redirect('memorias/adicionar_acao_corretiva');
        }
    }
    
    public function update_acao_corretiva($data=NULL,$condition=NULL)
    {
        if ($data!=NULL && $condition!=NULL)
        {
            $this->db->update('acoes_corretivas',$data,$condition);

            $this->session->set_userdata('acao_corretiva_editada','Ação corretiva editada com sucesso!');

            redirect('memorias/editar_acao_corretiva/'.$condition['id']);
        }
    }
    
    public function delete_acao_corretiva($id)
    {
        if ($id!=NULL)
        {
            $this->db->delete('acoes_corretivas',array('id' => $id));

            $this->session->set_userdata('acao_corretiva_excluida','Ação corretiva excluída com sucesso!');

            redirect('memorias/lista_acoes_corretivas');
        }
    }
}