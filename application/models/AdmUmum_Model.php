<?php

class AdmUmum_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('administrasi_umum', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('administrasi_umum', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_administrasi_umum', $id);
        $this->db->update('administrasi_umum', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_administrasi_umum', $id);
        $this->db->update('administrasi_umum', $data);
    }
}

?>