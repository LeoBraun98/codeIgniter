<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {    
      function __construct() {      
         
        parent::__construct();
        
        if(!$this->session->userdata('estou_logado')){
            redirect('Login');
            } 
        
        $this->load->model('Contatos_model', 'contatos');
        $this->load->model('Funcao_model', 'funcao');
        //contatos Ã© um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "PF";
        $dados['completo'] = "Projeto Frame";
        $dados['contatos'] = $this->contatos->listar();
        $dados['funcao'] = $this->funcao->listar();
        $this->load->view('contato', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $dados['nome'] = mb_convert_case ($this->input->post('nome'), MB_CASE_UPPER);
        $dados['email'] = mb_convert_case( $this->input->post('email'), MB_CASE_LOWER);
        $dados['idfuncao'] = $this->input->post('idfuncao');
        $result = $this->contatos->inserir($dados);
         if ($result == true){
            $this->session->set_flashdata('sucesso','msg');
            redirect('usuario');
        } else {
            $this->session->set_flashdata('falha','msg');
            redirect('contato');
        }
        
    }

    public function excluir($id) {
        $this->contatos->deletar($id);
        redirect('contato');
    }

    public function editar($id) {
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Frame";
        $data['contatoEditar'] = $this->contatos->editar($id);
        $data['funcao'] = $this->funcao->listar();
        $this->load->view('contatoEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $data['id'] = $this->input->post('id');
        $data['nome'] = mb_convert_case( $this->input->post('nome'), MB_CASE_UPPER);
        $data['email'] = mb_convert_case( $this->input->post('email'), MB_CASE_LOWER);
        $data['idfuncao'] = $this->input->post('idfuncao');
        $this->contatos->atualizar($data);
        redirect('contato');
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



