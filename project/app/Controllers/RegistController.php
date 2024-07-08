<?php
namespace App\Controllers;

class RegistController extends BaseController{

	private $adminModel;
	private $session;

	public function __construct(){
		$this->adminModel = new \App\Models\Admin();
		$this->session = \Config\Services::session();
	}
	public function register(){
		return view("admin/register");
	}
	public function proses_register(){
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");
        $nama = $this->request->getPost("nama");

        $usernameExist = $this->adminModel
        ->where("username",$username)->first();

        if($usernameExist){
            $this->session->setFlashdata("pesan","Usename sudah digunakan");
            return redirect()->to(base_url('register'));
        }
        
        if(strlen($password) < 5){
            $this->session->setFlashdata("pesan","Password minimum 5 karakter");
            return redirect()->to(base_url('register'));
        }

        $this->adminModel->insert([
            "username" => $username,
            "password" => password_hash($password, PASSWORD_BCRYPT),
            "nama" => $nama,
        ]);

        return redirect()->to(base_url('login'));

    }

}
?>