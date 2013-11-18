<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requerentes extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();      
        $this->load->model('requerente_model');
        $this->load->model('bairros_model');
    }

    public function index()
    {
        $this->da_cidade();
    }

    public function da_cidade()
    {
        $this->pagination->initialize(array(
            'base_url' => base_url().'requerentes/da_cidade',
            'total_rows' => $this->db->get('requerentes')->num_rows()
        ));
        
        $this->data['paginacao'] = $this->pagination->create_links();
        $this->requerente_model->limit(ITENS_POR_PAGINA, $this->uri->segment(3));
        $this->data['requerentes'] = $this->requerente_model->get_requerentes_with_bairros();

        $this->load_view('requerentes/da_cidade');
    }
    
    public function de_outras_cidades()
    {
        $this->pagination->initialize(array(
            'base_url' => base_url().'requerentes/de_outras_cidades',
            'total_rows' => $this->db->get('requerentes')->num_rows()
        ));
        
        $this->data['paginacao'] = $this->pagination->create_links();
        $this->requerente_model->limit(ITENS_POR_PAGINA, $this->uri->segment(3));
        $this->data['requerentes'] = $this->requerente_model->get_requerentes_outras_cidades();

        $this->load_view('requerentes/de_outras_cidades');
    }
    
    public function vereadores()
    {
        $this->pagination->initialize(array(
            'base_url' => base_url().'requerentes/vereadores',
            'total_rows' => $this->db->get('requerentes')->num_rows()
        ));
        
        $this->data['paginacao'] = $this->pagination->create_links();
        $this->requerente_model->limit(ITENS_POR_PAGINA, $this->uri->segment(3));
        $this->data['requerentes'] = $this->requerente_model->get_vereadores();

        $this->load_view('requerentes/vereadores');
    }

    public function cadastrar_requerente()
    {
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|max_length[64]');            
        if ($this->input->post('pessoa_fisica') == PESSOA_FISICA)
            $this->form_validation->set_rules('cpf', 'CPF', 'required|valid_cpf|is_unique[requerentes.cpf]');            
        if ($this->input->post('pessoa_fisica') == PESSOA_JURIDICA)
            $this->form_validation->set_rules('cnpj', 'CNPJ', 'required|valid_cnpj|is_unique[requerentes.cnpj]');            
        $this->form_validation->set_rules('email', 'E-MAIL', 'required|valid_email|is_unique[requerentes.email]');            
        if ($this->input->post('mora_cidade') == MORA_NA_CIDADE)
            $this->form_validation->set_rules('id_bairro', 'BAIRRO', 'required');  
        if ($this->input->post('mora_cidade') == MORA_OUTRA_CIDADE)
        {
            $this->form_validation->set_rules('estado', 'CIDADE', 'required');  
            $this->form_validation->set_rules('cidade', 'ESTADO', 'required');  
        }
            

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','pessoa_fisica','cpf','cnpj','rg','email','telefone',
                                   'profissao','endereco','mora_cidade','id_bairro',
                                   'estado','cidade','cep'),$this->input->post());
            $data['data_cadastro'] = date('Y-m-d');
            
            $this->requerente_model->insert($data);                        
            $this->session->set_userdata('requerente_cadastrado','Requerente cadastrado com sucesso!');            
            redirect('requerentes/cadastrar_requerente');     
        endif;
        
        $this->data['bairros'] = $this->bairros_model->get_all();
        
        $this->load->model('cidades_model');
        $this->data['estados'] = $this->cidades_model->getEstados();
        
        $this->load_view('requerentes/cadastrar_requerente');
    }

    public function editar_requerente()
    {
        $id = $this->uri->segment(3);

        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|max_length[64]');            
        if ($this->input->post('pessoa_fisica') == PESSOA_FISICA)
            $this->form_validation->set_rules('cpf', 'CPF', 'required|valid_cpf');            
        if ($this->input->post('pessoa_fisica') == PESSOA_JURIDICA)
            $this->form_validation->set_rules('cnpj', 'CNPJ', 'required|valid_cnpj');            
        $this->form_validation->set_rules('email', 'E-MAIL', 'required|valid_email'); 
        
        if ($this->form_validation->run()==TRUE):
            $data = elements(array('nome','pessoa_fisica','cpf','cnpj','rg','email','telefone',
                                   'profissao','endereco','mora_cidade','id_bairro',
                                   'estado','cidade','cep'),$this->input->post());
            
            $this->requerente_model->update($this->input->post('id'), $data);
            $this->session->set_userdata('requerente_editado','Requerente editado com sucesso!');
            redirect('requerentes/editar_requerente/'.$this->input->post('id'));   
        endif;
        
        $this->data['requerente'] = $this->requerente_model->get($id);
        $this->data['bairros'] = $this->bairros_model->get_all();
        
        $this->load->model('cidades_model');
        $this->data['estados'] = $this->cidades_model->getEstados();
        
        if ($this->data['requerente']->estado != 0)
            $this->data['cidades'] = $this->cidades_model->getCidades($this->data['requerente']->estado);

        $this->load_view('requerentes/editar_requerente');
    }

    public function excluir_requerente()
    {
        $id = $this->uri->segment(3);
        $path = $this->uri->segment(4);
        
        $this->requerente_model->delete($id);
        $this->session->set_userdata('requerente_excluido','Requerente excluído com sucesso!');
        redirect('requerentes/'.$path);
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