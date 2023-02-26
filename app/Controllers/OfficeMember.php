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

    public function get($id = NULL)
    {
        if ($id == NULL) {
            $data = ['member' => $this->memberModel->orderby('nama')->findAll()];
        } else {
            $data = ['member' => $this->memberModel->find($id)];
        }
        echo json_encode($data);
    }

    public function guru($status = NULL)
    {
        if ($status == NULL) {
            $guru = $this->memberModel->where('akun <> ', 'Siswa')->findAll();
        } else {
            $guru = $this->memberModel->where('akun', $status)->findAll();
        }
        $data = [
            'title' => 'Guru',
            'guru' => $guru
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
