<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\UserModel;
use Controller;
use User;

class Auth extends BaseController
{
	public function index()
	{
        echo view('Templates/header',['title'=>"Login/Register"]);
		echo view('login');
		echo view('Templates/footer');
	}
	public function saveDb(){
		$fName = $this->request->getPost('fname');
		$lName = $this->request->getPost('lname');
		$email = $this->request->getPost('email');
		$address = $this->request->getPost('address');
		//$password = $this->request->getPost('regPass');
		$password =$this->request->getPost('password');
		$role = "2";
		$gender = $this->request->getPost('gender');

		$data = [
			"fname"=>$fName,
			"lname"=>$lName,
			"email"=>$email,
			"address"=>$address,
			"password"=> Hash::make($password),
			"roleId"=>$role,
			"gender"=>$gender
		];
		$userDb = new UserModel();
		$query = $userDb->insert($data);
		
		if(!$query){
			echo "Failed";
			return redirect()->back()->with("fail", "Something went wrong.");
		}
		else{
			return redirect()->to("/")->with("success", "Successfully registered.");
		}
	}
}
