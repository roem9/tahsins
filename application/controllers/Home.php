<?php
class Home extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        if(!empty($_GET['page'])){
            $page = $_GET['page'];
            if($page == MD5("hal 1")){
                $data['title'] = 'Halaman 1';
                $data['kata'] = [
                    [
                        "kata" => "اِذَا تَـلٰـهَا",
                        "audio" => "ss"
                    ]
                ];
            }
            
            $this->load->view("templates/header-user", $data);
            $this->load->view("page/page", $data);
            $this->load->view("templates/footer-user", $data);
        } else {
            $data['title'] = "Pra Tahsin 3";
            $this->load->view("templates/header-user", $data);
            $this->load->view("page/index", $data);
            $this->load->view("templates/footer-user", $data);
        }
    }
}