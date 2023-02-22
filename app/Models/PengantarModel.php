<?php

namespace App\Models;

use CodeIgniter\Model;

class PengantarModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pengantar';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kategori', 'ni', 'autor', 'judul', 'slug', 'image', 'excerpt', 'body', 'published', 'created', 'updated'];
}
