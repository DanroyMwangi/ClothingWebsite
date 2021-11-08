<?php

namespace App\Controllers;


class Home extends BaseController
{

    public function index()
	{
		echo view('Templates/header',['title'=>"Home"]);
		echo view('index');
		echo view('Templates/footer');
	}
}
