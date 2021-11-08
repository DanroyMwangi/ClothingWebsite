<?php

namespace App\Controllers;


use App\Models\UserModel;

class Admin extends BaseController
{

    public function index()
    {
        echo view('AdminDashboard/adminauth',["title"=>"Admin Panel"]);
    }
    public function dash(){
        $customerModel = new UserModel();
        $customers = $customerModel->getWhere(['roleId' => 2])->getResult();
        echo json_encode($customers)."<br>";
        print_r(json_decode(json_encode($customers)));
        //return view('AdminDashboard/admindashboard',["title"=>"Admin Panel","customers"=>$customers]);
    }
}
