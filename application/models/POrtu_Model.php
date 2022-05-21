<?php

class POrtu_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->get_where('penghasilan_ortu', ['deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('penghasilan_ortu', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_penghasilan_ortu', $id);
        $this->db->update('penghasilan_ortu', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_penghasilan_ortu', $id);
        $this->db->update('penghasilan_ortu', $data);
    }
}

?>