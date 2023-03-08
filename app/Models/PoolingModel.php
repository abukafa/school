<?php

namespace App\Models;

use CodeIgniter\Model;

class PoolingModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pooling';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['jenis', 'pertanyaan', 'a', 'b', 'c', 'd', 'ket'];
}
