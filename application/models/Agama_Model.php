<?php

class Agama_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('agama', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('agama', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_agama', $id);
        $this->db->update('agama', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_agama', $id);
        $this->db->update('agama', $data);
    }
}

?>