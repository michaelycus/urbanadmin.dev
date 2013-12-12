<?php

class Login_model extends CI_Model
{
//    public $validation = array(
//        array(
//            'field' => 'cpf',
//            'label' => 'CPF',
//            'rules' => 'required',
//        ),
//        array(
//            'field' => 'password',
//            'label' => 'SENHA',
//            'rules' => 'required|min_length[4]',
//        )
//    );
    
    function __construct()
    {
    }
    
    public function verify_user_cpf($username, $password)
    {
        $q = $this->db->where('cpf', $username)
                      ->where('password', md5($password))
                      ->limit(1)
                      ->get('requerentes');
        
        if ($q->num_rows > 0)
        {
            return $q->row();
        }
        return false;
    }
    
    public function verify_user_cnpj($username, $password)
    {
        $q = $this->db->where('cnpj', $username)
                      ->where('password', md5($password))
                      ->limit(1)
                      ->get('requerentes');
        
        if ($q->num_rows > 0)
        {
            return $q->row();
        }
        return false;
    }
}