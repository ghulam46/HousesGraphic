<nav class="navbar navbar-expand-lg navbar-light bg-white py-5 fixed-top border-bottom">
    <div class="container">
        <a class="navbar-brand ms-5" href="/home/landingpage">HOUSES GRAPHIC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/home/shop">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/home/portofolio">PORTOFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/home/aboutUs">ABOUT US</a>
                </li>
                <li class="nav-item">

                    <a href="/pages/cart" class="text-decoration-none">
                        <img src="/icon/card.png" alt="" style="width: 30px;" class="position-relative">
                        <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                            1
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">LOGIN</a>
                </li> -->

                <!-- <div class="nav-item dropdown">
                    <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        LOGIN
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </div> -->
                <?php if (logged_in()) : ?>
                    <div class="nav-item dropdown">
                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= strtoupper(user()->username); ?>
                            <img style="width: 30px;" class="img-profile rounded-circle" src="<?= base_url('sbAdmin/img/undraw_profile.svg'); ?>">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </div>
                    </li> <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link position-fixed" aria-current="page" href="/login">LOGIN
                            <img style="width: 30px;" class="img-profile rounded-circle" src="<?= base_url('sbAdmin/img/undraw_profile.svg'); ?>">
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>