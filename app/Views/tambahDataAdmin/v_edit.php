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

    <form action="/admin/update/<?= $shop['id_desain']; ?>" method="POST" enctype="multipart/form-data" style="width: 750px;">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $shop['slug']; ?>">
        <input type="hidden" name="coverLama" id="" value="<?= $shop['cover_desain']; ?>">
        <div class="row mb-3">
            <label for="judul" class="col-sm-2 col-form-label">Judul Desain</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= (old('judul')) ? old('judul') : $shop['nama_desain'] ?>" autofocus>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('judul'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">Harga Desain</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" value="<?= (old('harga')) ? old('harga') : $shop['harga_desain'] ?>">
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('harga'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="cover" class="col-sm-2 col-form-label">Cover Desain</label>
            <div class="col-sm-2">
                <img src="/img/portofolio/illustration/<?= $shop['cover_desain'] ?>" alt="" class="img-thumbnail img-previewShop">
            </div>
            <div class="col-sm-8">
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" id="cover" name="cover" onchange="previewImgShop()">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('cover'); ?>
                    </div>
                    <label class="custom-file-label" for="cover"><?= $shop['cover_desain']; ?></label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" value="<?= (old('deskripsi')) ? old('deskripsi') : $shop['deskripsi_desain'] ?>">
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('deskripsi'); ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        <a href="/admin/adminShop" class="btn btn-light">Kembali</a>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->