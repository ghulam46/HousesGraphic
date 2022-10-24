<?php

use CodeIgniter\Filters\CSRF;
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
    </div>

    <form action="<?= base_url('/Admin/saveShop'); ?>" method="POST" enctype="multipart/form-data" style="width: 750px;">
        <?= csrf_field(); ?>
        <div class="row mb-3">
            <label for="judul" class="col-sm-2 col-form-label">Judul Desain</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= old('judul'); ?>" autofocus>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('judul'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">Harga Desain</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" value="<?= old('harga'); ?>">
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('harga'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="cover" class="col-sm-2 col-form-label">Cover Desain</label>
            <div class="col-sm-2">
                <img src="/img/portofolio/illustration/default.jpg" alt="" class="img-thumbnail img-previewShop">
            </div>
            <div class="col-sm-8">
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" id="cover" name="cover" onchange="previewImgShop()">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('cover'); ?>
                    </div>
                    <label class="custom-file-label" for="cover">Pilih gambar..</label>
                </div>


                <!-- <input class="<?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" id="cover" name="cover" value="<?= old('cover'); ?>" type="file" id="cover" name="cover">
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('cover'); ?>
                </div> -->
            </div>
        </div>
        <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" value="<?= old('deskripsi'); ?>" id="deskripsi" name="deskripsi" value="<?= old('deskripsi'); ?>">
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('deskripsi'); ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>

    <div class="container mt-4">
        <h4 class="text-center mb-5">DAFTAR DATA DESAIN SHOP</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($shop as $s) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><img src="/img/portofolio/illustration/<?= $s['cover_desain']; ?>" alt="" class="coverAdmin"></td>
                        <td><?= htmlentities($s['nama_desain']); ?></td>
                        <td><?= number_to_currency($s['harga_desain'], 'IDR'); ?></td>
                        <td style="width: 300px; text-align: justify;"><?= $s['deskripsi_desain']; ?></td>
                        <td>
                            <a href="/admin/edit/<?= $s['slug']; ?>" class="btn btn-primary">Edit</a>
                            <form action="/admin/<?= $s['id_desain']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                            </form>
                        </td>
                        <!-- <td>
                            <div class="text-center">
                                <a href="" class="btn btn-primary tombol">Update</a>
                                <a href="/admin/delete/<?= $s['id_desain']; ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </td> -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->