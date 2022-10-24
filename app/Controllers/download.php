<?php

namespace App\Controllers;

use App\Models\ShopModel;

class download extends BaseController
{
    protected $shopModel;

    public function __construct()
    {
        $this->shopModel = new ShopModel();
    }

    public function index($id)
    {
        $dataShop = $this->shopModel->find($id);
        return $this->response->download('img/portofolio/illustration/' . $dataShop['cover_desain'], null);
    }
}
