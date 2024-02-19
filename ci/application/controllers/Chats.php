<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chats extends CI_Controller
{
    public $url;
    public $api_key;
    public $data;
    public $headers;
    public $messages;
    public function __construct()
    {
        parent::__construct();
        $this->url = "https://wsapi.simsimi.com/190410/talk";
        $this->api_key = "R48lh3EDwtUecmv4HyqK8Or3Wzg_KXbjeRJmUCdS";
        $this->data = array("lang"=>"en");
        $this->headers = array(
            "Content-Type: application/json",
            "x-api-key: " . $this->api_key
        );
        $this->messages = array(
            array(
            "class"=>"simsimi",
            "image"=>"assets/images/simsimi.png",
            "alt"=>"This is simsimi",
            "message"=>"Hi!"
            )
        );
        if(!$this->session->userdata("messages")){$this->session->set_userdata("messages", $this->messages);}
    }
    public function index()
    {
        $response["chats"] = $this->session->userdata("messages");
        $this->load->view("chats/index", $response);
    }
    public function chat_index()
    {
        $response["chats"] = $this->session->userdata("messages");
        $this->load->view("partials/chats", $response);
    }
    public function chat()
    {
        $post = $this->input->post(NULL, TRUE);
        $this->data["utext"] = $post["chat"];
        $responses = $this->Chat->send_chat($this->url, $this->data, $this->headers);
        foreach($responses as $response){
            $this->messages = $this->session->userdata("messages");
            array_unshift($this->messages,$response);
            $this->session->set_userdata("messages", $this->messages);
        }
        $this->chat_index();
    }
}