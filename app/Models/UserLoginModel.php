<?php

namespace App\Models;

use CodeIgniter\Model;

class UserLoginModel extends Model
{
    protected $table = 'userlogin';
    protected $primaryKey = 'userloginId';
    protected $allowedFields = ['userId', 'userIp'];


}

