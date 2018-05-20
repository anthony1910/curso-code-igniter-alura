<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public function salva($usuario)
    {

        $this->db->insert("usuarios", $usuario);

    }

}