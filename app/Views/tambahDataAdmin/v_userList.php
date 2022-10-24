<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-inline">
        <h1 class="h3 mb-3 text-gray-800"><?= $title; ?></h1>
    </div>
    <div class="col-lg-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($users as $user) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $user->username; ?></td>
                        <td><?= $user->email; ?></td>
                        <td>
                            <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning'; ?>"><?= $user->name; ?></span>
                        </td>
                        <td class="">
                            <a href="/Admin/userDetail/<?= $user->userid; ?>" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>