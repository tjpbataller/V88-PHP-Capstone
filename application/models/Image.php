<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Model {
    public function validate_images($images)
    {
        /* images should be 4*/
        if(count($images["name"]) > 4)
        {
            return"*Maximum 4 images only";
        }
        $new_images = array();
        /* Loop thru images */
        foreach($images["type"] as $index=>$type)
        {
            /* checks if all uploaded are images */
            if(strpos($type, "image") === FALSE)
            {
                return "*Only images are allowed";
            }
            /* setup config for upload */
            $config["upload_path"] = FCPATH . "assets/images/uploads/";
            $config['allowed_types'] = 'gif|jpg|png';
            /* call upload library */
            $this->load->library("upload", $config);
            /* change file details so only one upload per run */
            $_FILES["images"]["name"] = $images["name"][$index];
            $_FILES["images"]["type"] = $images["type"][$index];
            $_FILES["images"]["tmp_name"] = $images["tmp_name"][$index];
            $_FILES["images"]["error"] = $images["error"][$index];
            $_FILES["images"]["size"] = $images["size"][$index];
            if($this->upload->do_upload("images"))
            {
                $new_images[] = array(
                    "full_path"=>$this->upload->data('full_path'),
                    "path"=>"assets/images/uploads/",
                    "name"=>$this->upload->data('file_name')
                );
            }
            else
            {
                var_dump(array('error' => $this->upload->display_errors()));
                unlink($_FILES["images"]["tmp_name"][$index]);
                die();
            }
        }
        $this->session->set_userdata("new_images", $new_images);
        return $new_images;
    }
    public function show_uploaded($images)
    {
        $result = array();
        for($index = 0; $index < count($images["name"]); $index++)
        {
            $result[] = array(
                "name"=>$images["name"][$index],
                "type"=>$images["type"][$index],
                "tmp_name"=>$images["tmp_name"][$index],
                "error"=>$images["error"],
                "size"=>$images["size"]
            );
        }
        return $result;
    }
}