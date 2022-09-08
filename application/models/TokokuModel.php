<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class TokokuModel extends CI_Model {
    public function get_data()
    {
        $query = $this->db->get('buku');
        return $query->result();
         
    }

    function insertDataBuku($data) 
    {
        $this->db->insert('buku', $data);
    }

    function getDataBukuDetail($id) 
    {
        $this->db->where('id', $id);
        $query = $this->db->get('buku');
        return $query->row();
    }

    function updateBuku($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('buku', $data);
    }

    function deleteBuku($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('buku');
    }
}