<?php

namespace App\Controllers;

class AdminGaleri extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Galeri'
        ];
        return view('admin/galeri', $data);
    }
}
