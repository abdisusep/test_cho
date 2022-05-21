<?php

class Penjualan_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('penjualan', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('penjualan', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_penjualan', $id);
        $this->db->update('penjualan', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_penjualan', $id);
        $this->db->update('penjualan', $data);
    }
}

?>