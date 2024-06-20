<?php

class Pasien_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_all_pasien() {
        $query = $this->db->get('pasien');
        return $query->result_array();
    }

    public function get_pasien_by_id($id) {
        $query = $this->db->get_where('pasien', array('id' => $id));
        return $query->row_array();
    }

    public function insert_pasien($data) {
        return $this->db->insert('pasien', $data);
    }

    public function update_pasien($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('pasien', $data);
    }

    public function delete_pasien($id) {
        $this->db->where('id', $id);
        return $this->db->delete('pasien');
    }
}
?>
