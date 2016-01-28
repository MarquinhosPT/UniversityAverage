<?php
Class UnidadeCurricularAluno extends CI_Model
{
    function getUnidadeCurricularAluno($aluno) {
        $this->db->select('*');
        $this->db->from('UnidadeCurricularAluno');
        $this->db->where('refcurso', $aluno);
        $this->db->order_by('ID', 'ASC');
        $query = $this->db->get();

        return $query->result();
    }
}