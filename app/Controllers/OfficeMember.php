<?php

namespace App\Controllers;

use App\Models\MemberModel;

class OfficeMember extends BaseController
{
    protected $memberModel;

    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function guru()
    {
        $data = [
            'title' => 'Guru',
            'guru' => $this->memberModel->where('akun <> ', 'Siswa')->findAll()
        ];
        return view('office/guru', $data);
    }

    public function siswa($thn = NULL)
    {
        if ($thn == '') {
            $siswa = $this->memberModel->where('akun', 'Siswa')->findAll();
        } else {
            $siswa = $this->memberModel->where('akun', 'Siswa')->where('tahun', $thn)->findAll();
        }

        $data = [
            'title' => 'Siswa',
            'siswa' => $siswa
        ];
        return view('office/siswa', $data);
    }
}
