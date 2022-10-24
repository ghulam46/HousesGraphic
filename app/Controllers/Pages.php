<?php

namespace App\Controllers;

use App\Models\ShopModel;

class Pages extends BaseController
{
    protected $shopModel;

    public function __construct()
    {
        $this->shopModel = new ShopModel();
        helper('number');
        helper('form');
    }

    // public function landingpage()
    // {
    //     $data = [
    //         'title' => 'Houses Graphic | Indonesia'
    //     ];
    //     return view('pages/landingpage', $data);
    // }


    // load database portofolio 
    // load database shop
    // protected $portoModel;
    // protected $shopModel;

    // public function __construct()
    // {
    //     $this->portoModel = new PortoModel();
    //     $this->shopModel = new ShopModel();
    // }

    // public function portofolio()
    // {

    //     $porto = $this->portoModel->findAll();

    //     $data = [
    //         'title' => 'Portofolio | Houses Graphic',
    //         'porto' => $porto
    //         // 'dataporto' => $this->portoModel->paginate(5),
    //         // 'pager' => $this->portoModel->pager
    //     ];

    //     return view('pages/portofolio', $data);
    // }

    // public function detaildesign()
    // {
    //     $data = [
    //         'title' => 'Detail Design | Houses Graphic'
    //     ];

    //     return view('pages/detaildesign', $data);
    // }
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Design | Houses Graphic',
            'desain' => $this->shopModel->getDesain($slug),
            // 'cart' => array_values(session('cart'))
        ];

        // jika desain (nama slug) tidak ada di tabel
        if (empty($data['desain'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul desain ' . $slug . ' tidak ditemukan.');
        } else {
            echo view('layout/v_header', $data);
            echo view('layout/v_navbar');
            echo view('pages/detaildesign', $data);
            echo view('layout/v_footer');
        }
    }
}
