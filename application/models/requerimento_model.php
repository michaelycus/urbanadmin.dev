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
        $this->db->where('da_sessao !=', REQUERIMENTO_DA_SESSAO);
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id', 'LEFT');
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

    public function get_outros_requerimentos_with_bairros()
    {
        $this->db->select('requerimentos.*, bairros.nome AS nome_bairro,
                    categorias_requerimento.nome AS nome_categoria, requerentes.nome AS nome_requerente,
                    r.nome AS nome_solicitante, r.telefone AS telefone');
        $this->db->where('id_requerente !=', REQUERENTE_PADRAO_ID);
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
        $this->db->join('categorias_requerimento', 'requerimentos.cat_requerimento=categorias_requerimento.id');
        $this->db->join('requerentes', 'requerimentos.id_requerente=requerentes.id');
        $this->db->join('requerentes AS r', 'requerimentos.id_solicitante=r.id');

        $this->order_by('situacao','DESC');

        return $this->get_all();
    }

    public function get_requerimentos_da_sessao_with_bairros()
    {
        $this->db->select('requerimentos.*, bairros.nome AS nome_bairro,
                    categorias_requerimento.nome AS nome_categoria, requerentes.nome AS nome_requerente,
                    r.nome AS nome_solicitante, r.telefone AS telefone');
        $this->db->where('da_sessao', REQUERIMENTO_DA_SESSAO);
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id', 'LEFT');
        $this->db->join('categorias_requerimento', 'requerimentos.cat_requerimento=categorias_requerimento.id');
        $this->db->join('requerentes', 'requerimentos.id_requerente=requerentes.id');
        $this->db->join('requerentes AS r', 'requerimentos.id_solicitante=r.id');

        $this->order_by('situacao','DESC');

        return $this->get_all();
    }

    public function get_requerimentos_by_secretaria_bairro($id_secretaria, $id_bairro)
    {
        // SELECT * FROM `requerimentos` WHERE `cat_requerimento` IN (SELECT id_categoria FROM rel_categorias_secretarias WHERE id_categoria = 1 ) and `id_bairro` =5;

        $query = $this->db->query("SELECT * FROM `requerimentos` WHERE `cat_requerimento`
                IN (SELECT id_categoria FROM rel_categorias_secretarias WHERE id_secretaria = $id_secretaria ) and `id_bairro` = $id_bairro");

        return $query->result();
    }

    public function get_last($num)
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit($num);

        return $this->get_all();
    }

    public function get_requerimentos_by_situacao($cat)
    {
        $this->db->select('requerimentos.*, bairros.nome AS nome_bairro,
                    categorias_requerimento.nome AS nome_categoria, requerentes.nome AS nome_requerente,
                    r.nome AS nome_solicitante, r.telefone AS telefone');
        $this->db->where('da_sessao !=', REQUERIMENTO_DA_SESSAO);
        $this->db->where('id_requerente', REQUERENTE_PADRAO_ID);
        $this->db->where('situacao', $cat);
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
        $this->db->join('categorias_requerimento', 'requerimentos.cat_requerimento=categorias_requerimento.id');
        $this->db->join('requerentes', 'requerimentos.id_requerente=requerentes.id');
        $this->db->join('requerentes AS r', 'requerimentos.id_solicitante=r.id');

        return $this->get_all();
    }

    public function get_requerimentos_by_data($data_inicio, $data_fim)
    {
        $this->db->select('requerimentos.*, bairros.nome AS nome_bairro,
                    categorias_requerimento.nome AS nome_categoria, requerentes.nome AS nome_requerente,
                    r.nome AS nome_solicitante, r.telefone AS telefone');
        $this->db->where("data_requerimento BETWEEN '$data_inicio' AND '$data_fim'");
        $this->db->where('da_sessao !=', REQUERIMENTO_DA_SESSAO);
        $this->db->where('id_requerente', REQUERENTE_PADRAO_ID);
        $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id', 'LEFT');
        $this->db->join('categorias_requerimento', 'requerimentos.cat_requerimento=categorias_requerimento.id');
        $this->db->join('requerentes', 'requerimentos.id_requerente=requerentes.id');
        $this->db->join('requerentes AS r', 'requerimentos.id_solicitante=r.id');

        return $this->get_all();
    }

    public function count_requerimentos_by_mes($data_inicio, $data_fim)
    {
        $this->db->where("data_requerimento BETWEEN '$data_inicio' AND '$data_fim'");
        $this->db->where('da_sessao !=', REQUERIMENTO_DA_SESSAO);
        $this->db->where('id_requerente', REQUERENTE_PADRAO_ID);
        $this->db->from('requerimentos');

        return $this->db->count_all_results();
    }

    public function count_requerimentos_by_situacao($cat)
    {
        $this->db->where('situacao', $cat);
        $this->db->where('da_sessao !=', REQUERIMENTO_DA_SESSAO);
        $this->db->where('id_requerente', REQUERENTE_PADRAO_ID);
        $this->db->from('requerimentos');

        return $this->db->count_all_results();
    }

    public function count_outros_requerimentos()
    {
        $this->db->where('id_requerente !=', REQUERENTE_PADRAO_ID);
        $this->db->from('requerimentos');

        return $this->db->count_all_results();
    }

    public function count_da_sessao()
    {
        $this->db->where('da_sessao', REQUERIMENTO_DA_SESSAO);
        $this->db->from('requerimentos');

        return $this->db->count_all_results();
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
        $array_cat = $this->categoria_requerimento_model->get_all();
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

    public function count_requerimentos_with_secretarias()
    {
        $array_sec = $this->secretaria_model->get_all();
        $array_result = array();

        foreach ($array_sec as $sec)
        {
            $array_cat = $this->categoria_requerimento_model->get_categorias_by_secretaria($sec->id);

            foreach ($array_cat as $cat)
            {
                $this->db->select('bairros.nome AS nome_bairro, bairros.codename AS codename, bairros.id AS bairro_id,
                    COUNT(bairros.codename) AS count_requerimentos');
                $this->db->where('cat_requerimento', $cat->id_categoria);
                $this->db->join('categorias_requerimento', 'requerimentos.cat_requerimento=categorias_requerimento.id');
                $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
                $this->db->group_by('codename');

                $array_result[$sec->id][$cat->id_categoria] = $this->get_all();
            }
        }

        return $array_result;
    }

    public function count_requerimentos_with_situacao()
    {
        $array_result = array();

        // 0 - Em análise
        // 1 - Analisado
        // 2 - Protocolado
        // 3 - Concluído

        for ($i=0; $i < 4; $i++)
        {
            $this->db->select('bairros.nome AS nome_bairro, bairros.codename AS codename,
                COUNT(bairros.codename) AS count_requerimentos');
            $this->db->where('situacao', $i);
            $this->db->where('da_sessao', 0);
            $this->db->join('bairros', 'requerimentos.id_bairro=bairros.id');
            $this->db->group_by('codename');

            $array_result[$i] = $this->get_all();
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

    public function count_meus_requerimentos($id_user)
    {
        $this->db->where('id_solicitante', $id_user);
        $this->db->from('requerimentos');

        return $this->db->count_all_results();
    }

    public function get_requerimento_by_solicitante($id)
    {
        $this->db->where('id_solicitante', $id);

        return $this->get_all();
    }

    public function get_requerimento_by_code($code)
    {
        $q = $this->db->where('code', $code)
                      ->limit(1)
                      ->get('requerimentos');

        if ($q->num_rows > 0)
        {
            return $q->row();
        }
        return false;
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

    public function get_requerimentos_notificar()
    {
        $data = date('Y-m-d', strtotime(date('Y-m-d'). ' - 30 days'));

        $this->db->select('requerimentos.*, requerentes.nome AS nome_solicitante,
                           requerentes.email AS email');
        $this->db->where('data_requerimento', $data);
        $this->db->where('da_sessao !=', REQUERIMENTO_DA_SESSAO);
        $this->db->where('id_requerente', REQUERENTE_PADRAO_ID);
        $this->db->where('situacao', REQUERIMENTO_SITUACAO_PROTOCOLADO);
        $this->db->where('status_retorno', REQUERIMENTO_RETORNO_NAO_NOTIFICADO);
        $this->db->where('notificar', 1);
        $this->db->join('requerentes', 'requerimentos.id_solicitante=requerentes.id');

        return $this->get_all();
    }
}