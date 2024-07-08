<?php

namespace App\Controllers;

class AppController extends BaseController
{
    private $strukturModel;
    private $homeModel;
    private $rtrwModel;
    private $sejarahModel;
    private $visimisiModel;
    private $adminModel;
    private $session;

    public function __construct(){
        $this->strukturModel = new \App\Models\struktur();
        $this->homeModel = new \App\Models\home();
        $this->rtrwModel = new \App\Models\rtrw();
        $this->sejarahModel = new \App\Models\sejarah();
        $this->visimisiModel = new \App\Models\visimisi();
        $this->adminModel = new \App\Models\admin();
        $this->session = \Config\Services::session();
       
        if($this->session->admin_id == null){
            $this->session->setFlashdata('pesan',"Login Terlebih Dahulu");
            header("location:".base_url('login'));
            exit();
        }
       
    }

    public function hello(){
        $data = ([
            "nama" => "chafidz",
        ]);
        return view("admin/hello",$data);
    }
   
    public function template(){
        return view('admin/template');
    }
    
    public function register(){
        return view('admin/register');
    }

    public function proses_tambah_struktur(){
        $nik             = $this->request->getpost("nik");
        $nama            = $this->request->getpost("nama");
        $jabatan         = $this->request->getpost("jabatan");
        $alamat          = $this->request->getpost("alamat");


        $this->strukturModel->insert([
            "nik"              => $nik,
            "nama"             => $nama,
            "jabatan"          => $jabatan,
            "alamat"           => $alamat,
        ]);

        return redirect()->to(base_url("struktur_desa"));
    }
    public function struktur_desa(){
        $rows = $this->strukturModel
                ->orderBy("nik","asc")
                ->FindAll();

        $data = ([
            "rows" => $rows,
        ]); 

        return view("admin/struktur_desa",$data);

    }
    public function hapus_struktur($nik){
        $this->strukturModel
        ->where("nik",$nik)->delete();
        return redirect()->to(base_url("struktur_desa"));
    }


    public function edit_struktur_desa($nik){
        $struktur = $this->strukturModel
                    ->where("nik", $nik)
                    ->first();

        $data = ([
            "struktur" => $struktur,
        ]);

        return view("admin/edit_struktur_desa",$data);
    }

    public function proses_edit_struktur_desa(){
        // Ambil Data dari Form
        $nik             = $this->request->getPost("nik");
        $nama            = $this->request->getPost("nama");
        $jabatan         = $this->request->getPost("jabatan");
        $alamat          = $this->request->getPost("alamat");

            $this->strukturModel
            ->where("nik", $nik)
            ->set([
                "nik"         => $nik,
                "nama"        => $nama,
                "jabatan"     => $jabatan,
                "alamat"      => $alamat,
            ])->update();
        
        return redirect()->to(base_url('struktur_desa'));
    }
    

// ------------------------HomeCntroller------------------------//
public function proses_tambah_home(){
    $home             = $this->request->getpost("home");


    $this->homeModel->insert([
        "home"              => $home,
    ]);

    return redirect()->to(base_url("dashboards"));
}

public function dashboards(){
    $rows = $this->homeModel
            ->orderBy("home","asc")
            ->FindAll();

    $data = ([
        "rows" => $rows,
    ]); 

    return view("admin/dashboards",$data);

}

public function home(){
    $rows = $this->homeModel
            ->orderBy("home","asc")
            ->FindAll();

    $data = ([
        "rows" => $rows,
    ]); 

    return view("admin/home",$data);

}
public function hapus_home($id){
    $this->homeModel
    ->where("id",$id)->delete();
    return redirect()->to(base_url("home"));
}
public function edit_home($id){
    $home = $this->homeModel
                   ->where("id",$id)
                   ->first();

    $data = ([
        "home" => $home,
    ]);

    return view("admin/edit_home",$data);
}
public function proses_edit_home(){
    $id   = $this->request->getPost("id");
   $home   = $this->request->getPost("home");

   $this->homeModel
   ->where("id", $id)
   ->set([
    "home"   => $home,
   ])->update();

   return redirect()->to(base_url('home'));
}
// ---------------RtrwController---------------//
public function proses_tambah_rtrw(){
    $nik             = $this->request->getpost("nik");
    $nama            = $this->request->getpost("nama");
    $jabatan         = $this->request->getpost("jabatan");
    $alamat          = $this->request->getpost("alamat");


    $this->rtrwModel->insert([
        "nik"              => $nik,
        "nama"             => $nama,
        "jabatan"          => $jabatan,
        "alamat"           => $alamat,
    ]);

    return redirect()->to(base_url("rtrw"));
}
public function rtrw(){
    $rows = $this->rtrwModel
            ->orderBy("jabatan","asc")
            ->FindAll();

    $data = ([
        "rows" => $rows,
    ]); 

    return view("admin/rtrw",$data);

}
public function hapus_rtrw($nik){
    $this->rtrwModel
    ->where("nik",$nik)->delete();
    return redirect()->to(base_url("rtrw"));
}

public function edit_rtrw($nik){
    $rtrw = $this->rtrwModel
                ->where("nik", $nik)
                ->first();

    $data = ([
        "rtrw" => $rtrw,
    ]);

    return view("admin/edit_rtrw",$data);
}

public function proses_edit_rtrw(){
    // Ambil Data dari Form
    $nik             = $this->request->getPost("nik");
    $nama            = $this->request->getPost("nama");
    $jabatan         = $this->request->getPost("jabatan");
    $alamat          = $this->request->getPost("alamat");

        $this->rtrwModel
        ->where("nik", $nik)
        ->set([
            "nik"         => $nik,
            "nama"        => $nama,
            "jabatan"     => $jabatan,
            "alamat"      => $alamat,
        ])->update();
    
    return redirect()->to(base_url('rtrw'));
}

// ------------SejarahController-------------//

public function proses_tambah_sejarah(){
    $sejarah             = $this->request->getpost("sejarah");


    $this->sejarahModel->insert([
        "sejarah"              => $sejarah,
    ]);

    return redirect()->to(base_url("dashboards"));
}
public function sejarah(){
    $rows = $this->sejarahModel
            ->orderBy("sejarah","asc")
            ->FindAll();

    $data = ([
        "rows" => $rows,
    ]); 

    return view("admin/sejarah",$data);

}
public function hapus_sejarah($id){
    $this->sejarahModel
    ->where("id",$id)->delete();
    return redirect()->to(base_url("dashboards"));
}
public function edit_sejarah($id){
    $sejarah = $this->sejarahModel
                   ->where("id",$id)
                   ->first();

    $data = ([
        "sejarah" => $sejarah,
    ]);

    return view("admin/edit_sejarah",$data);
}
public function proses_edit_sejarah(){
    $id   = $this->request->getPost("id");
   $sejarah   = $this->request->getPost("sejarah");

   $this->sejarahModel
   ->where("id", $id)
   ->set([
    "sejarah"   => $sejarah,
   ])->update();

   return redirect()->to(base_url('sejarah'));
}

// ---------------Done-----------------//

// Vsi Misi Controlleerr
public function proses_tambah_visimisi(){
    $visimisi       = $this->request->getpost("visimisi");


    $this->visimisiModel->insert([
        "visimisi"              => $visimisi,
    ]);

    return redirect()->to(base_url("dashboards"));
}
public function visimisi(){
    $rows = $this->visimisiModel
            ->orderBy("visimisi","asc")
            ->FindAll();

    $data = ([
        "rows" => $rows,
    ]); 

    return view("admin/visimisi",$data);

}
public function hapus_visimisi($id){
    $this->visimisiModel
    ->where("id",$id)->delete();
    return redirect()->to(base_url("dashboards"));
}
public function edit_visimisi($id){
    $visimisi = $this->visimisiModel
                   ->where("id",$id)
                   ->first();

    $data = ([
        "visimisi" => $visimisi,
    ]);

    return view("admin/edit_visimisi",$data);
}
public function proses_edit_visimisi(){
    $id   = $this->request->getPost("id");
   $visimisi   = $this->request->getPost("visimisi");

   $this->visimisiModel
   ->where("id", $id)
   ->set([
    "visimisi"   => $visimisi,
   ])->update();

   return redirect()->to(base_url('visimisi'));
}


// 


    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
