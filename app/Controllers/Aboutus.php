<?php

namespace App\Controllers;

class Aboutus extends BaseController
{
	public function index()
	{
        echo view('Templates/header',['title'=>"Aboutus"]);
		echo view('aboutus');
		echo view('Templates/footer');
	}
}
