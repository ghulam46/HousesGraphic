<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="col-lg-8">
        <h3>Daftar Order User</h3>
        <table class="table">
            <?php if ($orderUsers) { ?>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Transaksi</th>
                        <th scope="col">Nama User</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($orderUsers as $ou) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <th scope="row"><?= $ou['kode_transaksi'] ?></th>
                            <td scope="row"><?= $ou['nama_user']; ?></td>
                            <td scope="row"><?= $ou['alamat']; ?></td>
                            <td scope="row"><?= $ou['total_harga']; ?></td>
                            <td scope="row"><?= $ou['created_at']; ?></td>
                            <td scope="row"><?= $ou['updated_at']; ?></td>
                            <td scope="row">
                                <a href="/admin/deleteOrderUser/<?= $ou['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            <?php } else {
                echo '<div class="mt-5">
                        <p class="text-muted">Tidak ada produk desain di List</p>
                    </div>';
            } ?>
        </table>
    </div>
    <div class="col-lg-8">
        <h3>Daftar Order Product</h3>
        <table class="table">
            <?php if ($orderProducts) { ?>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($orderProducts as $op) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td scope="row">
                                <img src="/img/portofolio/illustration/<?= $op['cover_desain']; ?>" alt="" class="coverAdmin">
                            </td>
                            <td scope="row"><?= $op['nama_desain']; ?></td>
                            <td scope="row"><?= $op['harga_desain']; ?></td>
                            <td scope="row"><?= $op['qty']; ?></td>
                            <td scope="row"><?= $op['created_at']; ?></td>
                            <td scope="row"><?= $op['updated_at']; ?></td>
                            <td scope="row">
                                <a href="/admin/deleteUserProduct/<?= $op['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            <?php } else {
                echo '<div class="mt-5">
                <p class="text-muted">Tidak ada produk desain di List</p>
            </div>';
            } ?>
        </table>
    </div>
</div>