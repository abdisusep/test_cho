<?php

class GajiPokok_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('gaji_pokok', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('gaji_pokok', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_gaji_pokok', $id);
        $this->db->update('gaji_pokok', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_gaji_pokok', $id);
        $this->db->update('gaji_pokok', $data);
    }
}

?>