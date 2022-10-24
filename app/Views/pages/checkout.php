    <div class="container marginContent">
        <h1 class="my-5 text-center" style="font-size: 24px; font-weight: 700;">DOWNLOAD PRODUCT DESIGN</h1>
        <div class="hrstyle mt-3">
            <hr style="color: #adb5bd;">
        </div>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>

        <?php foreach ($order as $o) : ?>
            <div class="border border-1 mb-3 mt-5 mx-auto" style="max-width: 1195px;">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="/img/portofolio/illustration/<?= $o['cover_desain']; ?>" class="" alt="..." style="width: 250px;">
                    </div>
                    <div class="col-md-7 cardMargin">
                        <div class="mt-3">
                            <h5 class="card-title titleBold"><?= $o['nama_desain']; ?></h5>
                            <p class="card-text titlePrice mt-5">
                                <?= number_to_currency($o['harga_desain'], 'IDR'); ?>
                            </p>
                        </div>
                        <a href="/download/index/<?= $o['id_desain']; ?>" class="btn btn-outline-success rounded-0 mt-3">DOWNLOAD</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>