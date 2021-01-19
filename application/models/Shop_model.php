<?php

class Shop_model extends CI_Model {

    protected $table = 'products';

    public function __construct() {
        parent::__construct();
    }

    public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_products($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);

        return $query->result();
    }
}