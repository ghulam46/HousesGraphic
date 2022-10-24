<?php

namespace App\Controllers;

use App\Models\PortoModel;
use App\Models\ShopModel;


class Home extends BaseController
{
    protected $portoModel;
    protected $shopModel;

    public function __construct()
    {
        $this->portoModel = new PortoModel();
        $this->shopModel = new ShopModel();
        helper('number');
        helper('form');
    }

    public function landingpage()
    {
        $data = [
            'title' => 'Houses Graphic | Indonesia',
            'shop' => $this->shopModel->getDesain(),
            // 'cart' => array_values(session('cart'))
        ];
        echo view('layout/v_header', $data);
        echo view('layout/v_navbar');
        echo view('pages/landingpage');
        echo view('layout/v_footer');
        // return view('pages/landingpage', $data);
    }

    public function shop()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $this->shopModel->search($keyword);
        } else {
            $this->shopModel->getDesain();
        }

        $data = [
            'title' => 'Houses Graphic | Indonesia',
            'shop' => $this->shopModel->getDesain(),
            'pager' => $this->shopModel->pager,
            'keyword' => $keyword,
            // 'cart' => array_values(session('cart')),
        ];
        echo view('layout/v_header', $data);
        echo view('layout/v_navbar');
        echo view('pages/shop', $data);
        echo view('layout/v_footer');
        // return view('pages/shop', $data);
    }

    // public function detaildesign()
    // {
    //     $data = [
    //         'title' => 'Detail Design | Houses Graphic'
    //     ];

    //     echo view('layout/v_header', $data);
    //     echo view('layout/v_navbar');
    //     echo view('pages/detaildesign');
    //     echo view('layout/v_footer');
    //     // return view('pages/detaildesign', $data);
    // }


    public function portofolio()
    {

        $porto = $this->portoModel->findAll();

        $data = [
            'title' => 'Portofolio | Houses Graphic',
            'porto' => $porto,
            // 'cart' => array_values(session('cart')),
        ];
        echo view('layout/v_header', $data);
        echo view('layout/v_navbar');
        echo view('pages/portofolio');
        echo view('layout/v_footer');

        // return view('pages/portofolio', $data);
    }


    public function aboutUs()
    {
        $data = [
            'title' => 'About Us | Houses Graphic',
            // 'cart' => array_values(session('cart'))
        ];
        echo view('layout/v_header', $data);
        echo view('layout/v_navbar');
        echo view('pages/aboutUs');
        echo view('layout/v_footer');
        // return view('pages/aboutUs', $data);
    }


    // public function contactUs()
    // {
    //     $data = [
    //         'title' => 'Contact Us | Houses Graphic',
    //         // 'cart' => array_values(session('cart'))
    //     ];
    //     echo view('layout/v_header', $data);
    //     echo view('layout/v_navbar');
    //     echo view('pages/contactUs');
    //     echo view('layout/v_footer');
    //     // return view('pages/contactUs', $data);
    // }
}
