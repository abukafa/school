<?php

namespace App\Controllers;

use App\Models\AbsensiModel;
use App\Models\MemberModel;

class MemberNilai extends BaseController
{
    // protected $memberModel;

    public function index()
    {
        $data = [
            'title' => 'Nilai'
        ];
        return view('member/nilai', $data);
    }

    public function siswa($id)
    {
        $memberModel = new MemberModel();
        $absensiModel = new AbsensiModel();
        $data = [
            'title' => 'Nilai',
            'siswa' => $memberModel->find($id),
            'absensi' => $absensiModel->where('idm', $id)->findAll()
        ];
        return view('member/nilai', $data);
    }
}
