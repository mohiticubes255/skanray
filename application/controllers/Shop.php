<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('shop_model');
        $this->load->library("pagination");
    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "shop";
        $config["total_rows"] = $this->shop_model->get_count();
        $config["per_page"] = 9;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['products'] = $this->shop_model->get_products($config["per_page"], $page);

        $this->load->view('shop/index', $data);
    }
}