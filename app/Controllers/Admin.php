<?php

namespace App\Controllers;


use App\Libraries\Hash;
use App\Models\ProductModel;
use App\Models\UserLoginModel;
use App\Models\CategoryModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    protected $customerModel;
    protected $productModel;

    public function __construct(){
        $this->customerModel = new UserModel();
        $this->productModel = new ProductModel();
    }
    public function index()
    {
        echo view('AdminDashboard/adminauth',["title"=>"Admin Panel"]);
    }
    public function dash(){

        $customers = $this->customerModel->getCustomers();
        $products = $this->productModel->getProducts();

        return view('AdminDashboard/admindashboard',["title"=>"Admin Panel","customers"=>$customers,"products"=>[]]);
    }
    public function getData(){

    }

    public function checkDb()
    {
        $uname = $this->request->getPost("uname");
        $password = $this->request->getPost("password");
        /*$userIp = $this->request->getPost("userAddress");*/

        $userModel = new CategoryModel();
        $query = $userModel->where(["email"=>$uname,"roleId"=>1])->first();

        if ($query) {
            $result = $query["password"];
            if ($result == $password) {
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
}
