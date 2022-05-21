<?php

class Golongan_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('golongan', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('golongan', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_golongan', $id);
        $this->db->update('golongan', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_golongan', $id);
        $this->db->update('golongan', $data);
    }
}

?>