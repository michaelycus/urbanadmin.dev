<?php

class Login_model extends MY_Model
{
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
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

    public function verify_user_cpf_exists($username, $email)
    {
        $q = $this->db->where('cpf', $username)
                      ->where('email', $email)
                      ->limit(1)
                      ->get('requerentes');

        if ($q->num_rows > 0)
        {
            return $q->row();
        }
        return false;
    }

    public function verify_user_cnpj_exists($username, $email)
    {
        $q = $this->db->where('cnpj', $username)
                      ->where('email', $email)
                      ->limit(1)
                      ->get('requerentes');

        if ($q->num_rows > 0)
        {
            return $q->row();
        }
        return false;
    }
}