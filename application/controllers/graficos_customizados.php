<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graficos_Customizados extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('requerimento_model');
        $this->load->model('bairros_model');
        $this->load->model('graficos_customizados_model');
    }

    public function index()
    {
        $this->listar_graficos();
    }

    public function criar_grafico()
    {
        $this->data['bairros'] = $this->bairros_model->get_bairros();

        $this->load_view('graficos_customizados/criar_grafico');
    }

    public function editar_grafico($id)
    {
        $this->data['bairros'] = $this->bairros_model->get_bairros();
        $this->data['grafico'] = $this->graficos_customizados_model->get($id);
        $this->data['valores_bairros'] = $this->graficos_customizados_model->get_chart_values($id);
        
        // Checa se o gráfico pertence ao usuário
        if ($this->data['grafico']->id_requerente == $_SESSION['id_user'])
        {
            $this->load_view('graficos_customizados/editar_grafico');
        }
        else
        {
            $this->listar_graficos();
        }
    }

    public function listar_graficos()
    {
        $this->data['charts'] = $this->graficos_customizados_model->get_charts_with_requerentes_by_requerente($_SESSION['id_user']);

        $this->load_view('graficos_customizados/listar_graficos');
    }

    public function visualizar()
    {        
        $id = $this->graficos_customizados_model->get_next_id() - 1;
        $this->data['chart_values'] = $this->graficos_customizados_model->get_chart_values($id);
        $this->data['chart'] = $this->graficos_customizados_model->get($id);    
        
        $this->load_view('graficos_customizados/visualizar');
    }

    public function visualizar_grafico($id)
    {
        $this->data['chart_values'] = $this->graficos_customizados_model->get_chart_values($id);
        $this->data['chart'] = $this->graficos_customizados_model->get($id);
        
        $this->data['bairros'] = $this->bairros_model->get_all();
        
        if ($this->data['chart']->id_requerente == $_SESSION['id_user'])
        {
            $this->load_view('graficos_customizados/visualizar');
        }
        else
        {
            $this->listar_graficos();
        }
    }
   
    public function excluir_grafico($id)
    {
        $this->data['chart'] = $this->graficos_customizados_model->get($id);
        
        if ($this->data['chart']->id_requerente == $_SESSION['id_user'])
        {
            //deleta arquivo js
            $chart = $this->graficos_customizados_model->get($id);
            delete_chart($chart->code);
            
            //deleta banco
            $this->graficos_customizados_model->delete($id);

            $this->session->set_userdata('grafico_excluido','Gráfico excluído com sucesso!');
            redirect('graficos_customizados/listar_graficos');
        }        
        else
        {
            $this->listar_graficos();
        }
   }

    public function gerar_grafico()
    {
        $next_id = $this->graficos_customizados_model->get_next_id();

        $data = elements(array('titulo','tipo','fonte','observacoes','cor_grafico','formato'),$this->input->post());
        
        $data['data'] = date('Y-m-d');
        $data['id_requerente'] = $_SESSION['id_user'];
        $data['dados_grafico'] = $this->input->post('dados_grafico') ? 1 : 0;
        $data['dados_tabela'] = $this->input->post('dados_tabela') ? 1 : 0;
        
        $data['code'] = generate_key(8);

        $this->graficos_customizados_model->insert($data);

        $bairros = $this->bairros_model->get_bairros();

        foreach ($bairros as $bairro)
        {
            $data_bairro['id_grafico'] = $next_id;
            $data_bairro['id_bairro'] = $bairro->id;

            if ($this->input->post('bairro_'.$bairro->codename))
                $data_bairro['valor'] = $this->input->post('bairro_'.$bairro->codename);
//                $data_bairro['valor'] = str_replace(',','.',$this->input->post('bairro_'.$bairro->codename)); 
           else
                $data_bairro['valor'] = NULL;

            $this->graficos_customizados_model->inserir_dados_bairro($data_bairro);
        }

        generate_custom_chart($next_id);
    }
    
    public function atualizar_grafico($id)
    {
        $data = elements(array('titulo','tipo','fonte','observacoes','cor_grafico','formato'),$this->input->post());
        
        $data['dados_grafico'] = $this->input->post('dados_grafico') ? 1 : 0;
        $data['dados_tabela'] = $this->input->post('dados_tabela') ? 1 : 0;

        $this->graficos_customizados_model->update($id, $data);

        $bairros = $this->bairros_model->get_bairros();
        
        $this->graficos_customizados_model->deletar_dados_bairro($id);

        foreach ($bairros as $bairro)
        {
            $data_bairro['id_grafico'] = $id;
            $data_bairro['id_bairro'] = $bairro->id;

            if ($this->input->post('bairro_'.$bairro->codename))
                $data_bairro['valor'] = $this->input->post('bairro_'.$bairro->codename);
//                $data_bairro['valor'] = str_replace(',','.',$this->input->post('bairro_'.$bairro->codename));
            else
                $data_bairro['valor'] = NULL;

            $this->graficos_customizados_model->inserir_dados_bairro($data_bairro);
        }

        generate_custom_chart($id);
    }
    
    public function incorporar($code)
    {
        $this->data['chart'] = $chart = $this->graficos_customizados_model->get_by_code($code);        
        $this->data['chart_values'] = $this->graficos_customizados_model->get_chart_values($chart->id);        
        
        $this->data['bairros'] = $this->bairros_model->get_all();
        
        $this->load->view('graficos_customizados/incorporar', $this->data);
    }
}