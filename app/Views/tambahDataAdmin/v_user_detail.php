<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4 d-flex justify-content-center">
                <img src="<?= base_url('sbAdmin/img/undraw_profile.svg'); ?>" class="img-fluid rounded-start" alt="..." style="max-width: 150px; margin-left: 35px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h4><?= $user->username; ?></h4>
                        </li>
                        <li class="list-group-item"><?= $user->email; ?></li>
                        <li class="list-group-item">
                            <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning'; ?>"><?= $user->name; ?></span>
                        </li>
                        <li class="list-group-item">
                            <small><a href="/Admin/userList">&laquo; Kembali ke User List</a></small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>