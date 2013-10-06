<?php

class Admin_model extends CI_Model
{
    public $validation = array(
        array(
            'field' => 'usuario',
            'label' => 'USUARIO',
            'rules' => 'required',
        ),
        array(
            'field' => 'senha',
            'label' => 'SENHA',
            'rules' => 'required|min_length[4]',
        )
    );
    
    function __construct()
    {
    }
    
    public function verify_user($username, $password)
    {
        $q = $this->db->where('usuario', $username)
                      ->where('senha', md5($password))
                      ->limit(1)
                      ->get('usuarios');
        
        if ($q->num_rows > 0)
        {
            return $q->row();
        }
        return false;
    }
}
