<?php

class User_Model extends CI_Model {
    
    public function get_data()
    {
        $query = $this->db->order_by('id_user', 'DESC')->get('user');
        return $query->result();
    }

    public function get_data_id($id)
    {
        $query = $this->db->get_where('user', ['id_user' => $id]);
        return $query->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('user', $data);
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }

    public function delete_data($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }
}

?>