<?php

class Plano_acoes_model extends MY_Model
{
    public $validation = array(
        array(
            'field' => 'titulo',
            'label' => 'TÍTULO',
            'rules' => 'trim|required|max_length[255]'
        ),
        array(
            'field' => 'id_responsavel',
            'label' => 'RESPONSÁVEL',
            'rules' => 'required'
        ),
        array(
            'field' => 'quando',
            'label' => 'QUANDO',
            'rules' => 'valid_date'
        ),
        array(
            'field' => 'id_categoria',
            'label' => 'CATEGORIA',
            'rules' => 'required'
        )
    );



    function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
    }

    public function get_plano_acoes($id = NULL)
    {
        if ( $id != NULL )
        {
            $this->db->where('id',$id);
        }

        $this->db->order_by('id','desc');

        $query = $this->db->get('plano_acoes');

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

    public function get_plano_acao($id)
    {
        $result_array = array();
        $result_array = $this->get_plano_acoes($id);

        return $result_array[0];
    }

//    public function get_plano_acoes_by_categoria($id_categoria)
//    {
//        if (!empty($id_categoria))
//            $this->db->where('id_categoria', $id_categoria);
//
//        return $this->get_plano_acoes();
//    }

//    public function get_lista_plano_acoes_by_categoria($id_categoria, $per_page, $offset)
//    {
//        $this->db->limit($per_page, $offset);
//
//        return $this->get_plano_acoes_by_categoria($id_categoria);
//    }

    public function get_plano_acoes_with_usuarios ()
    {
        $this->db->select('plano_acoes.*, usuarios.nome AS nome_responsavel');
        $this->db->join('usuarios', 'plano_acoes.id_responsavel=usuarios.id');

        return $this->get_all();
    }
    
//    public function get_plano_acoes_by_categoria_with_usuarios ($id_categoria)
//    {
//        if (!empty($id_categoria))
//            $this->db->where('id_categoria', $id_categoria);
//
//        return $this->get_plano_acoes_with_usuarios();
//    }
//    
//    public function get_lista_plano_acoes_by_categoria_with_usuarios($id_categoria, $per_page, $offset)
//    {
//        $this->db->limit($per_page, $offset);
//
//        return $this->get_plano_acoes_by_categoria_with_usuarios($id_categoria);
//    }

    public function get_lista_plano_acoes($per_page, $offset)
    {
        $this->db->limit($per_page,$offset);
        return $this->get_plano_acoes();
    }
    
//    public function get_lista_plano_acoes_with_usuarios($per_page, $offset)
//    {
//        $this->db->limit($per_page,$offset);
//        return $this->get_plano_acoes_with_usuarios();
//    }

    public function add_plano_acao($data)
    {
        $this->insert($data);
        $this->session->set_userdata('plano_acao_adicionado','Plano de ação adicionado com sucesso!');
        redirect('plano_acoes/adicionar_plano_acao');
    }

    public function update_plano_acao($data=NULL,$condition=NULL)
    {
        if ($data!=NULL && $condition!=NULL)
        {
            $this->db->update('plano_acoes',$data,$condition);

            $this->session->set_userdata('plano_acao_editado','Plano de ação editado com sucesso!');

            redirect('plano_acoes/editar_plano_acao/'.$condition['id']);
        }
    }

    public function delete_plano_acao($id)
    {
        if ($id!=NULL)
        {
            $this->db->delete('plano_acoes',array('id' => $id));

            $this->session->set_userdata('plano_acao_excluido','Plano de ação excluído com sucesso!');

            redirect('plano_acoes/lista_plano_acoes');
        }
    }

    // -- ACOES DE PLANOS DE ACAO --

   

    
}