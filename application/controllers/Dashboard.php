<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('unidadecurricular', '', TRUE);
        $this->load->model('unidadecurricularaluno', '', TRUE);
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['id'];
            $data['foto'] = $session_data['foto'];
            $data['numeromecanografico'] = $session_data['numeromecanografico'];
            $data['nome'] = $session_data['nome'];
            $this->load->view('dashboard/index', $data);
        } else {
            //If no session, redirect to login page
            redirect('Account/login', 'refresh');
        }
    }

    public function historico() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['id'];
            $this->load->library('Datatables');

            $this->datatables
                    ->select('UnidadeCurricularAluno.ID, UnidadeCurricular.Codigo, UnidadeCurricular.Descricao, UnidadeCurricularAluno.Nota')
                    ->from('UnidadeCurricular')
                    ->join('UnidadeCurricularAluno', 'UnidadeCurricularAluno.refUnidadeCurricular = UnidadeCurricular.ID')
                    ->where('UnidadeCurricularAluno.Nota IS NOT NULL')
                    ->where('UnidadeCurricularAluno.refAluno', $data['id']);
            echo $this->datatables->generate();
        } else {
            //If no session, redirect to login page
            redirect('Account/login', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        redirect('Account/login', 'refresh');
    }

}
