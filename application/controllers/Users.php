<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function index()
    {
        $this->load->view("users/index");
    }
    public function admin_orders()
    {
        $this->load->view("users/admin_orders");
    }
    public function admin_products()
    {
        $this->load->view("users/admin_products");
    }
    public function catalogue()
    {
        $this->load->view("users/catalogue");
    }
    public function product_view()
    {
        $this->load->view("users/product_view");
    }
    public function signup()
    {
        $this->load->view("users/signup");
    }
    public function cart()
    {
        $this->load->view("users/cart");
    }
    public function login()
    {
        $this->load->view("users/login");
    }
}
