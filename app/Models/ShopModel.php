<?php

namespace App\Models;

use CodeIgniter\Model;

class ShopModel extends Model
{
    protected $table = 'shop';
    protected $primaryKey = 'id_desain';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_desain', 'slug', 'harga_desain', 'cover_desain', 'deskripsi_desain'];

    public function getDesain($slug = false)
    {
        if ($slug == false) {
            return $this->paginate(12, 'shop');
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        //FITUR SEARCH MENGGUNAKAN QUERY BUILDER 

        // search menggunakan beberapa baris
        // $builder = $this->table('shop');
        // $builder->like('nama_desain', $keyword);
        // return $builder;

        // search menggunakan chaining hanya satu baris
        // orLike untuk mencari keyword berdasarkan yang lainnya
        return $this->table('shop')->like('nama_desain', $keyword)->orLike('harga_desain', $keyword);
    }
}
