    <div class="container-fluid marginContent margin-ul">

        <ul class="navbar-nav flex-row">
            <li class="nav-item">
                <a class="nav-link text-dark" aria-current="page" href="#">SEMUA PRODUK</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link text-dark" aria-current="page" href="#">DESAIN BAJU</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" aria-current="page" href="#">FONT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" aria-current="page" href="#">ILUSTRASI</a>
            </li> -->
            <form action="" method="POST">
                <div class="d-flex btn-cari">
                    <input class="form-control rounded-0" type="text" placeholder="Cari..." aria-label="Search" name="keyword" value="<?= $keyword; ?>">
                    <button class="btn btn-outline-secondary rounded-0" type="submit" id="button-addon2" name="submit">Cari</button>
                </div>
            </form>
        </ul>

        <div class="mt-3">
            <hr class="hrstyle mx-auto" style="color: #adb5bd;">
            <div class="d-flex marginshop mt-3">
                <span>KAMU SEDANG DI: </span>
                <span><a href="/home/landingpage" class="text-decoration-none text-dark">HOME</a></span>
                <span>/</span>
                <span><a href="/home/shop" class="text-decoration-none text-dark">SHOP</a></span>
            </div>
        </div>

        <div class="container" style="width: 500px;">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row my-4 mx-auto ms-4">
                <?php if ($keyword) : ?>
                    <div class="mt-5" style="font-size: 18px;">
                        Hasil Pencarian : <strong><?= htmlentities($keyword); ?></strong>
                    </div> <?php else : '' ?>
                <?php endif; ?>
                <?php foreach ($shop as $s => $value) : ?>
                    <div class="col-sm-3 col-md-4 col-lg-3 my-4">
                        <a href="/pages/<?= $value['slug']; ?>" class="mx-auto text-decoration-none text-dark">
                            <div class="card rounded-0 wrapper border-0">
                                <img src="/img/portofolio/illustration/<?= $value['cover_desain']; ?>" class="rounded-0 mx-auto mt-3" alt="..." width="293px" height="293px">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col mx-1">
                                    <h6 class="card-title"><a href="/pages/<?= $value['slug']; ?>" class="text-decoration-none text-dark"><?= htmlentities($value['nama_desain']); ?></a></h6>
                                    <span><?= number_to_currency($value['harga_desain'], 'IDR'); ?></span>
                                </div>
                                <div class="col-sm-4 add-cart">
                                    <button type="submit" class="btn btn-outline-light border border-1 mx-auto rounded-0"><a class="text-decoration-none text-dark" href="/cart/addtocart/<?= $value['id_desain']; ?>">
                                            <img src="/icon/card.png" alt="" style="width: 30px;" class="position-relative">
                                        </a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="pagerMarginShop mt-5">
                <?= $pager->links('shop', 'shop_pagination'); ?>
            </div>
        </div>
    </div>