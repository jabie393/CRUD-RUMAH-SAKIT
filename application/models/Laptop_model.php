<?php
class Laptop_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_laptops($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('laptops');
        return $query->result_array();
    }

    public function get_laptop_by_id($id) {
        $query = $this->db->get_where('laptops', array('id' => $id));
        return $query->row_array();
    }

    public function add_laptop($data) {
        return $this->db->insert('laptops', $data);
    }

    public function update_laptop($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('laptops', $data);
    }

    public function delete_laptop($id) {
        return $this->db->delete('laptops', array('id' => $id));
    }

    public function record_count() {
        return $this->db->count_all('laptops');
    }
}
