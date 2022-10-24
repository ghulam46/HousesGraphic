<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\shopModel;

use App\Models\OrderUsersModel;
use App\Models\OrderProductModel;

class Cart extends BaseController
{
    protected $orderUserModel;
    protected $orderProductModel;

    public function __construct()
    {
        session();
        helper('number');
        helper('text');
        $this->orderUsersModel = new OrderUsersModel();
        $this->orderProductModel = new OrderProductModel();
    }

    public function index()
    {
        // $item = array_values(session('cart'));
        // if (count($this->$item == 0)) {
        //     $this->session->setFlashdata('eror', 'Silahkan pilih produk terlebih dahulu');
        // }

        $data = [
            'title' => 'Keranjang | Houses Graphic',
            'titleHeader' => 'KERANJANG',
            'cart' => array_values(session('cart')),
            'total' => $this->total()
        ];

        echo view('layout/v_header', $data);
        echo view('layout/v_navbar');
        echo view('pages/cart');
        echo view('layout/v_footer');
        // return view('pages/cart', $data);
    }

    public function addtocart($id_desain)
    {
        $shopModel = new shopModel();
        $shop = $shopModel->find($id_desain);
        $item = array(
            'id' => $shop['id_desain'],
            'nama' => $shop['nama_desain'],
            'deskripsi' => $shop['deskripsi_desain'],
            'cover' => $shop['cover_desain'],
            'harga' => $shop['harga_desain'],
            'quantity' => 1
        );
        $session = session();
        if ($session->has('cart')) {
            $index = $this->exists($id_desain);
            $cart = array_values(session('cart'));
            if ($index == -1) {
                array_push($cart, $item);
                $session->set('cart', $cart);
            } else {
                $cart[$index]['quantity']++;
            }
            $session->set('cart', $cart);
            // dd($cart);
        } else {
            $cart = array($item);
            $session->set('cart', $cart);
        }
        // flashdata
        session()->setFlashdata('pesan', 'Produk berhasil dimasukkan ke keranjang');

        return redirect()->to(base_url('home/shop'));
        // return $this->response->redirect(base_url('cart/index'));
    }

    public function remove($id)
    {
        $index = $this->exists($id);
        $cart = array_values(session('cart'));
        unset($cart[$index]);
        $session = session();
        $session->set('cart', $cart);
        return redirect()->to(base_url('pages/cart'));
    }

    public function updateCart()
    {
        $cart = array_values(session('cart'));
        for ($i = 0; $i < count($cart); $i++) {
            $cart[$i]['quantity'] = $_POST['quantity'][$i];
        }
        $session = session();
        $session->set('cart', $cart);
        return redirect()->to('pages/cart');
    }

    private function exists($id_desain)
    {
        $item = array_values(session('cart'));
        for ($i = 0; $i < count($item); $i++) {
            if ($item[$i]['id'] == $id_desain) {
                return $i;
            }
        }
        return -1;
    }

    private function total()
    {
        $s = 0;
        $item = array_values(session('cart'));
        foreach ($item as $itm) {
            $s += $itm['harga'] * $itm['quantity'];
        }
        return $s;
    }

    public function placeOrder()
    {
        $total_harga = $this->total();
        $cart = array_values(session('cart'));
        // dd($cart);
        $this->orderUsersModel->save([
            'kode_transaksi' => $this->request->getVar('kode_transaksi'),
            'nama_user' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'total_harga' => $total_harga
        ]);

        foreach ($cart as $c) {
            $order_id = $this->orderProductModel->save([
                'id_desain' => $c['id'],
                'nama_desain' => $c['nama'],
                'harga_desain' => $c['harga'],
                'qty' => $c['quantity'],
                'cover_desain' => $c['cover']
            ]);
        }

        // menghapus cart ketika produk sudah berhasil terbeli
        $index = $this->exists($order_id);
        $cart = array_values(session('cart'));
        // dd($cart);
        unset($cart[$index]);
        $session = session();
        $session->set('cart', $cart);
        session()->setFlashdata('pesan', 'Produk berhasil dibeli, silahkan untuk di download.');

        return redirect()->to('/orderProduct');
    }


    public function checkout()
    {
        $data = [
            'title' => 'Checkout | Houses Graphic',
            'cart' => array_values(session('cart'))
        ];
        echo view('layout/v_header', $data);
        echo view('layout/v_navbar');
        echo view('pages/checkout');
        echo view('layout/v_footer');
    }


    public function destroy()
    {
        // $cart = array_values(session('cart'));
        // $cart->destroy('cart');
        session_destroy();
    }
}
