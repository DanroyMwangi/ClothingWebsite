<?php

namespace App\Controllers;

class Men extends BaseController
{
	public function index()
	{
        echo view('Templates/header',['title'=>"Men"]);
		echo view('men');
		echo view('Templates/footer');
	}
}
