<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cidades extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('cidades_model');
        $this->load->model('requerimento_model');
    }

    function get_cidades_ajax($id_estado)
    {
        $cidades = $this->cidades_model->get_cidades($id_estado);

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
}