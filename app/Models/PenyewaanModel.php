<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyewaanModel extends Model
{
    protected $table      = 'ps';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama',
        'alamat',
        'waktu_sewa',
        'waktu_kembali',
        'harga'
    ];

    public function getPs($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}