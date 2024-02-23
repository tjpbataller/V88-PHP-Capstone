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
    public function process()
    {
        if($this->input->post("form_data_action", TRUE) == "upload_image" && !empty($_FILES["images"]))
        {
            $this->load->model("image");
            $this->load->helper("file");
            /* Folder path for dummy/to be assigned images */ 
            $folder_path = FCPATH."assets/images/uploads/";
            delete_files($folder_path, false);
            $viewdata["images"] = $this->image->validate_images($_FILES["images"]);
            if(gettype($viewdata["images"]) !== "string")
            {
                $this->load->view("partials/products/admin_images", $viewdata);
            }
            else
            {
                echo $viewdata["images"];
            }
        }
        else if($this->input->post("form_data_action", TRUE) == "remove_image" && !empty($_FILES["images"]))
        {
            if($this->session->userdata("new_images"))
            {
                $image_index = $this->input->post("image_index", TRUE);
                $images = $this->session->userdata("new_images");
                unlink($images[$image_index]["full_path"]);
                array_splice($images, $image_index, 1);
                $this->session->set_userdata("new_images", $images);
                $viewdata["images"] = $this->session->userdata("new_images");
                $this->load->view("partials/products/admin_images", $viewdata);
            }
        }
        else if($this->input->post("form_data_action", TRUE) == "mark_as_main" && !empty($_FILES["images"]))
        {
            $image_index = $this->input->post("image_index", TRUE);
            $old_images = $this->session->userdata("new_images");
            $new_images["images"] = array(
                "main"=>$image_index,
                "links"=>$old_images
            );
            $this->session->set_userdata("product",$new_images);
        }
        else if($this->input->post("form_data_action", TRUE) == "add_product" && !empty($_FILES["images"]))
        {
            $this->load->model("product");
            $this->product->add_product();
        }
    }
    public function show_all()
    {
        $this->load->model("product");
        $viewdata = $this->product->show_all();
        $this->load->view("partials/products/admin_items", $viewdata);
    }
}
