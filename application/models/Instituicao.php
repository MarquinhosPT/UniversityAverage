<?php

Class Instituicao extends CI_Model {

    function getInstituicao() {
        $this->db->select('*');
        $this->db->from('Instituicao');
        $this->db->order_by('ID', 'ASC');
        $query = $this->db->get();

        return $query->result();
    }

}
