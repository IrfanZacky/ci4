<?php

namespace App\Controllers;

use App\Models\PenyewaanModel;

class Penyewaan extends BaseController
{

    protected $session;
    protected $penyewaanModel;
    public function __construct()
    {
        $this->session = session();
        $this->penyewaanModel = new PenyewaanModel();
    }

    public function save()
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        // validation
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
            ],
            'alamat' => [
                'rules' => 'required',
            ],
            'waktu_sewa' => [
                'rules' => 'required',
            ],
            'waktu_kembali' => [
                'rules' => 'required',
            ],
            'harga' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/user/tambah')->withInput()-> with('validation', $validation);
        }

        $this->penyewaanModel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'waktu_sewa' => $this->request->getVar('waktu_sewa'),
            'waktu_kembali' => $this->request->getVar('waktu_kembali'),
            'harga' => $this->request->getVar('harga'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/user/tambah');
    }

    public function saveadmin()
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        // validation
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
            ],
            'alamat' => [
                'rules' => 'required',
            ],
            'waktu_sewa' => [
                'rules' => 'required',
            ],
            'waktu_kembali' => [
                'rules' => 'required',
            ],
            'harga' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/tambah')->withInput()-> with('validation', $validation);
        }

        $this->penyewaanModel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'waktu_sewa' => $this->request->getVar('waktu_sewa'),
            'waktu_kembali' => $this->request->getVar('waktu_kembali'),
            'harga' => $this->request->getVar('harga'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin');
    }

    public function delete($id)
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }


        $this->penyewaanModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin');
    }

    public function edit($id)
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Edit Data Kelahiran',
            'validation' => \Config\Services::validation(),
            'penyewaan' => $this->penyewaanModel->getPs($id)
        ];

        return view('admin/edit', $data);
    }

    public function update($id) {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        
        // validation
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
            ],
            'alamat' => [
                'rules' => 'required',
            ],
            'waktu_sewa' => [
                'rules' => 'required',
            ],
            'waktu_kembali' => [
                'rules' => 'required',
            ],
            'harga' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/edit' . $id)->withInput()-> with('validation', $validation);
        }

        $this->penyewaanModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'waktu_sewa' => $this->request->getVar('waktu_sewa'),
            'waktu_kembali' => $this->request->getVar('waktu_kembali'),
            'harga' => $this->request->getVar('harga'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/admin');

    }

}
