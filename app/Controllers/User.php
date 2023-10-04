<?php

namespace App\Controllers;

use App\Models\PenyewaanModel;

class User extends BaseController
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

        return view('user/index');
    }

    public function tambah()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        return view('user/tambah');
    }

    public function lihat()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $penyewaan = $this->penyewaanModel->findAll();

        $data = [
            'penyewaan' => $penyewaan
        ];

        return view('user/lihat', $data);
    }
    
}