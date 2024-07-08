<?php
namespace App\Controllers;

class LoginController extends BaseController{

	private $adminModel;
	private $session;

	public function __construct(){
		$this->adminModel = new \App\Models\admin();
		$this->session = \Config\Services::session();
	}
	public function login(){
		return view("admin/login");
	}
	public function proses_login(){
		$username = $this->request->getPost("username");
        $password = $this->request->getPost("password");

        $admin = $this->adminModel
        ->where("username",$username)
        ->first();

        if($admin){
        	if(password_verify($password, $admin->password)){
        		$session_data = ([
        			"admin_id" => $admin->id,
        			"admin_nama" => $admin->nama,
        		]);
        		session()->set($session_data);
        		return redirect()->to(base_url('dashboards'));

        }else{
        	$this->session->setFlashdata("pesan","Password Salah");
        	return redirect()->to(base_url("login"));
        }
    	}else{
    		$this->session->setFlashdata("pesan","salah");
        	return redirect()->to(base_url("login"));	
    	}
	}

}
?>