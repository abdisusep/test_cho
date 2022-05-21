<?php

class SOrtu_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('status_ortu', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('status_ortu', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_status_ortu', $id);
        $this->db->update('status_ortu', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_status_ortu', $id);
        $this->db->update('status_ortu', $data);
    }
}

?>