<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function index()
    {
        $this->load->view("products/catalogue");
    }
    public function view($index)
    {
        $this->load->view("products/product_view");
    }
    public function admin_products()
    {
        $this->load->view("products/admin_products");
    }
}
