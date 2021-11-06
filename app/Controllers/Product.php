<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        echo view('Templates/header',['title'=>"Product"]);
        echo view('product');
        echo view('Templates/footer');
    }
}
