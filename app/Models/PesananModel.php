<?php namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'pelanggan_id',
        'nama',
        'no_hp',
        'alamat',
        'total',
        'status'
    ];
}