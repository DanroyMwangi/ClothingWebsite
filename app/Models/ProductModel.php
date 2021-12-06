<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'productId';
    protected $allowedFields = ['prodName', 'prodDescription','prodImage','unitPrice','availableQuantity','subId'];

    public function getProducts(): array
    {
        return $this->getWhere(["isDeleted" => 0])->getResultArray();
    }
}

