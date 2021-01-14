<?php
include_once APPPATH . 'controllers/BaseController.php';
include_once APPPATH . 'libraries/Response_helper.php';
class Catalog extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('web/categories_model');
        $this->load->model('web/products_model');
        $this->response = new Response_helper();
        $this->category = $this->categories_model;
        $this->products = $this->products_model;
    }

    public function index()
    {
    }

    public function categories()
    {
        if ($_POST) {
            header('Content-Type: application/json');
            $result = $this->response->invalid_request();
            $action = $this->input->post('action');
            switch ($action) {
                case "remove_category":
                    $result = $this->category->remove_categories();
                    break;
                case "add_category":
                    $icon = "";
                    if ($_FILES) {
                        $icon = $this->upload(100, 100);
                    }
                    $result = $this->category->save_category($icon);
                    break;
            }
            echo json_encode($result);
            die();
        }
        $data['lists']  = $this->category->get_categories();
        $this->load->view('admin/catalog/categories/category_list', $data);
    }

    public function edit_category($category_id = FALSE)
    {
        if ($category_id) {
            if ($_POST) {
                header('Content-Type: application/json');
                $result = $this->response->invalid_request();
                $action = $this->input->post('action');
                switch ($action) {
                    case "update_category":
                        $icon = "";
                        if ($_FILES) {
                            $icon = $this->upload(100, 100);
                        }
                        $result = $this->category->save_category($icon, $category_id);
                        break;
                }
                echo json_encode($result);
                die();
            }
            $data['category'] = $this->category->get_category($category_id);
            $data['parents'] = $this->category->get_categories();
            $this->load->view('web/catalog/categories/edit_category', $data);
        }
    }

    public function products()
    {
        if ($_POST) {
            header('Content-Type: application/json');
            $result = $this->response->invalid_request();
            $action = $this->input->post('action');
            switch ($action) {
                case "get_products":
                    $result = $this->products->get_products();
                    break;

                    case "remove_products":
                        $result = $this->products->delete_products();
                    break;
            }
            echo json_encode($result);
            die();
        }

        $this->load->view('web/catalog/products/products');
    }

    public function edit_product($pid)
    {
        if ($_POST) {
            header('Content-Type: application/json');
            $result = $this->response->invalid_request();
            $action = $this->input->post('action');
            switch ($action) {
                case "update_product":
                    $all_images = array();
                    if ($_FILES) {
                        $images = $this->get_uploaded_products();
                        array_push($all_images, $images);
                    }
                    $result = $this->products->add_product($all_images, $pid);
                    break;
            }
            echo json_encode($result);
            die();
        }
        $data['parents'] = $this->category->get_categories();
        $data['product'] = $this->products->get_product($pid);
        $data['varients'] = $this->products->get_product_varients($pid);
        $this->load->view('web/catalog/products/edit_product', $data);
    }

    public function add_product()
    {
        if ($_POST) {
            header('Content-Type: application/json');
            $result = $this->response->invalid_request();
            $action = $this->input->post('action');
            switch ($action) {
                case "add_product":
                    $all_images = array();
                    if ($_FILES) {
                        $images = $this->get_uploaded_products();
                        array_push($all_images, $images);
                    }
                    $result = $this->products->add_product($all_images);
                    break;
            }
            echo json_encode($result);
            die();
        }
        $data['parents'] = $this->category->get_categories();
        $this->load->view('web/catalog/products/add_product', $data);
    }

    /*
	 * UPLOAD ICONS / PRODUCTS FOR CATEGORY
	 */
    private function get_uploaded_products()
    {
        $this->load->library('image_library');
        $file_names = array();
        if ($_FILES) {
            $files = $_FILES;
            $count = count($_FILES);
            if ($count > 0) {
                foreach($files as $key=>$value){
                    $file_name = $key;
                    $tag = explode("_", $file_name)[0];
                    $file = $this->image_library->upload_products($file_name);
                    if ($file) {
                        $tmp = array();
                        $tmp['file'] = $file;
                        $tmp['tag'] = $tag;
                        array_push($file_names, $tmp);
                    }
                }
            }
        }
        return $file_names;
    }
}
