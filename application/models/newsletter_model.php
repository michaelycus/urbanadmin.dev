<?php

class Newsletter_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'mensagem',
            'label' => 'MENSAGEM',
            'rules' => 'trim|required',
        )
    );
    
    protected $soft_delete = TRUE;
    protected $soft_delete_key = 'newsletter_deleted';

    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
        $this->_table = 'newsletters';
    }
    
    public function get_newsletters_with_bairros()
    {
        $this->db->select('newsletters.*, bairros.nome AS nome_bairro');
        $this->db->join('bairros', 'newsletters.id_bairro=bairros.id', 'LEFT');

        return $this->get_all();
    }
}