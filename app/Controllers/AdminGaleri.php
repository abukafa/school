<?php

namespace App\Controllers;

use App\Models\BlogModel;

class AdminGaleri extends BaseController
{
    public function index()
    {
        $blogModel = new BlogModel();
        $galeri = $blogModel->where('galeri', true)->findAll();
        $data = [
            'title' => 'Galeri',
            'galeri' => $galeri
        ];
        return view('admin/galeri', $data);
    }
}
