<?php

class SubGolongan_Model extends CI_Model {
    
    public function get_data($idgol='')
    {
        $query = $this->db->get_where('sub_golongan', ['id_golongan' => $idgol, 'deleted' => '0']);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('sub_golongan', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_sub_golongan', $id);
        $this->db->update('sub_golongan', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_sub_golongan', $id);
        $this->db->update('sub_golongan', $data);
    }
}

?>