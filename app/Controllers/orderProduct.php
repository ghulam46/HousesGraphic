<?php

namespace App\Controllers;

use App\Models\OrderProductModel;

class orderProduct extends BaseController
{
    protected $orderProduct;

    public function __construct()
    {
        $this->orderProduct = new OrderProductModel();
        helper('number');
    }


    public function index()
    {
        $orderProduct = $this->orderProduct->findAll();
        $data = [
            'title' => 'Order Product | Houses Graphic',
            'order' => $orderProduct,
            // 'cart' => array_values(session('cart'))
        ];
        echo view('layout/v_header', $data);
        echo view('layout/v_navbar');
        echo view('pages/checkout');
        echo view('layout/v_footer');
    }
}
