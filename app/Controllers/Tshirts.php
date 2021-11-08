<?php

namespace App\Controllers;

class Tshirts extends BaseController
{
	public function index()
	{
        echo view('Templates/header',['title'=>"Tshirts"]);
		echo view('tshirts');
		echo view('Templates/footer');
	}
}
