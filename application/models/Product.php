<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {
    public function show_all()
    {
        $category = array("Shirt","Shoe","Bag","Short");
        $status = array("active","inactive");
        $query = "SELECT * FROM products LIMIT 0,10";
        $results = $this->db->query($query)->result_array();
        $items = array();
        foreach($results as $item)
        {
            $items["items"][] = array(
                "id"=>$item["id"],
                "name"=>$item["name"],
                "description"=>$item["description"],
                "price"=>$item["price"],
                "stocks"=>$item["stocks"],
                "sold"=>$item["sold"],
                "status"=>$status[$item["status"]],
                "images"=>$item["images"],
                "category"=>$category[$item["category"]],
                "created_at"=>$item["created_at"],
                "updated_at"=>$item["updated_at"]
            );
        }
        return $items;
    }
    public function add_product()
    {
        $post = $this->input->post(NULL, TRUE);
        $images = $this->session->userdata("product")["images"];
        $new_images = array();
        foreach($images["links"] as $image)
        {
            $new_images[] = array(
                "full_path"=>FCPATH."assets/images/products/".$image["name"],
                "name" => $image["name"]
            );
            rename($image["full_path"],FCPATH . "assets/images/products/".$image["name"]);
        }
        $images["links"] = $new_images;
        $product = array(
            "name" => $post["product_name"],
            "description" => $post["description"],
            "price" => floatval(number_format((float)$post["price"], 2, '.', '')),
            "stocks" => intval($post["inventory"]),
            "sold" => 0,
            "status" => 1,
            "category" => intval($post["category"]),
            "images" => $images
        );
        $query = "INSERT INTO products(name,description,price,stocks,sold,status,images,category,created_at,updated_at)VALUES(?,?,?,?,?,?,?,?,NOW(),NOW())";
        $result = $this->db->query($query, array($product["name"],$product["description"],$product["price"],$product["stocks"],$product["sold"],$product["status"],json_encode($product["images"]),$product["category"]));
        if($this->db->affected_rows() >= 1)
        {
            echo "Data Inserted Successfully: ".$this->db->last_query();
        }
        else
        {
            echo "Failed to insert data: ".$this->db->last_query();
        }
    }
}