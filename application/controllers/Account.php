<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('aluno', '', TRUE);
        $this->load->helper(array('form', 'url'));
    }

    function login() {
        $this->load->helper(array('form'));
        $this->load->view('account/login');
    }

    function verifylogin() {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Email', 'E-mail', 'required');
        $this->form_validation->set_rules('Password', 'Palavra-passe', 'required|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $this->load->view('account/login');
        } else {
            //Go to private area
            redirect('Dashboard', 'refresh');
        }
    }

    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $email = $this->input->post('Email');

        //query the database
        $result = $this->aluno->login($email, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->ID,
                    'foto' => $row->Foto,
                    'numeromecanografico' => $row->NumeroMecanografico,
                    'nome' => $row->Nome,
                    'curso' => $row->Curso
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'E-mail ou Palavra-passe inválidos');
            return false;
        }
    }

    function register() {
        $this->load->model('instituicao', '', TRUE);
        $this->load->helper(array('form'));
        $data['instituicoes'] = $this->instituicao->getInstituicao();
        $this->load->view('account/register', $data);
    }

    function getCursos($instituicao) {
        $this->load->model('curso', '', TRUE);
        header('Content-Type: application/x-json; charset=utf-8');
        echo json_encode(['Cursos' => $this->curso->getCurso($instituicao)]);
    }

    function verifyregister() {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('NumeroMecanografico', 'Número Mecanográfico', 'required');
        $this->form_validation->set_rules('Email', 'E-mail', 'required');
        $this->form_validation->set_rules('Password', 'Palavra-passe', 'required');
        $this->form_validation->set_rules('Nome', 'Nome', 'required');
        $this->form_validation->set_rules('DataNascimento', 'Data de Nascimento', '');
        $this->form_validation->set_rules('Contacto', 'Contacto', '');
        $this->form_validation->set_rules('refInstituicao', 'Instituicao', 'required');
        $this->form_validation->set_rules('refCurso', 'Curso', 'required');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $this->load->view('account/register');
        } else {
            //Go to private area
            $this->aluno->register();
            redirect('Account/login', 'refresh');
        }
    }

    function profile() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['id'];
            $data['foto'] = $session_data['foto'];
            $data['numeromecanografico'] = $session_data['numeromecanografico'];
            $data['nome'] = $session_data['nome'];

            $temp = $this->aluno->userjoin($data['id']);

            if ($temp) {
                foreach ($temp as $row) {
                    $data['curso'] = $row->Curso;
                }
            }

            $this->load->view('account/profile', $data);
        } else {
            //If no session, redirect to login page
            redirect('Account/login', 'refresh');
        }
    }

}
