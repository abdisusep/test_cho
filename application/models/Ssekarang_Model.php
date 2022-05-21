<?php

class Ssekarang_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('status_sekarang', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('status_sekarang', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_status_sekarang', $id);
        $this->db->update('status_sekarang', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_status_sekarang', $id);
        $this->db->update('status_sekarang', $data);
    }
}

?>