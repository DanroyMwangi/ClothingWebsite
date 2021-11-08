<?php

namespace App\Controllers;

class Sneakers extends BaseController
{
	public function index()
	{
        echo view('Templates/header',['title'=>"Sneakers"]);
		echo view('sneakers');
		echo view('Templates/footer');
	}
}
