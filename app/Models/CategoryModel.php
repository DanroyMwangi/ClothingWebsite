<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'categoryId';
    protected $allowedFields = ['categoryName'];

    public function getCategories(): array
    {
        return $this->getWhere(["isDeleted" => 0])->getResultArray();
    }
}

