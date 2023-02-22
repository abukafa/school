<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'profil';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['sekolah', 'npsn', 'yayasan', 'no_izin', 'alamat', 'map', 'telepon', 'email', 'motto', 'periode', 'kepala', 'tema', 'kontak', 'ket'];
}
