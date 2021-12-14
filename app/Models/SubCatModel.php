<?php

namespace App\Models;

use CodeIgniter\Model;

class SubCatModel extends Model
{
    protected $table = 'subcategory';
    protected $primaryKey = 'subId';
    protected $allowedFields = ['subName',"description" ,'categoryId'];

    public function getSubs(): array
    {
        return $this->getWhere(["isDeleted" => 0])->getResultArray();
    }
}

