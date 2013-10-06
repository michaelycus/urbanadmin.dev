<?php

class Usuarios_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'nome',
            'label' => 'NOME',
            'rules' => 'trim|required|max_length[64]',
        ),
        array(
            'field' => 'usuario',
            'label' => 'USUÁRIO',
            'rules' => 'trim|required|max_length[64]|is_unique[usuarios.usuario]',
        ),
        array(
            'field' => 'senha',
            'label' => 'SENHA',
            'rules' => 'trim|required|min_length[3]|matches[senha2]',
        ),
        array(
            'field' => 'senha2',
            'label' => 'SENHA2',
            'rules' => 'trim|required|min_length[3]',
        ),
        array(
            'field' => 'email',
            'label' => 'EMAIL',
            'rules' => 'trim|required|valid_email|is_unique[usuarios.email]',
        )
    );
        
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
    }
    
//    public function get_usuarios($id = NULL)
//    {
//        if ( $id != NULL )
//        {
//            $this->db->where('id',$id);
//        }
//
//        $query = $this->db->get('usuarios');
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
//    public function get_usuario($id,$value)
//    {
//        $result_array = array();
//        $result_array = $this->get_usuarios($id);
//        
//        if (isset($result_array[0]->$value))
//            return $result_array[0]->$value;
//        else
//            return $result_array[0];
//    }
//    
//    public function get_usuarios_ativos()
//    {
//        $this->db->where('status', USUARIO_ATIVO);        
//        
//        return $this->get_usuarios();
//    }
    
//    public function add_usuario($data)
//    {
//        if ($data!=NULL)
//        {
//            $this->db->insert('usuarios',$data);            
//            
//            $this->session->set_userdata('usuario_adicionado','Usuário adicionado com sucesso!');
//            
//            redirect('usuarios/adicionar');
//        }
//    }
}