<?php

class Kontrak_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    public function get_data_id($id)
    {
        $query = $this->db->get_where('kontrak', ['id_user' => $id]);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('kontrak', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_kontrak', $id);
        $this->db->update('kontrak', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_kontrak', $id);
        $this->db->update('kontrak', $data);
    }
}

?>