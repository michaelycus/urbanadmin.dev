<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requerimentos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('requerimento_model');
        $this->load->model('bairros_model');
        $this->load->model('cidades_model');
        $this->load->model('requerente_model');
        $this->load->model('categorias_requerimento_model');
    }

    public function index()
    {
        $this->listar_requerimentos();
    }

    public function listar_requerimentos()
    {
//        $this->pagination->initialize(array(
//            'base_url' => base_url().'requerimentos/listar_requerimentos',
//            'total_rows' => $this->db->get('requerimentos')->num_rows()
//        ));

//        $this->data['paginacao'] = $this->pagination->create_links();
//        $this->requerimento_model->limit(ITENS_POR_PAGINA, $this->uri->segment(3));
        $this->data['requerimentos'] = $this->requerimento_model->get_requerimentos_with_bairros();

        $this->load_view('requerimentos/listar_requerimentos');
    }

    public function cadastrar_requerimento()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2048';
        $config['max_height'] = '1024';
        $config['encrypt_name'] = TRUE;
        
        $upload_files = FALSE;

        $this->load->library('upload', $config);

        $this->form_validation->set_rules($this->requerimento_model->validation);

        $this->data['bairros'] = $this->bairros_model->get_all();
        $this->data['requerentes'] = $this->requerente_model->get_vereadores();
        $this->data['cats_requerimento'] = $this->categorias_requerimento_model->get_all();
        
        if ($this->form_validation->run()==TRUE):
            $data = elements(array('descricao','id_bairro','id_rua','cat_requerimento','id_requerente'),$this->input->post());
            $data['data_requerimento'] = date('Y-m-d');

            $i = 1;
            foreach($_FILES as $field => $file)
            {
                if ( $_FILES AND $_FILES['anexo_'.$i]['name'] )
                {
                    // So lets upload
                    if ($this->upload->do_upload($field))
                    {
                        $file_data = $this->upload->data();

                        $data['anexo_'.$i] = $file_data['raw_name'].$file_data['file_ext'];

                        $upload_files = TRUE;
                    }
                    else
                    {
                        $this->data['error'] = $this->upload->display_errors();
                    }
                }
                $i++;
            }

            if (!$this->data['error'])
            {
                $this->requerimento_model->insert($data);
                $this->session->set_userdata('requerimento_cadastrado','Requerimento cadastrado com sucesso!');

                redirect('requerimentos/cadastrar_requerimento');
            }
        endif;

        $this->load_view('requerimentos/cadastrar_requerimento');
    }

    public function editar_requerimento()
    {      
        $id = $this->uri->segment(3);
        
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2048';
        $config['max_height'] = '1024';
        $config['encrypt_name'] = TRUE;
        
        $upload_files = FALSE;

        $this->load->library('upload', $config);

        $this->form_validation->set_rules($this->requerimento_model->validation);

        $this->data['bairros'] = $this->bairros_model->get_all();
        $this->data['requerentes'] = $this->requerente_model->get_vereadores();
        $this->data['cats_requerimento'] = $this->categorias_requerimento_model->get_all();

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('descricao','id_bairro','id_rua','cat_requerimento','id_requerente'),$this->input->post());
            $data['data_requerimento'] = date('Y-m-d');

            $i = 1;
            foreach($_FILES as $field => $file)
            {
                if ( $_FILES AND $_FILES['anexo_'.$i]['name'] )
                {
                    // So lets upload
                    if ($this->upload->do_upload($field))
                    {
                        $file_data = $this->upload->data();

                        $data['anexo_'.$i] = $file_data['raw_name'].$file_data['file_ext'];

                        $upload_files = TRUE;
                    }
                    else
                    {
                        $this->data['error'] = $this->upload->display_errors();
                    }
                }
                $i++;
            }

            if (!$this->data['error'])
            {
                $this->requerimento_model->update($data);
                $this->session->set_userdata('requerimento_editado','Requerimento editado com sucesso!');

                redirect('requerimentos/editar_requerimento'.$this->input->post('id'));
            }
        endif;
        
        $this->data['requerimento'] = $this->requerimento_model->get($id);
                
        if ($this->data['requerimento']->id_rua != 0)
            $this->data['ruas'] = $this->cidades_model->getRuas($this->data['requerimento']->id_bairro);

        $this->load_view('requerimentos/editar_requerimento');
    }

    public function excluir_requerimento()
    {
        $id = $this->uri->segment(3);

        $this->requerimento_model->delete($id);
        $this->session->set_userdata('requerimento_excluido','Requerimento excluído com sucesso!');
        redirect('requerimentos/listar_requerimentos');
    }
}