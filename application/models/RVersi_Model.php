<?php

class RVersi_Model extends CI_Model {
    
    public function get_data($versi = '')
    {
        if ($versi == '') {
            return false;
        }
        $query = $this->db->get_where('riwayat_versi', ['sub_menu' => $versi]);
        return $query->result();
    }

    public function insert_data($sub='')
    {
        $data = [
            'tanggal' => date('d').' '.date('M').' '.date('Y'),
            'sub_menu' => $sub
        ];
        $this->db->insert('riwayat_versi', $data);
    }
}

?>