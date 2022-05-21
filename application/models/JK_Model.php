<?php

class JK_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('jenis_kelamin', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('jenis_kelamin', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_jenis_kelamin', $id);
        $this->db->update('jenis_kelamin', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_jenis_kelamin', $id);
        $this->db->update('jenis_kelamin', $data);
    }
}

?>