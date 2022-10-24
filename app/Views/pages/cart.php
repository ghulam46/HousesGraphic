    <div class="container-fluid marginContent">
        <div class="row text-center">
            <h1 class="my-5" style="font-size: 24px; font-weight: 700;"><?= $titleHeader; ?></h1>
            <div class="hrstyle">
                <hr style="color: #adb5bd; ">
                <div class="d-flex">
                    <span>KAMU SEDANG DI: </span>
                    <span><a href="/" class="text-decoration-none text-dark">HOME</a></span>
                    <span>/</span>
                    <span><a href="/pages/shop" class="text-decoration-none text-dark">SHOP</a></span>
                    <span>/</span>
                    <span><a href="/pages/cart" class="text-decoration-none text-dark"><?= $titleHeader; ?></a></span>
                </div>
            </div>
        </div>
        <form action="<?= base_url('cart/placeOrder'); ?>" method="POST">
            <?php if ($cart) {  ?>
                <?php foreach ($cart as $s) : ?>
                    <div class="border border-1 mb-3 mt-5 mx-auto" style="max-width: 1195px;">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="/img/portofolio/illustration/<?= $s['cover']; ?>" class="" alt="..." style="width: 250px;">
                            </div>
                            <div class="col-md-7 cardMargin">
                                <div class="mt-3">
                                    <h5 class="card-title titleBold"><?= $s['nama']; ?></h5>
                                    <p class="card-text"><?= $s['deskripsi']; ?></p>
                                    <p class="card-text titlePrice mt-5">
                                        <?= number_to_currency($s['harga'] * $s['quantity'], 'IDR') ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col btnClose">
                                <div class="card-body">
                                    <a href="<?= base_url('cart/remove/' . $s['id']); ?>" class="btn btn-close"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <div class="priceTotal">
                    <h3 class="mb-4 titleBold">Total :
                        <span class="titlePriceTotal"><?= number_to_currency($total, 'IDR') ?></span>
                    </h3>
                </div>
                <?php
                $kode_transaksi = date('dmy') . strtoupper(random_string('alnum', 8));
                ?>
                <div class="container">
                    <div class="place_order" style=" width: 500px;">
                        <div class="p-5">
                            <div class="mb-3">
                                <label for="kode_transaksi" class="form-label">Kode Transaksi</label>
                                <input type="text" class="form-control rounded-0" id="kode_transaksi" name="kode_transaksi" value="<?= $kode_transaksi; ?>" style="height: 50px;" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control rounded-0" id="nama" name="nama" style="height: 50px;" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control rounded-0" id="alamat" name="alamat" style="height: 50px;" required>
                            </div>
                            <div class="m-cart2 mt-5">
                                <button class="btn btn-primary rounded-0 p-4" style="width: 270px;">LANJUTKAN PEMBELIAN</button>
                            </div>
                        </div>
                    </div>
        </form>
    </div>

    <?php } else {
                echo '<div class="text-center mt-5">
        <p class="text-muted">Tidak ada produk desain di keranjang</p>
        <a href="/home/shop" class="btn btn-outline-dark rounded-0 p-4 my-3" style="width: 270px;">KEMBALI KE SHOP</a>
    </div>';
            } ?>
    </div>

    <!-- <div class="container marginContent">
        <h3>Cart</h3>
        <form action="/cart/updateCart" method="POST">
            <table border="1">
                <tr>
                    <th>Action</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Cover</th>
                    <th>Harga</th>
                    <th>Quantity <input type="submit" value="updateCart"></th>
                    <th>Sub Total</th>
                </tr>

                <?php if ($cart) : ?>
                    <?php foreach ($cart as $s) : ?>
                        <tr>
                            <td align="center">
                                <a href="<?= base_url('cart/remove/' . $s['id']); ?>">X</a>
                            </td>
                            <td><?= $s['nama']; ?></td>
                            <td style="width: 200px;"><?= $s['deskripsi']; ?></td>
                            <td>
                                <img src="<?= base_url() ?>/img/portofolio/illustration/<?= $s['cover']; ?>" alt="" style="width: 150px;">
                            </td>
                            <td><?= number_to_currency($s['harga'], 'IDR'); ?></td>
                            <td>
                                <input type="number" min="1" value="<?= $s['quantity']; ?>" style="width: 50px;" name="quantity[]">
                            </td>
                            <td><?= number_to_currency($s['harga'] * $s['quantity'], 'IDR'); ?></td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <td colspan="6" align="center">Total</td>
                        <td><?= number_to_currency($total, 'IDR'); ?></td>
                    </tr>
                <?php endif ?>
            </table>
        </form>
        <a href="/home/shop">Continue Shopping</a>
    </div> -->