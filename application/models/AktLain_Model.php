<?php

class AktLain_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('aktivitas_lain', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('aktivitas_lain', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_aktivitas_lain', $id);
        $this->db->update('aktivitas_lain', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_aktivitas_lain', $id);
        $this->db->update('aktivitas_lain', $data);
    }
}

?>