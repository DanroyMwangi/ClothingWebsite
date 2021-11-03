<?php

namespace App\Controllers;

class Children extends BaseController
{
	public function index()
	{
        echo view('Templates/header',['title'=>"Children"]);
		echo view('children');
		echo view('Templates/footer');
	}
}
