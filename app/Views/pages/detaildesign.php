<div class="container-fluid marginContent">
    <div class="row text-center">
        <h1 class="my-5" style="font-size: 24px; font-weight: 700;">DETAIL DESIGN</h1>
        <div class="hrstyle">
            <hr style="color: #adb5bd;">
            <div class="d-flex">
                <span>KAMU SEDANG DI: </span>
                <span><a href="/home/shop" class="text-decoration-none text-dark">SHOP</a></span>
                <span>/</span>
                <span>DETAIL DESIGN</span>
                <span>/</span>
                <span><?= strtoupper($desain['nama_desain']); ?></span>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <h2 class="mx-5 mt-4" style="font-weight: 600;"><?= htmlentities($desain['nama_desain']); ?></h2>
        </div>
        <div class="row g-0 justify-content-center mt-5">
            <div class="col-md-6">
                <img src="/img/portofolio/illustration/<?= $desain['cover_desain']; ?>" class="rounded-0" alt="..." width="500px" height="500px">
            </div>
            <div class="col-md-5">
                <div class="card desc-price border-0" style="width: 500px;">
                    <p class="card-text"><?= $desain['deskripsi_desain']; ?></p>
                    <hr style="color: black;">
                    <div class="row">
                        <div class="col">
                            <div class="font-style">Total :</div>
                        </div>
                        <div class="col">
                            <div class="font-style m-price"><?= number_to_currency($desain['harga_desain'], 'IDR'); ?></div>
                        </div>
                    </div>
                    <div class="m-cart mt-5">
                        <a href="/cart/addtocart/<?= $desain['id_desain']; ?>" class="btn btn-primary rounded-0 p-4" style="width: 270px;">TAMBAH KE KERANJANG</a>
                    </div>
                </div>
                <!-- <h5 class="card-title"><?= $desain['nama_desain']; ?></h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted"><?= number_to_currency($desain['harga_desain'], 'IDR'); ?></small></p> -->
            </div>
            <hr class="mt-5" style="color: #adb5bd; width:1000px ;">
            <div class="text-center m-content">REKOMENDASI DESAIN UNTUK ANDA</div>
            <div class="text-center mt-5">
                <a href="/home/shop" class="btn btn-outline-dark rounded-0 p-4" style="width: 270px;">KEMBALI KE SHOP</a>
            </div>
        </div>
    </div>
</div>