<?php

namespace App\Models;

use CodeIgniter\Model;

class MobileModel extends Model
{
    protected $table = 'shop';
    protected $primaryKey = 'id_desain';
    protected $allowedFields = ['nama_desain', 'harga_desain', 'cover_desain', 'deskripsi_desain'];
}
