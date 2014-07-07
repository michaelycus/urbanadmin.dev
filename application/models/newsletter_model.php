<?php

class Newsletter_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'assunto',
            'label' => 'ASSUNTO',
            'rules' => 'trim|required',
        ),
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
    
    public function get_newsletters_by_bairro($id_bairro)
    {
        $this->db->where('id_bairro', $id_bairro);

        return $this->get_all();
    }
    
    public function count_newsletter_por_bairro()
    {
        $this->db->select('bairros.nome AS nome_bairro, bairros.codename, COUNT(newsletters.id) AS count_newsletters, newsletters.id_bairro AS id_bairro');
        $this->db->join('bairros', 'newsletters.id_bairro=bairros.id');
        $this->db->group_by('newsletters.id_bairro');

        return $this->get_all();
    }
}