<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas_model extends CI_Model {

    public function salvar($venda)
    {

        $this->db->insert('vendas', $venda);

    }

}