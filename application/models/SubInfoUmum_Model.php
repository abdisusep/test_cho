<?php

class SubInfoUmum_Model extends CI_Model {
    
    public function get_data($id='')
    {
        $query = $this->db->get_where('sub_informasi_umum', ['id_info_umum' => $id]);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('sub_informasi_umum', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_sub_informasi_umum', $id);
        $this->db->update('sub_informasi_umum', $data);
    }
}

?>