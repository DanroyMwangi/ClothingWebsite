<?php

namespace App\Controllers;

class Pets extends BaseController
{
	public function index()
	{
        echo view('Templates/header',['title'=>"Pets"]);
		echo view('pets');
		echo view('Templates/footer');
	}
}
