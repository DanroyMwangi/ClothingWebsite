<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\UserLoginModel;
use App\Models\CategoryModel;
use Controller;

class Auth extends BaseController
{
    public function index()
    {
        echo view('Templates/header', ['title' => "Login/Register"]);
        echo view('auth');
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
        $userModel = new UserLoginModel();
        $query = $userModel->insert($data);

        if (!$query) {
            echo "Failed";
        } else {
            $result = $userModel->where("email", $email)->first();
            $sessionData = [
                "userId" => $result["userId"],
                "fname" => $result["fname"],
                "lname" => $result["lname"],
                'isLoggedIn' => true
            ];
            session()->set($sessionData);
            echo "Success";
        }
    }

    /**
     * @throws \ReflectionException
     */
    public function checkDb()
    {
        $uname = $this->request->getPost("uname");
        $password = $this->request->getPost("password");
        /*$userIp = $this->request->getPost("userAddress");*/

        $userModel = new CategoryModel();
        $query = $userModel->where(["email"=>$uname,"roleId"=>2])->first();

        if ($query) {
            $result = $query["password"];
            if (Hash::check($result, $password)) {
                $userLoginModel = new UserLoginModel();
                $userLoginModel->insert(["userId"=>$query["userId"]]);
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

    /**
     * @throws \ReflectionException
     */
    public function Logout()
    {
        date_default_timezone_set('Africa/Nairobi');
        $logoutTime = date('Y-m-d H:i:s', time());
        $userLoginModel = new UserLoginModel();
        //$currentUser =
        $userLoginModel->update(["logoutTime"=> strval($logoutTime)],["userId"=>session()->get("userId")]);
        session()->destroy();
        return redirect()->to("/");
    }
}
