<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\UserModel;
use Controller;

$this->load->library('session');

class Auth extends BaseController
{
    public function index()
    {
        echo view('Templates/header', ['title' => "Login/Register"]);
        echo view('login');
        echo view('Templates/footer');
    }

    public function saveDb()
    {
        $fName = $this->request->getPost('fname');
        $lName = $this->request->getPost('lname');
        $email = $this->request->getPost('email');
        $address = $this->request->getPost('address');
        //$password = $this->request->getPost('regPass');
        $password = $this->request->getPost('password');
        $role = "2";
        $gender = $this->request->getPost('gender');

        $data = [
            "fname" => $fName,
            "lname" => $lName,
            "email" => $email,
            "address" => $address,
            "password" => Hash::make($password),
            "roleId" => $role,
            "gender" => $gender
        ];
        $userModel = new UserModel();
        $query = $userModel->insert($data);

        if (!$query) {
            echo "Failed";
            return redirect()->back()->with("fail", "Something went wrong.");
        } else {
            return redirect()->to("/")->with("success", "Successfully registered.");
        }
    }

    public function checkDb()
    {
        $uname = $this->request->getPost("uname");
        $password = $this->request->getPost("password");

        $userModel = new UserModel();
        $query = $userModel->where("email", $uname)->first();

        if ($query) {
            $result = $query["password"];
            if (Hash::check($result, $password)) {
                $sessionData = [
                    "userId" => $query["userId"],
                    "fname" => $query["fname"],
                    "lname" => $query["lname"],
                    'isLoggedIn' => true
                ];
                session()->set($sessionData);
            } else {
                echo "pdnm";
            }
        } else {
            echo "udne";
        }
    }
}
