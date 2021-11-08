<?php

namespace App\Controllers;

class Art extends BaseController
{
	public function index()
	{
        echo view('Templates/header',['title'=>"Art"]);
		echo view('art');
		echo view('Templates/footer');
	}
}
