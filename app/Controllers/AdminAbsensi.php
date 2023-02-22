<?php

namespace App\Controllers;

class AdminAbsensi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Absensi'
        ];
        return view('admin/absensi', $data);
    }
}
