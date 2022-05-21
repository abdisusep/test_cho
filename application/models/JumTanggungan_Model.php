<?php

class JumTanggungan_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('jumlah_tanggungan', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('jumlah_tanggungan', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_jumlah_tanggungan', $id);
        $this->db->update('jumlah_tanggungan', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_jumlah_tanggungan', $id);
        $this->db->update('jumlah_tanggungan', $data);
    }
}

?>