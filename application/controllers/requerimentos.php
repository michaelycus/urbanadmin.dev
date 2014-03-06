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
        $this->data['requerimentos'] = $this->requerimento_model->get_requerimentos_with_bairros();

        $this->load_view('requerimentos/listar_requerimentos', TRUE);
    }

    public function meus_requerimentos()
    {
        $this->data['requerimentos'] = $this->requerimento_model->get_meus_requerimentos_with_bairros($_SESSION['id_user']);

        $this->load_view('requerimentos/meus_requerimentos');
    }
    
    public function em_analise()            
    {
        $this->data['requerimentos'] = $this->requerimento_model->get_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_EM_ANALISE);
        
        $this->load_view('requerimentos/em_analise', TRUE);
    }
    
    public function analisados()            
    {
        $this->data['requerimentos'] = $this->requerimento_model->get_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_ANALISADO);
        
        $this->load_view('requerimentos/analisados', TRUE);
    }
    
    public function protocolados()            
    {
        $this->data['requerimentos'] = $this->requerimento_model->get_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_PROTOCOLADO);
        
        $this->load_view('requerimentos/protocolados', TRUE);
    }
    
    public function concluidos()            
    {
        $this->data['requerimentos'] = $this->requerimento_model->get_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_RESOLVIDO);
        
        $this->load_view('requerimentos/concluidos', TRUE);
    }

    public function da_sessao()
    {
        $this->data['requerimentos'] = $this->requerimento_model->get_requerimentos_da_sessao_with_bairros();

        $this->load_view('requerimentos/da_sessao', TRUE);
    }
    
    // decrepted
    public function outros_requerimentos()
    {
        $this->data['requerimentos'] = $this->requerimento_model->get_outros_requerimentos_with_bairros();

        $this->load_view('requerimentos/outros_requerimentos', TRUE);
    }

    public function cadastrar_requerimento()
    {
        $this->load->library('image_lib');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '8000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        $this->form_validation->set_rules($this->requerimento_model->validation);

        $this->data['bairros'] = $this->bairros_model->get_bairros();
        $this->data['requerentes'] = $this->requerente_model->get_vereadores();
        $this->data['solicitantes'] = $this->requerente_model->get_all();
        $this->data['cats_requerimento'] = $this->categorias_requerimento_model->get_all();

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('descricao','id_bairro','id_rua','cat_requerimento',
                'id_requerente','id_solicitante','da_sessao'),$this->input->post());
            $data['data_requerimento'] = $this->form_validation->convert_human_to_sql($_POST['data_requerimento']);

            $data['descricao_original'] = $this->input->post('descricao');

            $data['notificar'] = $this->input->post('notificar') ? 1 : 0;

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

                        // thumbnail
                        $config = array(
                            'source_image' => $file_data['full_path'],
                            'new_image' => './uploads/thumbs/',
                            'maintain_ratio' => true,
                            'width' => 100,
                            'height' => 75
                        );

                        $this->image_lib->initialize($config);
                        $this->image_lib->resize();

                        if ($file_data['image_width'] > 1024 || $file_data['image_height'] > 1024)
                        {
                            // resized
                            $config = array(
                               'source_image' => $file_data['full_path'],
                               'new_image' => './uploads/',
                               'maintain_ratio' => true,
                               'width' => 1024,
                               'height' => 1024
                           );

                            $this->image_lib->initialize($config);
                            $this->image_lib->resize();
                        }
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
                generate_charts();

                if ($_SESSION['autorizacao']==AUTORIZACAO_OPERADOR)
                {
                    alert_requirement($this->requerimento_model->get_next_id()-1);
                }

                $this->session->set_userdata('requerimento_cadastrado','Requerimento cadastrado com sucesso!');

                redirect('requerimentos/cadastrar_requerimento');
            }
        endif;

        $this->load_view('requerimentos/cadastrar_requerimento');
    }

    public function editar_requerimento($id)
    {
        $this->load->library('image_lib');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '8000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        $this->form_validation->set_rules($this->requerimento_model->validation);

        $this->data['bairros'] = $this->bairros_model->get_bairros();
        $this->data['solicitantes'] = $this->requerente_model->get_all();
        $this->data['requerentes'] = $this->requerente_model->get_vereadores();
        $this->data['cats_requerimento'] = $this->categorias_requerimento_model->get_all();

        if ($this->form_validation->run()==TRUE):
            $data = elements(array('descricao','id_bairro','id_rua','cat_requerimento','id_requerente','da_sessao'),$this->input->post());
            $data['data_requerimento'] = $this->form_validation->convert_human_to_sql($_POST['data_requerimento']);

            $data['notificar'] = $this->input->post('notificar') ? 1 : 0;

            if ($this->input->post('expediente'))
            {
                $data['expediente'] = $this->input->post('expediente');
                $data['ano_expediente'] = $this->input->post('ano_expediente');
            }

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

                        $config = array(
                            'source_image' => $file_data['full_path'],
                            'new_image' => './uploads/thumbs/',
                            'maintain_ratio' => true,
                            'width' => 100,
                            'height' => 75
                        );

                        $this->image_lib->initialize($config);
                        $this->image_lib->resize();
                        
                        if ($file_data['image_width'] > 1024 || $file_data['image_height'] > 1024)
                        {
                            // resized
                            $config = array(
                               'source_image' => $file_data['full_path'],
                               'new_image' => './uploads/',
                               'maintain_ratio' => true,
                               'width' => 1024,
                               'height' => 1024
                           );

                            $this->image_lib->initialize($config);
                            $this->image_lib->resize();
                        }
                    }
                    else
                    {
                        $this->data['error'] = $this->upload->display_errors();
                    }
                }
                $i++;
            }

            if (!array_key_exists('error', $this->data))
            {
                $this->requerimento_model->update($this->input->post('id'),$data);
                generate_charts();

                $this->session->set_userdata('requerimento_editado','Requerimento editado com sucesso!');

                redirect('requerimentos/editar_requerimento/'.$this->input->post('id'));
            }
        endif;

        $this->data['requerimento'] = $this->requerimento_model->get($id);

        if ($this->data['requerimento']->id_rua != 0)
            $this->data['ruas'] = $this->cidades_model->getRuas($this->data['requerimento']->id_bairro);

        $this->load_view('requerimentos/editar_requerimento');
    }

    public function excluir_requerimento($id)
    {
        if ($_SESSION['autorizacao']==AUTORIZACAO_ADMINISTRADOR)
        {
            $this->requerimento_model->delete($id);
            generate_charts();

            $this->session->set_userdata('requerimento_excluido','Requerimento excluído com sucesso!');
            redirect('requerimentos/listar_requerimentos');
        }
    }

    public function generate_charts()
    {
        generate_charts();
    }

    public function visualizar($id)
    {
        if ( $this->input->post('user_email') && $this->input->post('user_message') )
        {
            send_message($this->input->post('user_email'), $this->input->post('user_message'));

            $this->session->set_userdata('mensagem_enviada','Mensagem enviada com sucesso!');
        }

        $this->data['requerimento'] = $requerimento = $this->requerimento_model->get($id);
        $this->data['bairro'] = $this->bairros_model->get($requerimento->id_bairro);
        $this->data['requerente'] = $this->requerente_model->get($requerimento->id_requerente);
        $this->data['solicitante'] = $this->requerente_model->get($requerimento->id_solicitante);
        $this->data['cats_requerimento'] = $this->categorias_requerimento_model->get_all();

        if ($requerimento->id_rua != 0)
            $this->data['rua'] = $this->cidades_model->get_rua($requerimento->id_rua);

        $this->load_view('requerimentos/visualizar');
    }

    public function avancar_situacao($id,$situacao)
    {
        $this->requerimento_model->avancar_situacao($id, $situacao);

        $_SESSION['requerimentos'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_EM_ANALISE);

        send_notification($id);

        redirect('requerimentos/visualizar/'.$id);
    }

    public function retornar_situacao($id,$situacao)
    {
        $this->requerimento_model->retornar_situacao($id, $situacao);

        $_SESSION['requerimentos'] = $this->requerimento_model->count_requerimentos_by_situacao(REQUERIMENTO_SITUACAO_EM_ANALISE);

        redirect('requerimentos/visualizar/'.$id);
    }

    public function gravar_expediente($id, $expediente, $ano)
    {
        $this->requerimento_model->gravar_expediente($id, $expediente, $ano);

        $this->avancar_situacao($id, REQUERIMENTO_SITUACAO_ANALISADO);

        redirect('requerimentos/visualizar/'.$id);
    }

    public function imprimir_requerimento($id)
    {
        $this->load->library('Pdf');

        $requerimento = $this->requerimento_model->get($id);
        $solicitante = $this->requerente_model->get($requerimento->id_solicitante);

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetMargins(20.5, 20.5, 20.5);
        $pdf->SetFont('Arial', '', 12);


        $html = '<b>PROPRIETÁRIO:</b> Vereador Carlos Eduardo Ranzi    <b>EMAIL:</b>  vereadorranzi@gmail.com<br>';
        $html .= '<b>PROFISSÃO:</b> Vereador            <b>CPF:</b> 976.237.330-87  <b>FONE:</b>    (51) 3982-1155 <br>';
        $html .= '<b>ENDEREÇO:</b>  Av. Benjamin Constant, 670 - 3º andar        <b>BAIRRO:</b> Centro<br>';
        $html .= '<b>MUNICÍPIO:</b>   Lajeado           <b>ESTADO:</b>   RS                      <b>CEP:</b>       95900-000<br>';

        $pdf->WriteHTML(iconv('utf-8','iso-8859-1',$html));

        $pdf->Ln(20);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 0, 'Requer:', 0, 0, 'L', false);

        $html = $requerimento->descricao;

        $pdf->Ln(10);
        $pdf->Cell(20);

        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 5, iconv('utf-8','iso-8859-1',$html));

        $pdf->Ln(10);
        $pdf->Cell(20);

        $pdf->Cell(0, 0, 'Nesses termos, pede deferimento.', 0, 0, 'L', false);
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 0, 'Dados do solicitante:', 0, 0, 'L', false);

        $html = 'Nome: '. $solicitante->nome;
        if ($solicitante->telefone != '' && $solicitante->telefone != '0')
        {
            $html .= ' - Telefone: '. $solicitante->telefone;
        }

        $pdf->Ln(10);
        $pdf->Cell(20);

        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 5, iconv('utf-8','iso-8859-1',$html));

        $pdf->Ln(10);
        $pdf->Cell(20);


        setlocale(LC_TIME, "pt_BR", 'ptb');
        $date = strftime("%d de %B de %Y", time());

        $pdf->Cell(0, 0, 'Lajeado, '. $date, 0, 0, 'R', false);

        $pdf->Ln(40);

        $pdf->Cell(0, 0, '__________________________', 0, 0, 'C', false);
        $pdf->Ln(5);
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(0, 0, 'Nome do requerente', 0, 0, 'C', false);

        $pdf->Line(10, 10, 10, 285);
        $pdf->Line(10, 10, 200, 10);
        $pdf->Line(200, 10, 200, 285);
        $pdf->Line(10, 285, 200, 285);

        $pdf->Output();
    }
}