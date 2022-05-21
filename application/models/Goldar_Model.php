<?php

class Goldar_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('golongan_darah', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('golongan_darah', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_golongan_darah', $id);
        $this->db->update('golongan_darah', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_golongan_darah', $id);
        $this->db->update('golongan_darah', $data);
    }
}

?>