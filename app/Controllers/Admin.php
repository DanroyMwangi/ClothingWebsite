<?php

namespace App\Controllers;


use App\Libraries\Hash;
use App\Models\ProductModel;
use App\Models\SubCatModel;
use App\Models\UserLoginModel;
use App\Models\CategoryModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    protected $customerModel,$productModel,$categoryModel,$subModel;

    public function __construct(){
        $this->customerModel = new UserModel();
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
        $this->subModel = new SubCatModel();
    }
    public function index()
    {
        echo view('AdminDashboard/adminauth',["title"=>"Admin Panel"]);
    }
    public function dash(){

        $customers = $this->customerModel->getCustomers();
        $categories = $this->categoryModel->getCategories();
        $subCats = $this->subModel->getSubs();
        $products = $this->productModel->getProducts();

        return view('AdminDashboard/admindashboard',
            [
                "title"=>"Admin Panel",
                "customers"=>$customers,
                "subs"=>$subCats,
                "categories"=>$categories,
                "products"=>[]
            ]);
    }
    public function getData(){

    }

    public function checkDb()
    {
        $uname = $this->request->getPost("uname");
        $password = $this->request->getPost("password");
        /*$userIp = $this->request->getPost("userAddress");*/

        $userModel = new UserModel();
        $query = $userModel->where(['email'=>$uname,'roleId'=>1])->first();

        if ($query) {
            $result = $query["password"];
            if ($result == $password) {
                $userLoginModel = new UserLoginModel();
                $userLoginModel->insert(["userId"=>$query["userId"]]);
                $sessionData = [
                    "userId" => $query["userId"],
                    "fname" => $query["fname"],
                    "lname" => $query["lname"],
                    'isAdminLoggedIn' => true
                ];
                session()->set($sessionData);
            } else {
                echo "pdnm";
            }
        } else {
            echo "udne";
        }
    }

    public function addCategory(){
        $type = $this->request->getPost("type");

        if($type == "mainCat") {
            $catName = $this->request->getPost("catName");
            $description = $this->request->getPost("description");

            $data = [
                "categoryName" => $catName,
                "description" => $description
            ];

            $query = $this->categoryModel->insert($data);
            if (!$query) {
                echo "Failed";
            } else {
                echo "Success";
            }
        }
        else if($type == "sub"){
            $subName = $this->request->getPost("subName");
            $allCategories = $this->request->getPost("allCategories");
            $description = $this->request->getPost("subDescription");
            $data = [
                "subName" => $subName,
                "categoryId"=> $allCategories,
                "description" => $description
            ];

            $query = $this->subModel->insert($data);
            if (!$query) {
                echo "Failed";
            } else {
                echo "Success";
            }
        }
    }

    public function Logout(){
        session()->destroy();
        return redirect()->to("/admin");
    }
}
