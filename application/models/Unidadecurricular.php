<?php
Class UnidadeCurricular extends CI_Model
{
    function getUnidadeCurricular($curso) {
        $this->db->select('*');
        $this->db->from('UnidadeCurricular');
        $this->db->where('refcurso', $curso);
        $this->db->order_by('ID', 'ASC');
        $query = $this->db->get();

        return $query->result();
    }
}