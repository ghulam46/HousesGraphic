<?php

namespace App\Controllers;

use App\Models\PortoModel;
use App\Models\ShopModel;
use App\Models\OrderUsersModel;
use App\Models\OrderProductModel;

class Admin extends BaseController
{
    protected $portoModel;
    protected $shopModel;
    protected $orderUserModel;
    protected $orderProductModel;

    public function __construct()
    {
        $this->portoModel = new PortoModel();
        $this->shopModel = new ShopModel();
        $this->orderUserModel = new OrderUsersModel();
        $this->orderProductModel = new OrderProductModel();
        helper('number');
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman Admin Dashboard'
        ];
        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('tambahDataAdmin/dashboard', $data);
        echo view('template/v_footer');
    }

    public function userList()
    {
        // $users = new \Myth\Auth\Models\UserModel();

        // untuk menampilkan role masing2 userLogin : admin dan user
        // dengan menggunakan query builder
        // join antara 3 table

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();


        $data = [
            'title' => 'Halaman Daftar User',
            'users' => $query->getResult()
            // 'users' => $users->findAll()
        ];
        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('tambahDataAdmin/v_userList', $data);
        echo view('template/v_footer');
    }

    public function userDetail($id = 0)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query = $builder->get();

        $data = [
            'title' => 'Halaman Detail User',
            'user' => $query->getRow()
            // 'users' => $users->findAll()
        ];

        if (empty($data['user'])) {
            redirect()->to('/Admin/userList');
        }
        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('tambahDataAdmin/v_user_detail', $data);
        echo view('template/v_footer');
    }

    public function userTransaction()
    {
        $orderUsers = $this->orderUserModel->findAll();
        $orderProducts = $this->orderProductModel->findAll();

        $data = [
            'title' => 'Halaman Daftar User Transaksi',
            'orderUsers' => $orderUsers,
            'orderProducts' => $orderProducts
        ];

        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('tambahDataAdmin/v_userTransaction', $data);
        echo view('template/v_footer');
    }

    public function adminPorto()
    {
        $porto = $this->portoModel->findAll();
        $data = [
            'title' => 'Halaman Admin Tambah Data Portofolio',
            'porto' => $porto,
            'validation' => \Config\Services::validation()
        ];
        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('tambahDataAdmin/v_content_porto', $data);
        echo view('template/v_footer');
    }

    public function adminShop()
    {
        $shop = $this->shopModel->findAll();
        $data = [
            'title' => 'Halaman Admin Tambah Data Shop',
            'shop' => $shop,
            'validation' => \Config\Services::validation()
        ];
        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('tambahDataAdmin/v_content_shop', $data);
        echo view('template/v_footer');
    }

    public function saveShop()
    {
        // validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[shop.nama_desain]',
                'errors' => [
                    'required' => '{field} desain harus diisi.',
                    'is_unique' => '{field} desain sudah ada.'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} desain harus diisi.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} desain harus diisi.'
                ]
            ],
            'cover' => [
                'rules' => 'max_size[cover,10000]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran cover terlalu besar',
                    'is_image' => 'Yang anda pilih bukan cover',
                    'mime_in' => 'Yang anda pilih bukan cover'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/')->withInput()->with('validation', $validation);
            // return redirect()->to(base_url('/Admin/adminShop'))->withInput();
        }

        // ambil gambar cover
        $fileCover = $this->request->getFile('cover');
        // cek apakah tidak ada gambar yang diupload
        if ($fileCover->getError() == 4) {
            $namaCover = 'default.jpg';
        } else {
            // generate nama cover random
            // $namaCover = $fileCover->getRandomName();
            // ambil nama file cover
            $namaCover = $fileCover->getName();
            // pindahkan file ke folder public/img
            $fileCover->move('img/portofolio/illustration', $namaCover);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->shopModel->save([
            'nama_desain' => $this->request->getVar('judul'),
            'slug' => $slug,
            'harga_desain' => $this->request->getVar('harga'),
            'cover_desain' => $namaCover,
            'deskripsi_desain' => $this->request->getVar('deskripsi')
        ]);

        // flashdata
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/Admin/adminShop');
    }

    public function savePorto()
    {
        // validasi input
        if (!$this->validate([
            // rules diambil dari "name" nya yg ada di v_content_porto
            'judul' => [
                'rules' => 'required|is_unique[portofolio.nama_desain]',
                'errors' => [
                    'required' => '{field} desain harus diisi.',
                    'is_unique' => '{field} desain sudah ada.'
                ]
            ],
            'cover' => [
                'rules' => 'max_size[cover,20000]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran cover terlalu besar',
                    'is_image' => 'Yang anda pilih bukan cover',
                    'mime_in' => 'Yang anda pilih bukan cover'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/')->withInput()->with('validation', $validation);
            return redirect()->to(base_url('/Admin/adminPorto'))->withInput();
        }

        // ambil gambar cover 
        $fileCoverPorto = $this->request->getFile('cover');

        // cek apakah tidak ada gambar yang diupload
        if ($fileCoverPorto->getError() == 4) {
            $namaCoverPorto = 'default.jpg';
        } else {
            // pindahkan file ke folder public/img
            $fileCoverPorto->move('img/portofolio');
            // ambil nama file cover
            $namaCoverPorto = $fileCoverPorto->getName();
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->portoModel->save([
            'nama_desain' => $this->request->getVar('judul'),
            'slug' => $slug,
            'cover_desain' => $namaCoverPorto
        ]);

        // flashdata
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/Admin/adminPorto');
    }


    public function download($id)
    {
        $porto = new PortoModel();
        $dataPorto = $porto->find($id);
        // dd($dataPorto);
        return $this->response->download('img/portofolio/' . $dataPorto['cover_desain'], null);
    }

    public function deletePorto($id)
    {
        // menghapus gambar cover dari server local
        // cari gambar cover berdasarkan id
        $porto = $this->portoModel->find($id);

        // cek jika file gambar cover default.jpg
        // jika cover bukan default.jpg maka hapus gambar
        if ($porto['cover_desain'] != 'default.jpg') {
            // hapus gambar cover
            unlink('img/portofolio/' . $porto['cover_desain']);
        }

        $this->portoModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/Admin/adminPorto');
    }

    public function editPorto($slug)
    {
        $porto = $this->portoModel->findAll();
        $data = [
            'title' => 'Halaman Admin Ubah Data Portofolio',
            'porto' => $porto,
            'validation' => \Config\Services::validation(),
            'porto' => $this->portoModel->getDesainPorto($slug)
        ];
        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('tambahDataAdmin/v_edit_porto', $data);
        echo view('template/v_footer');
    }

    public function updatePorto($id)
    {

        // cek judul desain
        // ambil data desain lama dengan mengambil data slug
        $desainPortoLama = $this->portoModel->getDesainPorto($this->request->getVar('slug'));

        // cek jika judul lama = judul baru, maka rule_judul required aja
        // jika beda, maka rule_judul ada required ada is_unique
        if ($desainPortoLama['nama_desain'] == $this->request->getVar('judul')) {
            $rule_judul_porto = 'required';
        } else {
            $rule_judul_porto = 'required|is_unique[portofolio.nama_desain]';
        }


        // validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul_porto,
                'errors' => [
                    'required' => '{field} desain harus diisi.',
                    'is_unique' => '{field} desain sudah ada.'
                ]
            ],
            'cover' => [
                'rules' => 'max_size[cover,20000]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran cover terlalu besar',
                    'is_image' => 'Yang anda pilih bukan cover',
                    'mime_in' => 'Yang anda pilih bukan cover'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('/admin/editPorto/' . $this->request->getVar('slug'))->withInput();
        }

        $fileCover = $this->request->getFile('cover');
        $fileCoverLama = $this->request->getVar('coverLamaPorto');
        // cek gambar cover, apakah tetap gambar cover lama
        if ($fileCover->getError() == 4) {
            $namaCover = $fileCoverLama;
        } else {
            $namaCover = $fileCover->getName();
            $fileCover->move('img/portofolio', $namaCover);
            unlink('img/portofolio/' . $fileCoverLama);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        // $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->portoModel->save([
            'id' => $id,
            'nama_desain' => $this->request->getVar('judul'),
            'slug' => $slug,
            'cover_desain' => $namaCover
        ]);

        // flashdata
        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/Admin/adminPorto');
    }

    public function delete($id_desain)
    {
        // menghapus gambar cover dari server local
        // cari gambar cover berdasarkan id
        $shop = $this->shopModel->find($id_desain);

        // cek jika file gambar cover default.jpg
        // jika cover bukan default.jpg maka hapus gambar
        if ($shop['cover_desain'] != 'default.jpg') {
            // hapus gambar cover
            unlink('img/portofolio/illustration/' . $shop['cover_desain']);
        }
        // kalo default.jpg hapus datanya saja yg ada ditabel
        $this->shopModel->delete($id_desain);
        // flashdata
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/Admin/adminShop');
    }

    public function edit($slug)
    {
        $shop = $this->shopModel->findAll();
        $data = [
            'title' => 'Halaman Admin Ubah Data Shop',
            'shop' => $shop,
            'validation' => \Config\Services::validation(),
            'shop' => $this->shopModel->getDesain($slug)
        ];
        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('tambahDataAdmin/v_edit', $data);
        echo view('template/v_footer');
    }

    public function update($id)
    {
        // cek judul desain
        // ambil data desain lama dengan mengambil data slug
        $desainLama = $this->shopModel->getDesain($this->request->getVar('slug'));

        // cek jika judul lama = judul baru, maka rule_judul required aja
        // jika beda, maka rule_judul ada required ada is_unique
        if ($desainLama['nama_desain'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[shop.nama_desain]';
        }

        // validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} desain harus diisi.',
                    'is_unique' => '{field} desain sudah ada.'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} desain harus diisi.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} desain harus diisi.'
                ]
            ],
            'cover' => [
                'rules' => 'max_size[cover,10000]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran cover terlalu besar',
                    'is_image' => 'Yang anda pilih bukan cover',
                    'mime_in' => 'Yang anda pilih bukan cover'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('/admin/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileCover = $this->request->getFile('cover');
        $fileCoverLama = $this->request->getVar('coverLama');
        // cek gambar cover, apakah tetap gambar cover lama
        if ($fileCover->getError() == 4) {
            $namaCover = $fileCoverLama;
        } else {
            $namaCover = $fileCover->getName();
            $fileCover->move('img/portofolio/illustration', $namaCover);
            unlink('img/portofolio/illustration/' . $fileCoverLama);
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->shopModel->save([
            'id_desain' => $id,
            'nama_desain' => $this->request->getVar('judul'),
            'slug' => $slug,
            'harga_desain' => $this->request->getVar('harga'),
            'cover_desain' => $namaCover,
            'deskripsi_desain' => $this->request->getVar('deskripsi')
        ]);

        // flashdata
        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/Admin/AdminShop');
    }

    public function deleteOrderUser($id)
    {
        $this->orderUserModel->delete($id);
        session()->setFlashdata('pesan', 'Data transaksi berhasil dihapus.');
        return redirect()->to('/admin/userTransaction');
    }

    public function deleteUserProduct($id)
    {
        $this->orderProductModel->delete($id);
        session()->setFlashdata('pesan', 'Data transaksi berhasil dihapus.');
        return redirect()->to('/admin/userTransaction');
    }
}
