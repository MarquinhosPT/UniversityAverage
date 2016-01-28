<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UnidadeCurricular extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('aluno', '', TRUE);
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['id'];
            $data['foto'] = $session_data['foto'];
            $data['numeromecanografico'] = $session_data['numeromecanografico'];
            $data['nome'] = $session_data['nome'];
            $this->load->view('dashboard/unidadecurricular', $data);
        } else {
            //If no session, redirect to login page
            redirect('Account/login', 'refresh');
        }
    }

    public function getUnidadeCurricular() {
        if ($this->session->userdata('logged_in')) {

            $Ano = $this->input->post('Ano');

            $session_data = $this->session->userdata('logged_in');
            $data['id'] = $session_data['id'];
            $data['curso'] = $session_data['curso'];

            $this->load->library('Datatables');

            $this->datatables
                    ->select('UnidadeCurricularAluno.ID AS row_id, UnidadeCurricular.Codigo, UnidadeCurricular.Semestre, UnidadeCurricular.Descricao, UnidadeCurricularAluno.Nota')
                    ->from('UnidadeCurricular')
                    ->join('UnidadeCurricularAluno', 'UnidadeCurricularAluno.refUnidadeCurricular = UnidadeCurricular.ID')
                    ->where('UnidadeCurricular.Ano', $Ano)
                    ->where('UnidadeCurricular.refCurso', $data['curso'])
                    ->where('UnidadeCurricularAluno.refAluno', $data['id']);
            $results = $this->datatables->generate('raw');
            
            $temp['sEcho'] = 1;
            $temp['iTotalRecords'] = "14";
            $temp['iTotalDisplayRecords'] = "14";
            $temp['aaData'] = $results->result_array(); 
            echo json_encode($temp);
        } else {
            //If no session, redirect to login page
            redirect('Account/login', 'refresh');
        }
    }

    public function newNota() {
        
    }

}
