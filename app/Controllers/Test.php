<?php

namespace App\Controllers;

use App\Models\UserModel;

class Test extends BaseController
{
	public function index()
	{
        $users = new UserModel();
    
		echo view('test',['users'=>$users->getUsers(),'title'=>'Test','customer'=>($users->getWhere(['fname'=>'Danroy'])->getResult())]);
	}
}
