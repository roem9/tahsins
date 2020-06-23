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
                        "audio" => "1.1.m4a"
                    ],
                    [
                        "kata" => "اِذَا جَـلّٰـهَا",
                        "audio" => "1.2.m4a"
                    ],
                    [
                        "kata" => "اِذَا يَـغۡـشٰـهَا",
                        "audio" => "1.3.m4a"
                    ],
                    [
                        "kata" => "ذٰلِكَ دَحٰـهَا",
                        "audio" => "1.4.m4a"
                    ],
                    [
                        "kata" => "وَمَا بَـنٰـهَا",
                        "audio" => "1.5.m4a"
                    ],
                    [
                        "kata" => "وَمَا طَحٰـهَا",
                        "audio" => "1.6.m4a"
                    ],
                    [
                        "kata" => "وَمَا سَوّٰىـهَا",
                        "audio" => "1.7.m4a"
                    ],
                    [
                        "kata" => "بِـمَا تَـسۡعٰى",
                        "audio" => "1.8.m4a"
                    ],
                    [
                        "kata" => "وَلَا يَحۡيٰ",
                        "audio" => "1.9.m4a"
                    ],
                    [
                        "kata" => "وَلَا يَـشۡقٰى",
                        "audio" => "1.10.m4a"
                    ]
                ];

                $data['next'] = base_url()."?page=".MD5('hal 2');
            } else if($page == MD5("hal 2")){
                $data['title'] = 'Halaman 2';
                $data['kata'] = [
                    [
                        "kata" => "مَوَالِـيۡـكُـمۡ",
                        "audio" => "2.1.m4a"
                    ],
                    [
                        "kata" => "سَاٰتِـيۡـكُـمۡ",
                        "audio" => "2.2.m4a"
                    ],
                    [
                        "kata" => "فِيۡ جِـيۡـدِهَا",
                        "audio" => "2.3.m4a"
                    ],
                    [
                        "kata" => "خٰـلِـدِيۡـنَ فِـيۡـهَا",
                        "audio" => "2.4.m4a"
                    ],
                    [
                        "kata" => "اٰيٰـتِيۡ وَرُسُـلِيۡ",
                        "audio" => "2.5.m4a"
                    ],
                    [
                        "kata" => "عَلٰى شَاكِلَـتِـهٖ",
                        "audio" => "2.6.m4a"
                    ],
                    [
                        "kata" => "اَلَّـذِيۡ يُـمِيۡـتُـنِيۡ",
                        "audio" => "2.7.m4a"
                    ], 
                    [
                        "kata" => "يَـهۡـدِيۡ لِلَّتِيۡ",
                        "audio" => "2.8.m4a"
                    ],
                    [
                        "kata" => "وَنَاٰبِجَانِـبِـهٖ",
                        "audio" => "2.9.m4a"
                    ],
                    [
                        "kata" => "كَانَ بِعِـبَادِهٖ",
                        "audio" => "2.10.m4a"
                    ],
                ];
                
                $data['back'] = base_url()."?page=".MD5('hal 1');
                $data['next'] = base_url()."?page=".MD5('hal 3');
            }else if($page == MD5("hal 3")){
                $data['title'] = 'Halaman 3';
                $data['kata'] = [
                    [
                        "kata" => "يَـسُوۡمُـوۡنَـكُـمۡ",
                        "audio" => "3.1.m4a"
                    ],
                    [
                        "kata" => "اٰيٰـتُـهٗ زَادَتۡـهُمۡ",
                        "audio" => "3.2.m4a"
                    ],
                    [
                        "kata" => "رَبَّهٗ فَـغَـوٰى",
                        "audio" => "3.3.m4a"
                    ],
                    [
                        "kata" => "وَمَا ظَلَـمُـوۡنَا",
                        "audio" => "3.4.m4a"
                    ],
                    [
                        "kata" => "وَمَا تَـفۡعَلُوۡا",
                        "audio" => "3.5.m4a"
                    ],
                    [
                        "kata" => "فَيُضٰعِفَهٗ لَهٗ",
                        "audio" => "3.6.m4a"
                    ],
                    [
                        "kata" => "لَهٗ لَـنٰصِحُـوۡنَ",
                        "audio" => "3.7.m4a"
                    ],
                    [
                        "kata" => "لَهٗ لَحٰـفِظُـوۡنَ",
                        "audio" => "3.8.m4a"
                    ],
                    [
                        "kata" => "يَفۡقَهُوۡا قَـوۡلِيۡ",
                        "audio" => "3.9.m4a"
                    ],
                    [
                        "kata" => "هٰـرُوۡنَ اَخِيۡ",
                        "audio" => "3.10.m4a"
                    ],
                ];
                $data['back'] = base_url()."?page=".MD5('hal 2');
                $data['next'] = base_url()."?page=".MD5('hal 4');
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