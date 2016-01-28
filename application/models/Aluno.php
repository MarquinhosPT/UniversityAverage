<?php

Class Aluno extends CI_Model {

    function userjoin($id) {
        $this->db->select('Aluno.ID, Aluno.Foto, Aluno.NumeroMecanografico, Aluno.Nome, Curso.Descricao AS Curso');
        $this->db->from('Aluno');
        $this->db->join('Curso', 'Curso.ID = Aluno.refCurso');
        $this->db->where('Aluno.ID', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function login($email, $password) {
        //$this->db->select('Aluno.ID, Aluno.Foto, Aluno.NumeroMecanografico, Aluno.Nome, Curso.Descricao AS Curso');
        $this->db->select('Aluno.ID, Aluno.Foto, Aluno.NumeroMecanografico, Aluno.Nome, Aluno.refCurso AS Curso');
        $this->db->from('Aluno');
        //$this->db->join('Curso', 'Curso.ID = Aluno.refCurso');
        $this->db->where('Email', $email);
        $this->db->where('Password', $password);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function register() {
        $this->load->model('unidadecurricular', '', TRUE);
        $this->db->trans_begin();
        
        $data = array(
            'NumeroMecanografico' => $this->input->post('NumeroMecanografico'),
            'Email' => $this->input->post('Email'),
            'Password' => $this->input->post('Password'),
            'Nome' => $this->input->post('Nome'),
            'DataNascimento' => $this->input->post('DataNascimento'),
            'Contacto' => $this->input->post('Contacto'),
            'Criado' => date('Y-m-j H:i:s'),
            'refCurso' => $this->input->post('refCurso'),
        );

        $this->db->insert('Aluno', $data);
        $lastID = $this->db->insert_id();

        $unidades = $this->unidadecurricular->getUnidadeCurricular($this->input->post('refCurso'));
        foreach ($unidades as $unidade) {
            $this->db->set('refUnidadeCurricular', $unidade->ID);
            $this->db->set('refAluno', $lastID);
            $this->db->insert('UnidadeCurricularAluno');
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    }
    
    function updateFoto($id,$file) {
        $data = array(
               'Foto' => $file
            );

        $this->db->where('ID', $id);
        $this->db->update('Aluno', $data); 
        
        
    }

}
