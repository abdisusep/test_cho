<?php

class Kepintaran_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('kepintaran', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('kepintaran', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_kepintaran', $id);
        $this->db->update('kepintaran', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_kepintaran', $id);
        $this->db->update('kepintaran', $data);
    }
}

?>