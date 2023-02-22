<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'member';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['ni', 'nama', 'panggil', 'jk', 'tempat_lahir', 'tanggal_lahir', 'nik', 'no_kk', 'alamat', 'rt', 'rw', 'kelurahan', 'kecamatan', 'kabupaten', 'kode_pos', 'telepon', 'email', 'tahun', 'nama_ayah', 'tl_ayah', 'pekerjaan_ayah', 'nama_ibu', 'tl_ibu', 'pekerjaan_ibu', 'kesan', 'pesan', 'akun', 'pass', 'arsip', 'ket'];
}
