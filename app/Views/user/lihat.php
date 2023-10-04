<?php $this->extend('layout/user'); ?>
<?php $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row mt-4">
            <table class="table table-striped w-100" id="productTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Waktu Sewa</th>
                        <th>Waktu Kembali</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($penyewaan as $p) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td><?= $p['waktu_sewa']; ?></td>
                            <td><?= $p['waktu_kembali']; ?></td>
                            <td><?= $p['harga']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section><!-- End Hero -->

<?= $this->endSection(); ?>