<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function template($nome, $dados = [])
    {

        $this->view('cabecalho');
        $this->view($nome, $dados);
        $this->view('rodape');

    }

}