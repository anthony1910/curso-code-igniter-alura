<?php

class Produtos_model extends CI_Model {

    public function busca($id)
    {

        return $this->db->get_where("produtos", array(
            "id" => $id
        ))->row_array();

    }

    public function buscaTodos()
    {

        return $this->db->get_where('produtos', array(
            'vendido' => 0
        ))->result_array();

    }

    public function salva($produto)
    {

        $this->db->insert("produtos", $produto);

    }

}