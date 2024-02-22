<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller
{
    public function admin_orders()
    {
        $this->load->view("orders/admin_orders");
    }
}
