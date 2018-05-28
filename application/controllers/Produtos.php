<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function __construct()
    {

        parent::__construct();

        $this->load->model("produtos_model");

    }

    public function mostra($id)
    {

        $produto = $this->produtos_model->busca($id);

        $dados = array("produto" => $produto);

        $this->load->helper('typography');

        $this->load->view("produtos/mostra", $dados);

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

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[5]');

        $this->form_validation->set_rules('descricao', 'Descrição', 'trim|required|min_length[10]');

        $this->form_validation->set_rules('preco', 'Preço', 'trim|required');

        $this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');

        $sucesso = $this->form_validation->run();

        if ($sucesso)
        {

            $usuarioLogado = $this->session->userdata('usuario_logado');

            $produto = array(
                "nome" => $this->input->post("nome"),
                "descricao" => $this->input->post("descricao"),
                "preco" => $this->input->post("preco"),
                "usuario_id" => $this->session->userdata("usuario_logado")["id"]
            );

            $this->produtos_model->salva($produto);

            $this->produtos_model->salva($produto);

            $this->session->set_flashdata("success", "Produto salvo com sucesso");

            redirect("/");

        }
        else
        {
            $this->load->view('produtos/formulario');
        }

    }

}