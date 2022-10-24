<?php if (in_groups('admin')) : ?>
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

        <form action="/admin/savePorto" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Judul Desain</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" style="width: 500px;" value="<?= old('judul'); ?>" autofocus>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="cover" class="col-sm-2 col-form-label">Cover Desain</label>
                <div class="col-sm-2">
                    <img src="/img/portofolio/default.jpg" alt="" class="img-thumbnail img-previewPorto">
                </div>
                <div class="col-sm-4">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" id="cover" name="cover" onchange="previewImgPorto()">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('cover'); ?>
                        </div>
                        <label class="custom-file-label" for="cover">Pilih gambar..</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>

        <div class="container mt-4">
            <h4 class="text-center mb-5">DAFTAR DATA DESAIN PORTOFOLIO</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($porto as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/portofolio/<?= $p['cover_desain']; ?>" alt="" class="coverAdmin"></td>
                            <td><?= $p['nama_desain']; ?></td>
                            <td>
                                <a href="/admin/editPorto/<?= $p['slug']; ?>" class="btn btn-primary">Edit</a>
                                <a href="/admin/deletePorto/<?= $p['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</a>
                                <a href="/admin/download/<?= $p['id']; ?>" class="btn btn-info">Download</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
<?php endif; ?>