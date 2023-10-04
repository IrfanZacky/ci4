<?php $this->extend('layout/admin'); ?>
<?php $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data</h1>

            <!-- form edit data -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Data Kelahiran
                </div>
                <div class="card-body">
                    <form action="/penyewaan/update/<?= $penyewaan['id']; ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $penyewaan['id']; ?>">
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= (old('nama')) ? old('nama') : $penyewaan['nama']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat"><?= (old('alamat')) ? old('alamat') : $penyewaan['alamat']; ?></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="waktu_sewa" class="col-sm-2 col-form-label">Waktu Sewa</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" class="form-control <?= ($validation->hasError('waktu_sewa')) ? 'is-invalid' : ''; ?>" id="waktu_sewa" name="waktu_sewa" value="<?= (old('waktu_sewa')) ? old('waktu_sewa') : $penyewaan['waktu_sewa']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('waktu_sewa'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="waktu_kembali" class="col-sm-2 col-form-label">Waktu Kembali</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" class="form-control <?= ($validation->hasError('waktu_kembali')) ? 'is-invalid' : ''; ?>" id="waktu_kembali" name="waktu_kembali" value="<?= (old('waktu_kembali')) ? old('waktu_kembali') : $penyewaan['waktu_kembali']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('waktu_kembali'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" value="<?= (old('harga')) ? old('harga') : $penyewaan['harga']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('harga'); ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </form>
                </div>
            </div>
            <!-- end form edit data -->
    </main>

    <?php $this->endSection(); ?>