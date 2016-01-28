<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Management extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('aluno', '', TRUE);
    }
    
    function Aluno() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['id'];
            $data['foto'] = $session_data['foto'];
            $data['numeromecanografico'] = $session_data['numeromecanografico'];
            $data['nome'] = $session_data['nome'];
            $this->load->view('management/aluno', $data);
        } else {
            //If no session, redirect to login page
            redirect('Account/login', 'refresh');
        }
    }
    
    function AreaCientifica() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['id'];
            $data['foto'] = $session_data['foto'];
            $data['numeromecanografico'] = $session_data['numeromecanografico'];
            $data['nome'] = $session_data['nome'];
            $this->load->view('management/areacientifica', $data);
        } else {
            //If no session, redirect to login page
            redirect('Account/login', 'refresh');
        }
    }
    
    function Curso() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['id'];
            $data['foto'] = $session_data['foto'];
            $data['numeromecanografico'] = $session_data['numeromecanografico'];
            $data['nome'] = $session_data['nome'];
            $this->load->view('management/curso', $data);
        } else {
            //If no session, redirect to login page
            redirect('Account/login', 'refresh');
        }
    }
    
    function Instituicao() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['id'];
            $data['foto'] = $session_data['foto'];
            $data['numeromecanografico'] = $session_data['numeromecanografico'];
            $data['nome'] = $session_data['nome'];
            $this->load->view('management/instituicao', $data);
        } else {
            //If no session, redirect to login page
            redirect('Account/login', 'refresh');
        }
    }
    
    function UnidadeCurricular() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['id'];
            $data['foto'] = $session_data['foto'];
            $data['numeromecanografico'] = $session_data['numeromecanografico'];
            $data['nome'] = $session_data['nome'];
            $this->load->view('management/unidadecurricular', $data);
        } else {
            //If no session, redirect to login page
            redirect('Account/login', 'refresh');
        }
    }    
}