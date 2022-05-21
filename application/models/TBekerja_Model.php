<?php

class TBekerja_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('tujuan_bekerja', ['deleted' => '0' ]);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('tujuan_bekerja', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_tujuan_bekerja', $id);
        $this->db->update('tujuan_bekerja', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_tujuan_bekerja', $id);
        $this->db->update('tujuan_bekerja', $data);
    }
}

?>