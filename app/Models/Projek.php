<?php

namespace App\Models;

use CodeIgniter\Model;

class Projek extends Model
{
    protected $table      = 'projek';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'kode', 'id_kategori', 'deskripsi', 'style',
        'ukuran_tanah', 'luas_bangunan', 'j_kamar_tidur',
        'j_kamar_mandi', 'j_tampungan_mobil', 'j_lantai'
    ];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
