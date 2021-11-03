<?php

namespace App\Controllers;

class Women extends BaseController
{
	public function index()
	{
        echo view('Templates/header',['title'=>"Women"]);
		echo view('women');
		echo view('Templates/footer');
	}
}
