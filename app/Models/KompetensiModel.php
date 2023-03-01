<?php

namespace App\Models;

use CodeIgniter\Model;

class KompetensiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kompetensi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['idm', 'nama', 'jenis', 'tempat', 'subjek', 'hasil', 'tgl_awal', 'tgl_ahir', 'ket'];
}
