<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\MemberModel;
use App\Controllers\BaseController;
use App\Models\AbsensiModel;

class AdminAbsensi extends BaseController
{
    protected $userModel;
    protected $memberModel;
    protected $absensiModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->memberModel = new MemberModel();
        $this->absensiModel = new AbsensiModel();
    }

    public function getByIdm($idm)
    {
        $absensi = $this->absensiModel->find($idm);
        $data = [
            'h1' => ($absensi['tanggal'] == date('Y-m-d')) ? $absensi['ket'] : 0,
            'h2' => ($absensi['tanggal'] == date('Y-m-d', strtotime("-1 days"))) ? $absensi['ket'] : 0,
            'h3' => ($absensi['tanggal'] == date('Y-m-d', strtotime("-2 days"))) ? $absensi['ket'] : 0,
            'h4' => ($absensi['tanggal'] == date('Y-m-d', strtotime("-3 days"))) ? $absensi['ket'] : 0,
            'h5' => ($absensi['tanggal'] == date('Y-m-d', strtotime("-4 days"))) ? $absensi['ket'] : 0,
            'h6' => ($absensi['tanggal'] == date('Y-m-d', strtotime("-5 days"))) ? $absensi['ket'] : 0,
        ];
        echo json_encode($data);
    }

    public function index($thn = NULL)
    {
        if ($thn == NULL) {
            $tah = (date('m') > 6 ? date('Y') : date('Y') - 1) - 2;
            $member = $this->memberModel->where('akun', 'Siswa')->where('tahun >= ', $tah)->findAll();
        } else {
            $member = $this->memberModel->where('akun', 'Siswa')->where('tahun', $thn)->findAll();
        }
        $data = [
            'title' => 'Absensi',
            'tahun' => $thn,
            'member' => $member,
            'absensi' => $this->absensiModel->where('tanggal', date('Y-m-d'))->findAll()
        ];
        // dd($data);
        return view('admin/absensi', $data);
    }

    public function ceklis($jam, $id)
    {
        if ($this->request->isAJAX()) {
            $member = $this->memberModel->find($id);
            $absensi = $this->absensiModel->where('idm', $id)->where('tanggal', date('Y-m-d'))->first();
            if (!$absensi) {
                $this->absensiModel->save([
                    'idm' => $member['id'],
                    'akun' => $member['akun'],
                    'tahun' => $member['tahun'],
                    'panggil' => $member['panggil'],
                    'tanggal' => date('Y-m-d'),
                    'jam1' => true,
                    'jam2' => true,
                    'jam3' => true,
                    'jam4' => true,
                    'jam5' => true,
                    'absen' => '',
                    'ket' => ''
                ]);
                $cek = 'baru';
            } else {
                if ($absensi[$jam] == true) {
                    $this->absensiModel->set($jam, false);
                    $cek = false;
                } else {
                    $this->absensiModel->set([$jam => true, 'absen' => '', 'ket' => '']);
                    $cek = true;
                }
                $this->absensiModel->where('id', $absensi['id']);
                $this->absensiModel->update();
            }
            echo json_encode($cek);
        } else {
            exit('Terjadi Kesalahan!');
        }
    }

    public function absen($idm)
    {
        $absen = $this->request->getPost('absen');
        $ket = $this->request->getPost('ket');
        $member = $this->memberModel->find($idm);
        $absensi = $this->absensiModel->where('idm', $idm)->where('tanggal', date('Y-m-d'))->first();
        $thn = intval($member['tahun']);
        if (!$absensi) {
            $this->absensiModel->save([
                'idm' => $member['id'],
                'akun' => $member['akun'],
                'tahun' => $thn,
                'panggil' => $member['panggil'],
                'tanggal' => date('Y-m-d'),
                'jam1' => false,
                'jam2' => false,
                'jam3' => false,
                'jam4' => false,
                'jam5' => false,
                'absen' => $absen,
                'ket' => $ket ?: ''
            ]);
            $cek = 'baru';
        } else {
            $this->absensiModel->set([
                'jam1' => false,
                'jam2' => false,
                'jam3' => false,
                'jam4' => false,
                'jam5' => false,
                'absen' => $absen,
                'ket' => $ket
            ]);
            $this->absensiModel->where('id', $absensi['id']);
            $this->absensiModel->update();
        }
        return redirect()->to('data/absensi/' . $thn);
    }
}
