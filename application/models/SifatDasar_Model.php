<?php

class SifatDasar_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('sifat_dasar', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('sifat_dasar', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_sifat_dasar', $id);
        $this->db->update('sifat_dasar', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_sifat_dasar', $id);
        $this->db->update('sifat_dasar', $data);
    }
}

?>