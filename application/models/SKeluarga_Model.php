<?php

class SKeluarga_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('status_keluarga', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('status_keluarga', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_status_keluarga', $id);
        $this->db->update('status_keluarga', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_status_keluarga', $id);
        $this->db->update('status_keluarga', $data);
    }
}

?>