<?php

namespace App\Controllers;

class Custom extends BaseController
{
	public function index()
	{
        echo view('Templates/header',['title'=>"Custom"]);
		echo view('custom');
		echo view('Templates/footer');
	}
}
