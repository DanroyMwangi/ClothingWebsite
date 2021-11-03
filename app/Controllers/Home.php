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
	public function Login()
	{
		//$this->load->helper('url');
		echo base_url();
		//return view('login');
	}
}
