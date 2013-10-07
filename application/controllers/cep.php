<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cep extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
//        $this->load->model('cidades_model');
//        $this->data['title'] = 'Exemplo de Combos Dependentes';
//        $this->data['estados'] = $this->cidades_model->getEstados();
////        $this->data['cidades'] = $this->cidades_model->getCidades(5);
////        $this->load->view('teste_cep', $dados);
//        
//        $this->load_view('teste');
        
        $this->load->model('cidades_model');
        $dados['title']   = 'Exemplo de Combos Depe';
        $dados['estados'] = $this->cidades_model->getEstados();
        $this->load->view('teste_cep', $dados);
    }
    
    function getCidades($id)
    {
        $this->load->model('cidades_model');

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
}