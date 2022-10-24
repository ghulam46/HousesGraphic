<div class="container-fluid marginContent">
    <div class="row text-center">
        <h1 class="my-5" style="font-size: 24px; font-weight: 700;">PORTOFOLIO</h1>
        <div class="hrstyle">
            <hr style="color: #adb5bd; ">
            <div class="d-flex">
                <span>KAMU SEDANG DI: </span>
                <span><a href="/home/landingpage" class="text-decoration-none text-dark">HOME</a></span>
                <span>/</span>
                <span>PORTOFOLIO</span>
            </div>
        </div>
        <!-- <ul class="nav justify-content-center my-5 ">
            <li class="nav-item active">
                <a class="text-decoration-none text-dark list-porto" aria-current="page" href="#">SEMUA</a>
            </li>
            <li class="nav-item">
                <a class="text-decoration-none text-dark list-porto" href="#">ILLUSTRATION</a>
            </li>
            <li class="nav-item">
                <a class="text-decoration-none text-dark list-porto" href="#">LOGO</a>
            </li>
        </ul> -->
    </div>

    <div class="row row1 mt-5">
        <?php foreach ($porto as $p) : ?>
            <div class="col-md-auto g-0">
                <img src="/img/portofolio/<?= $p['cover_desain']; ?>" class="img-thumbnail flex imgPorto popup" alt="..." style="width: 13rem; border: none;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            </div>
        <?php endforeach; ?>
    </div>
</div>