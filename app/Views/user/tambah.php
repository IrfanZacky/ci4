<?php $this->extend('layout/user'); ?>
<?php $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-10 offset-md-1">
                <form action="/penyewaan/save" method="POST" enctype='multipart/form-data'>
                    <?php csrf_field(); ?>
                    <div class="input-group mb-3">
                            <?php if ($pesan) { ?>
                                <span class="input-group-text" id="basic-addon1" style="color:blue"><?php echo $pesan ?></span>
                            <?php } ?>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nama</span>
                        <input type="text" class="form-control" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1" name="nama">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Alamat</span>
                        <input type="text" class="form-control" placeholder="Alamat" aria-label="Alamat" aria-describedby="basic-addon1" name="alamat">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Waktu Sewa</span>
                        <input type="datetime-local" class="form-control" placeholder="Waktu Sewa" aria-label="Waktu Sewa" aria-describedby="basic-addon1" name="waktu_sewa">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Waktu Kembali</span>
                        <input type="datetime-local" class="form-control" placeholder="Waktu Kembali" aria-label="Waktu Kembali" aria-describedby="basic-addon1" name="waktu_kembali">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Harga</span>
                        <input type="text" class="form-control" placeholder="Harga" aria-label="Harga" aria-describedby="basic-addon1" name="harga">
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<?= $this->endSection(); ?>