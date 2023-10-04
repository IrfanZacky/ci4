<?php $this->extend('layout/admin'); ?>
<?php $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Data</h1>

            <!-- form edit data -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Data Kelahiran
                </div>
                <div class="card-body">
                    <form action="/penyewaan/admin/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" autofocus placeholder="Nama">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat'); ?> 
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="waktu_sewa" class="col-sm-2 col-form-label">Waktu Sewa</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" class="form-control" id="waktu_sewa" name="waktu_sewa" placeholder="Waktu Sewa">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('waktu_sewa'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="waktu_kembali" class="col-sm-2 col-form-label">Waktu Kembali</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" class="form-control" id="waktu_kembali" name="waktu_kembali" placeholder="Waktu Kembali">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('waktu_kembali'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('harga'); ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
            <!-- end form edit data -->
    </main>

    <?php $this->endSection(); ?>