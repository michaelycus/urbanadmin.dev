<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cep extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('cidades_model');
        $this->load->model('requerimento_model');
    }

    function getCidades($id)
    {
        $cidades = $this->cidades_model->getCidades($id);

        if (empty($cidades))
            return '{ "nome": "Nenhuma cidade encontrada" }';

        $arr_cidade = array();

        foreach ($cidades as $cidade)
        {
            $arr_cidade[] = '{"id":' . $cidade->id . ',"nome":"' . $cidade->nome . '"}';
        }

        echo '[ ' . implode(",", $arr_cidade) . ']';

        return;
    }

    function getRuas($id)
    {
        $ruas = $this->cidades_model->getRuas($id);

        if (empty($ruas))
            return '{ "nome": "Nenhuma rua encontrada" }';

        $arr_rua = array();

        foreach ($ruas as $rua)
        {
            $arr_rua[] = '{"id":' . $rua->id . ',"nome":"' . $rua->nome . '"}';
        }

        echo '[ ' . implode(",", $arr_rua) . ']';

        return;
    }

    function getRequerimentos($id_bairro)
    {
        $requerimentos = $this->requerimento_model->get_requerimentos_by_bairro($id_bairro);

        if (empty($requerimentos))
            return '{ "descricao": "Nenhum requerimento encontrado" }';

        $arr_req = array();

        foreach ($requerimentos as $req)
        {
            $arr_req[] = '{"id":' . $req->id . ',"descricao":"' . substr($req->descricao, 0, 128)  . '"}';
        }

        echo '[ ' . implode(",", $arr_req) . ']';

        return;
    }
}