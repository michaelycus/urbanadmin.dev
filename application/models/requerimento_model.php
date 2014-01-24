<?php

class Requerimento_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'descricao',
            'label' => 'DESCRICAO',
            'rules' => 'required',
        ),
        array(
            'field' => 'data_requerimento',
            'label' => 'DATA',
            'rules' => 'required|valid_date',
        ),
        array(
            'field' => 'id_bairro',
            'label' => 'BAIRRO',
            'rules' => 'required',
        )
    );

    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
    }

    public function get_requerimentos_with_bairros()
    {
        $this->db->select('requerimentos.*, bairros.nome AS nome_bairro,
                    categorias_requerimento.nome AS nome_categoria, requerentes.nome AS nome_requerente,
                    r.nome AS nome_solicitante, r.telefone AS telefone');
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
        $this->db->join('categorias_requerimento', 'requerimentos.cat_requerimento=categorias_requerimento.id');
        $this->db->join('requerentes', 'requerimentos.id_requerente=requerentes.id');
        $this->db->join('requerentes AS r', 'requerimentos.id_solicitante=r.id');

        $this->order_by('situacao','DESC');

        return $this->get_all();
    }

    public function get_requerimentos_by_bairro($id_bairro)
    {
        $this->db->where('id_bairro', $id_bairro);

        return $this->get_all();
    }

    public function get_meus_requerimentos_with_bairros($id_user)
    {
        $this->db->select('requerimentos.*, bairros.nome AS nome_bairro,
                    categorias_requerimento.nome AS nome_categoria, requerentes.nome AS nome_requerente');
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
        $this->db->join('categorias_requerimento', 'requerimentos.cat_requerimento=categorias_requerimento.id');
        $this->db->join('requerentes', 'requerimentos.id_solicitante=requerentes.id');
        $this->db->where('id_solicitante', $id_user);

        return $this->get_all();
    }

    public function get_last($num)
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit($num);

        return $this->get_all();
    }

    public function count_requerimentos_by_situacao($cat)
    {
        $this->db->where('situacao', $cat);
        $this->db->from('requerimentos');

        return $this->db->count_all_results();;
    }

    public function count_requerimentos_with_bairros()
    {
        $this->db->select('requerimentos.id_bairro AS id_bairro, bairros.codename, COUNT(*) AS count_requerimentos_bairro,
            bairros.nome AS nome_bairro');
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
        $this->db->group_by('id_bairro');

        return $this->get_all();
    }

    public function count_requerimentos_with_categorias()
    {
        $array_cat = $this->categorias_requerimento_model->get_all();
        $array_result = array();

        foreach ($array_cat as $cat)
        {
            $this->db->select('bairros.nome AS nome_bairro, bairros.codename AS codename,
                COUNT(bairros.codename) AS count_requerimentos');
            $this->db->where('cat_requerimento', $cat->id);
            $this->db->join('categorias_requerimento', 'requerimentos.cat_requerimento=categorias_requerimento.id');
            $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
            $this->db->group_by('codename');

            $array_result[$cat->id] = $this->get_all();
        }

        return $array_result;
    }

    public function count_requerimentos_with_vereadores()
    {
        $array_vereadores = $this->requerente_model->get_vereadores();
        $array_result = array();

        foreach ($array_vereadores as $ver)
        {
            $this->db->select('bairros.nome AS nome_bairro, bairros.codename AS codename,
                COUNT(bairros.codename) AS count_requerimentos');
            $this->db->where('id_requerente', $ver->id);
            $this->db->join('requerentes', 'requerimentos.id_requerente=requerentes.id');
            $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
            $this->db->group_by('codename');

            $array_result[$ver->id] = $this->get_all();
        }

        return $array_result;
    }

    public function get_requerimento_by_solicitante($id)
    {
        $this->db->where('id_solicitante', $id);

        return $this->get_all();
    }

    public function count_requerimentos_em_analise()
    {
        $this->db->where('requerimentos.situacao', REQUERIMENTO_SITUACAO_EM_ANALISE);

        return $this->count_by();
    }

    public function avancar_situacao($id, $situacao)
    {
        $data = array('situacao' => $situacao+1);
        $this->update($id, $data);
    }

    public function retornar_situacao($id, $situacao)
    {
        $data = array('situacao' => $situacao-1);
        $this->update($id, $data);
    }

    public function gravar_expediente($id, $expediente, $ano)
    {
        $data = array('expediente' => $expediente, 'ano_expediente' => $ano);
        $this->update($id, $data);
    }
}