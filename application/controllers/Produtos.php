<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function __construct()
    {

        parent::__construct();

        $this->load->model("produtos_model");

    }

    public function index()
    {

        // $this->output->enable_profiler(TRUE);

        $produtos = $this->produtos_model->buscaTodos();

        $dados = array("produtos" => $produtos);

        $this->load->helper(array("currency"));

        $this->load->view("produtos/index.php", $dados);

    }

    public function formulario()
    {

        $this->load->view("produtos/formulario");

    }

    public function novo()
    {

        $produto = array(
            "nome" => $this->input->post("nome"),
            "descricao" => $this->input->post("descricao"),
            "preco" => $this->input->post("preco"),
            "usuario_id" => $this->session->userdata("usuario_logado")["id"]
        );

        $this->produtos_model->salva($produto);

        $this->session->set_flashdata("success", "Produto salvo com sucesso");

        redirect("/");

    }

}