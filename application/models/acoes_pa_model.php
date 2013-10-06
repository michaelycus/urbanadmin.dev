<?php

class Acoes_pa_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'o_que',
            'label' => 'O QUE',
            'rules' => 'trim|max_length[255]',
        ),
        array(
            'field' => 'como',
            'label' => 'COMO',
            'rules' => 'trim|max_length[255]',
        ),
        array(
            'field' => 'onde',
            'label' => 'ONDE',
            'rules' => 'trim|max_length[255]',
        ),
        array(
            'field' => 'delegado',
            'label' => 'DELEGADO',
            'rules' => 'trim|max_length[255]',
        ),
        array(
            'field' => 'data_acao',
            'label' => 'QUANDO',
            'rules' => 'valid_date',
        ),
        array(
            'field' => 'materiais',
            'label' => 'MATERIAIS',
            'rules' => 'trim|max_length[255]',
        )
    );

    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
        $this->_table = 'acoes_pa';
    }
    
    public function get_acoes_with_usuarios ()
    {
        $this->db->select('acoes_pa.*, usuarios.nome AS nome_responsavel');
        $this->db->join('usuarios', 'acoes_pa.id_responsavel=usuarios.id');

        return $this->get_all();
    }
    
     public function get_acoes($id = NULL)
    {
        if ( $id != NULL )
        {
            $this->db->where('id',$id);
        }

        $this->db->order_by('id','desc');

        $query = $this->db->get('acoes_plano_acao');

        $appended_array = array();

        if($query->num_rows() > 0)
        {
            return $appended_array = $query->result();
        }
        else
        {
            return FALSE;
        }
    }

    public function get_acao($id)
    {
        $result_array = array();
        $result_array = $this->get_acoes($id);

        return $result_array[0];
    }

    public function get_acoes_by_plano($id)
    {
        $this->db->where('id_plano_acao', $id);

        return $this->get_acoes();
    }

    public function add_acao($data)
    {
        if ($data!=NULL)
        {
            $this->db->insert('acoes_plano_acao',$data);

            $this->session->set_userdata('acao_adicionada','Ação adicionada com sucesso!');

            redirect('plano_acoes/adicionar_acao/'.$data['id_plano_acao']);
        }
    }

    public function update_acao($data=NULL,$condition=NULL)
    {
        if ($data!=NULL && $condition!=NULL)
        {
            $this->db->update('acoes_plano_acao',$data,$condition);

            $this->session->set_userdata('acao_editada','Ação editada com sucesso!');

            redirect('plano_acoes/editar_acao/'.$condition['id']);
        }
    }

    public function delete_acao($id)
    {
        if ($id!=NULL)
        {
            $this->db->delete('acoes_plano_acao',array('id' => $id));

            $this->session->set_userdata('acao_excluida','Ação excluída com sucesso!');

//            redirect('plano_acoes/lista_categorias');
        }
    }
}