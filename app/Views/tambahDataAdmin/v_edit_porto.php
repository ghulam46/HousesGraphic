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

    <form action="/admin/updatePorto/<?= $porto['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $porto['slug']; ?>">
        <input type="hidden" name="coverLamaPorto" id="" value="<?= $porto['cover_desain']; ?>">
        <div class="row mb-3">
            <label for="judul" class="col-sm-2 col-form-label">Judul Desain</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" style="width: 500px;" value="<?= (old('judul') ? old('judul') : $porto['nama_desain']) ?>" autofocus>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('judul'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="cover" class="col-sm-2 col-form-label">Cover Desain</label>
            <div class="col-sm-2">
                <img src="/img/portofolio/<?= $porto['cover_desain']; ?>" alt="" class="img-thumbnail img-previewPorto">
            </div>
            <div class="col-sm-4">
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" id="cover" name="cover" onchange="previewImgPorto()">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('cover'); ?>
                    </div>
                    <label class="custom-file-label" for="cover"><?= $porto['cover_desain']; ?></label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        <a href="/admin/adminPorto" class="btn btn-light">Kembali</a>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->