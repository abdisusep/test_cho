<?php

class Pendidikan_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get('pendidikan');
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('administrasi_umum', $data);
    }
}

?>