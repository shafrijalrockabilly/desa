<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    private $strukturModel;
    private $homeModel;
    private $rtrwModel;
    private $sejarahModel;
    private $visimisiModel;

    public function __construct(){
        $this->strukturModel = new \App\Models\struktur();
        $this->homeModel = new \App\Models\home();
        $this->rtrwModel = new \App\Models\rtrw();
        $this->sejarahModel = new \App\Models\sejarah();
        $this->visimisiModel = new \App\Models\visimisi();

       
    }
    public function home(){
        $rows1 = $this->homeModel
                ->orderBy("home","asc")
                ->FindAll();

        $rows2 = $this->sejarahModel
                ->orderBy("sejarah","asc")
                ->FindAll();

        $rows3 = $this->strukturModel
                ->orderBy("nik","asc")
                ->FindAll();

        $rows4 = $this->rtrwModel
                ->orderBy("jabatan","asc")
                ->FindAll();

        $rows5 = $this->visimisiModel
                ->orderBy("visimisi","asc")
                ->FindAll();
    
        $data = ([
            "rows1" => $rows1,
            "rows2" => $rows2,
            "rows3" => $rows3,
            "rows4" => $rows4,
            "rows5" => $rows5,
        ]); 
    
        return view("user/home",$data);

    }
 }
