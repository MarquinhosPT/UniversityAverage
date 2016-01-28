<?php

Class Curso extends CI_Model {

    function getCurso($instituicao) {
        $this->db->select('*');
        $this->db->from('Curso');
        $this->db->where('refInstituicao', $instituicao);
        $this->db->order_by('ID', 'ASC');
        $query = $this->db->get();

        return $query->result();
    }

}
