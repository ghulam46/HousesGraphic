<div class="marginContent margintopLandingPage">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/banner/banner-01_1_1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/banner/banner1-01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/banner/banner2-01.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid mt-5">
        <div class="col-6 mx-auto">
            <p class="justify" style="font-weight: 300;"><strong style="font-weight: 600;">HOUSES GRAPHIC</strong> - adalah studio desain grafis, khusus pada grafis vektor. Setiap hari kami
                meningkatkan keterampilan kami sehingga Anda mendapatkan hasil yang Anda
                butuhkan tepat waktu.</p>
        </div>
    </div>

    <!-- <div class="container marginTelusuri">
            <div class="row mx-5">
                <div class="col-8">
                    <h3>Telusuri keinginan anda</h3>
                    <p class="fs-6">Dapatkan desain yang Anda butuhkan untuk proyek anda.</p>
                </div>
                <div class="col-4">
                    <a href="/home/shop" class="text-decoration-none" style="margin-left: 270px;">Telusuri <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="container p-3 mx-3">
                <div class="row mx-5 mt-5">
                    <div class="col-lg-4">
                        <div class="cardInfo">
                            <img src="/img/card/design1.jpg" alt="" width="100%" class="shadow">
                            <div class="mt-3">
                                <h6 class="text-center"><a href="" class="text-decoration-none text-dark title">T-Shirt Design</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cardInfo">
                            <img src="/img/card/design2.jpg" alt="" width="100%" class="shadow">
                            <div class="mt-3">
                                <h6 class="text-center"><a href="" class="text-decoration-none text-dark title">Logo Design</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cardInfo">
                            <img src="/img/card/design2.jpg" alt="" width="100%" class="shadow">
                            <div class="mt-3">
                                <h6 class="text-center"><a href="" class="text-decoration-none text-dark title">Banner Design</a></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container marginTelusuri">
                    <div class="mt-5 text-center">
                        <h1 class="martopTitle">Pilihan desain paling terbaik untuk anda</h1>
                        <p style="font-size: 16px;">Baik Anda yang sedang mencari desain berbasis vector, Anda akan menemukan aset yang sempurna di Houses Graphic.</p>
                    </div>
                    <div class="row mx-auto martopRow">
                        <div class="col-6 mx-5">
                            <ul>
                                <li class="list-unstyled">
                                    <h3>Konten stok berkualitas tinggi</h3>
                                    <p>Unduh gambar penghenti gulir dengan kualitas terbaik <br>untuk membuat proyek Anda terlihat profesional.</p>
                                </li>
                                <li class="list-unstyled">
                                    <h3>Aset siap pakai</h3>
                                    <p>Akses ribuan gambar dan desain yang siap dipublikasikan <br>dan siapkan proyek Anda dua kali lipat dengan cepat.</p>
                                </li>
                                <li class="list-unstyled">
                                    <h3>Hasil pencarian yang dijamin</h3>
                                    <p>Ada gambar dan gaya untuk setiap proyek, apa pun <br>kebutuhan Anda?</p>
                                </li>
                                <li class="list-unstyled">
                                    <h3>Konten segar setiap hari</h3>
                                    <p>Perpustakaan kami diperbarui setiap hari sehingga Anda <br>dapat menemukan foto dan desain terbaru dan paling trendi.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <img src="/img/card/design3.jpg" alt="" class="marginImage">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <div class="container-fluid">
        <div class="mt-5 text-center">
            <h1 style="font-size: 24px; font-weight: 700;">DESAIN UNTUK DIJUAL</h1>
        </div>
        <div class="row my-5 mx-auto">
            <?php foreach ($shop as $s => $value) : ?>
                <div class="col-sm-3 col-md-4 col-lg-3">
                    <a href="/pages/<?= $value['slug']; ?>" class="mx-auto text-decoration-none text-dark">
                        <div class="card rounded-0 wrapper border-0">
                            <img src="/img/portofolio/illustration/<?= $value['cover_desain']; ?>" class="rounded-0 mx-auto mt-3" alt="..." width="293px" height="293px">
                        </div>
                    </a>
                    <div class="card-body ms-2">
                        <div class="row">
                            <div class="col mx-1">
                                <h6 class="card-title fs-3"><a href="/pages/<?= $value['slug']; ?>" class="text-decoration-none text-dark"><?= $value['nama_desain']; ?></a></h6>
                            </div>
                            <div class="col my-1 ms-4">
                                <span style="font-weight: 500; font-size: 20px;"><?= number_to_currency($value['harga_desain'], 'IDR'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="text-center mt-5">
                <a href="/home/shop" class="btn btn-outline-dark rounded-0 p-4" style="width: 270px;">LIHAT LEBIH BANYAK</a>
            </div>
        </div>
    </div>

</div>