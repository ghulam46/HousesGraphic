<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderProductModel extends Model
{
    protected $table = 'order_products';
    protected $useTimestamps = false;
    protected $allowedFields = ['id_desain', 'nama_desain', 'cover_desain', 'harga_desain', 'qty'];
}
