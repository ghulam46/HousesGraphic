<?php

namespace App\Models;

use CodeIgniter\Model;

class PortoModel extends Model
{
    protected $table = 'portofolio';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_desain', 'slug', 'cover_desain'];


    public function getDesainPorto($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
