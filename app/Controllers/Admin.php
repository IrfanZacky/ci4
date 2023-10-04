<?php

namespace App\Controllers;

use App\Models\PenyewaanModel;

class Admin extends BaseController
{

    protected $session;
    protected $penyewaanModel;
    
    public function __construct()
    {
        $this->session = session();
        $this->penyewaanModel = new PenyewaanModel();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $penyewaan = $this->penyewaanModel->findAll();

        $data = [
            'title' => 'Admin',
            'penyewaan' => $penyewaan
        ];
        
        return view('admin/index', $data);
        
    }

    public function tambah()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/tambah', $data);
    }
    
}