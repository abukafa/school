<?php

namespace App\Controllers;

class OfficeLaporan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan'
        ];
        return view('office/laporan', $data);
    }
}
