<?php

class Kepribadian_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('kepribadian', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('kepribadian', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_kepribadian', $id);
        $this->db->update('kepribadian', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_kepribadian', $id);
        $this->db->update('kepribadian', $data);
    }
}

?>