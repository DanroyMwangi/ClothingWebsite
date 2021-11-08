<?php

namespace App\Controllers;

use Controller;

class Test extends BaseController
{
	public function index()
	{
        print_r($this->session()->all_userdata());
    }
}
