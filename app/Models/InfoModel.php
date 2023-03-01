<?php

namespace App\Models;

use CodeIgniter\Model;

class InfoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'info';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tgl_awal', 'tgl_ahir', 'prioritas', 'bagian', 'tentang', 'detail', 'ket'];
}
