<?php

class Requerente_model extends MY_Model
{
    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
    }

    public function get_requerentes_with_bairros()
    {
        $this->db->select('requerentes.*, bairros.nome AS nome_bairro');
        $this->db->where('mora_cidade', MORA_NA_CIDADE);
        $this->db->where('tipo', !REQUERENTE_TIPO_VEREADOR);
        $this->db->join('bairros', 'requerentes.id_bairro=bairros.id');

        return $this->get_all();
    }

    public function get_requerentes_by_bairro($id_bairro)
    {
        $this->db->where('id_bairro', $id_bairro);
        $this->db->where('tipo', !REQUERENTE_TIPO_VEREADOR);
        $this->db->where('mora_cidade', MORA_NA_CIDADE);

        return $this->get_all();
    }
    
    public function get_requerentes_newsletter_by_bairro($id_bairro)
    {
        if ($id_bairro!=100)
            $this->db->where('id_bairro', $id_bairro);
        $this->db->where('recebe_emails', REQUERENTE_RECEBE_EMAILS);
        $this->db->where('tipo', REQUERENTE_TIPO_CIDADAO);
        $this->db->where('mora_cidade', MORA_NA_CIDADE);

        return $this->get_all();
    }
    
    public function get_requerentes_outras_cidades()
    {
        $this->db->select('requerentes.*, cidades.nome AS cidade, estados.sigla AS estado');
        $this->db->where('mora_cidade', MORA_OUTRA_CIDADE);
        $this->db->join('cidades', 'cidades.id=requerentes.cidade');
        $this->db->join('estados', 'estados.id=requerentes.estado');

        return $this->get_all();
    }

    public function get_vereadores()
    {
        $this->db->select('requerentes.*, bairros.nome AS nome_bairro');
        $this->db->where('tipo', REQUERENTE_TIPO_VEREADOR);
        $this->db->join('bairros', 'requerentes.id_bairro=bairros.id');
        $this->db->order_by('id');

        return $this->get_all();
    }

    public function get_last($num)
    {
        $this->db->order_by('ultima_visita', 'DESC');
        $this->db->limit($num);

        return $this->get_all();
    }

    public function count_requerentes_por_bairro()
    {
        $this->db->select('bairros.nome AS nome_bairro, bairros.codename, COUNT(requerentes.id) AS count_requerentes, requerentes.id_bairro AS id_bairro');
        $this->db->where('mora_cidade', MORA_NA_CIDADE);
        $this->db->where('requerentes.tipo', !REQUERENTE_TIPO_VEREADOR);
        $this->db->join('bairros', 'requerentes.id_bairro=bairros.id');
        $this->db->group_by('requerentes.id_bairro');

        return $this->get_all();
    }
    
    public function count_requerentes()
    {
        $this->db->where('requerentes.tipo', !REQUERENTE_TIPO_VEREADOR);
        $this->db->from('requerentes');

        return $this->db->count_all_results();
    }

    public function update_last_visit($id)
    {
        $data = array('ultima_visita' => date('Y-m-d'));
        $this->update($id, $data);
    }

    public function generate_key($res)
    {
        $key = generate_key(8);

        $data = array('password' => md5($key));
        $this->update($res->id, $data);

        return $key;
    }
    
    public function descadastrar_email($email)
    {
        $data = array('recebe_emails' => REQUERENTE_NAO_RECEBE_EMAILS);
        
        $this->db->where('email', $email);
        $this->db->update('requerentes', $data);
    }
    
    public function has_facebook_id($id_facebook, $id)
    {
        $q = $this->db->where('id_facebook', $id_facebook)
                      ->limit(1)
                      ->get('requerentes');
        
        if ($q->num_rows == 0)
        {
            $data = array('id_facebook' => $id_facebook);
            $this->update($id, $data);
        }
        return false;
    }
}