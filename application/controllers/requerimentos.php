<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requerimentos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('requerimento_model');
        $this->load->model('bairros_model');
    }

    public function index()
    {
        $this->listar_requerimentos();
    }

    public function listar_requerimentos()
    {
        $this->pagination->initialize(array(
            'base_url' => base_url().'requerimentos/listar_requerimentos',
            'total_rows' => $this->db->get('requerimentos')->num_rows()
        ));

        $this->data['paginacao'] = $this->pagination->create_links();
        $this->requerimento_model->limit(ITENS_POR_PAGINA, $this->uri->segment(3));
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

        $this->load->library('upload', $config);

        $this->form_validation->set_rules($this->requerimento_model->validation);

        $this->data['bairros'] = $this->bairros_model->get_all();

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('titulo','descricao','id_bairro'),$this->input->post());
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

            if ($upload_files)
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

        $this->load->library('upload', $config);

        $this->form_validation->set_rules($this->requerimento_model->validation);

        $this->data['bairros'] = $this->bairros_model->get_all();

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('titulo','descricao','id_bairro'),$this->input->post());
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

            if ($upload_files)
            {
                $this->requerimento_model->update($data);
                $this->session->set_userdata('requerimento_editado','Requerimento editado com sucesso!');

                redirect('requerimentos/editar_requerimento'.$this->input->post('id'));
            }
        endif;
        
        $this->data['requerimento'] = $this->requerimento_model->get($id);

        $this->load_view('requerimentos/editar_requerimento');
                
        

//        $this->form_validation->set_rules($this->memorias_model->validation);
//
//        if ($this->form_validation->run()==TRUE):
//            $data = elements(array('nome','horario','local','pauta','participantes','principais_topicos','decisoes'),$this->input->post());
//            $data['quando'] = $this->form_validation->convert_human_to_sql($_POST['quando']);
//
//            $this->memorias_model->update($this->input->post('id'), $data);
//            $this->session->set_userdata('memoria_editada','Memória editada com sucesso!');
//            redirect('memorias/editar_memoria/'.$this->input->post('id'));
//        endif;
//
//        $this->data['memorias'] = $this->memorias_model->get($id);
//
//        $this->load_view('memorias/editar_memoria');
    }

    public function excluir_requerimento()
    {
        $id = $this->uri->segment(3);

        $this->memorias_model->delete($id);
        $this->session->set_userdata('memoria_excluida','Memória excluída com sucesso!');
        redirect('memorias/lista_memorias');
    }
}