<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderUsersModel extends Model
{
    protected $table = 'order_users';
    protected $useTimestamps = true;
    protected $allowedFields = ['kode_transaksi', 'nama_user', 'alamat', 'total_harga'];
}
