<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller
{
    public function index()
    {
        $this->load->view("carts/index");
    }
}
