<?php

class InfoUmum_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('informasi_umum', ['aktif' => '1']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('informasi_umum', $data);
    }
}

?>