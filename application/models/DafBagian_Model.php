<?php

class DafBagian_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('daftar_bagian', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('daftar_bagian', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_daftar_bagian', $id);
        $this->db->update('daftar_bagian', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_daftar_bagian', $id);
        $this->db->update('daftar_bagian', $data);
    }
}

?>