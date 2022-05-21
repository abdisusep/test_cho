<?php

class Ukbaju_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('ukuran_baju', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('ukuran_baju', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_ukuran_baju', $id);
        $this->db->update('ukuran_baju', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_ukuran_baju', $id);
        $this->db->update('ukuran_baju', $data);
    }
}

?>