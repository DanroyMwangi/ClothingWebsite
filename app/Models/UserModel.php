<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'userId';
    protected $allowedFields = ['fname', 'lname', 'email', 'password', 'gender', 'roleId'];

    public function getCustomers(): array
    {
        return $this->getWhere(['roleId' => 2, "isDeleted" => 0])->getResultArray();
    }

    public function getAdmins(): array
    {
        return $this->getWhere(['roleId' => 1, "isDeleted" => 0])->getResultArray();
    }
    public function getDeletedUsers(): array
    {
        return $this->getWhere(['roleId' => 2, "isDeleted" => 1])->getResultArray();
    }
}

