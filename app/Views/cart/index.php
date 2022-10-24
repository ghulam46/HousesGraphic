<h3>Cart</h3>
<form action="<?= base_url('cartExample/update'); ?>" method="POST">
    <table border="1">
        <tr>
            <th>Action</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Cover</th>
            <th>Harga</th>
            <th>Quantity <input type="submit" value="update"></th>
            <th>Sub Total</th>
        </tr>

        <?php if ($item) : ?>
            <?php foreach ($item as $itm) : ?>
                <tr>
                    <td align="center">
                        <a href="<?= base_url('cartExample/remove/' . $itm['id']); ?>">X</a>
                    </td>
                    <td><?= $itm['id']; ?></td>
                    <td><?= $itm['nama']; ?></td>
                    <td style="width: 200px;"><?= $itm['deskripsi']; ?></td>
                    <td>
                        <img src="<?= base_url() ?>/img/portofolio/illustration/<?= $itm['cover']; ?>" alt="" style="width: 150px;">
                    </td>
                    <td><?= number_to_currency($itm['harga'], 'IDR'); ?></td>
                    <td>
                        <input type="number" min="1" value="<?= $itm['quantity']; ?>" style="width: 50px;" name="quantity[]">
                    </td>
                    <td><?= number_to_currency($itm['harga'] * $itm['quantity'], 'IDR'); ?></td>
                </tr>
            <?php endforeach ?>
            <tr>
                <td colspan="7" align="right">Total</td>
                <td><?= number_to_currency($total, 'IDR') ?></td>
            </tr>
        <?php endif ?>
    </table>
</form>
<a href="<?= base_url('mobile'); ?>">Continue Shopping</a>