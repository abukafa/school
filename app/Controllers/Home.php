<?php

namespace App\Controllers;

use App\Models\KalenderModel;
use App\Models\MemberModel;
use App\Models\ProfilModel;

class Home extends BaseController
{
    protected $profilModel;
    protected $memberModel;
    protected $kalenderModel;

    public function __construct()
    {
        $this->profilModel = new ProfilModel();
        $this->memberModel = new MemberModel();
        $this->kalenderModel = new KalenderModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'profil' => $this->profilModel->first()
        ];
        // dd($data);
        return view('home/index', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Profil',
            'profil' => $this->profilModel->first()
        ];
        return view('home/profile', $data);
    }

    public function foreword()
    {
        $data = [
            'title' => 'Profil',
            'profil' => $this->profilModel->first()
        ];
        return view('home/foreword', $data);
    }

    public function program()
    {
        $data = [
            'title' => 'Profil',
            'profil' => $this->profilModel->first()
        ];
        return view('home/program', $data);
    }

    public function pengajar()
    {
        $data = [
            'title' => 'Profil',
            'profil' => $this->profilModel->first(),
            'guru' => $this->memberModel->where('akun', 'Guru')->findAll()
        ];
        return view('home/pengajar', $data);
    }

    public function info()
    {
        $data = [
            'title' => 'Informasi',
            'profil' => $this->profilModel->first()
        ];
        return view('info/index', $data);
    }

    public function kalender()
    {
        $data = [
            'title' => 'Informasi',
            'profil' => $this->profilModel->first(),
            'kalender' => $this->kalenderModel->findAll()
        ];
        return view('info/kalender', $data);
    }

    public function jadwal()
    {
        $data = [
            'title' => 'Informasi',
            'profil' => $this->profilModel->first()
        ];
        return view('info/jadwal', $data);
    }

    public function absensi()
    {
        $data = [
            'title' => 'Informasi',
            'profil' => $this->profilModel->first()
        ];
        return view('info/absensi', $data);
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog',
            'profil' => $this->profilModel->first()
        ];
        return view('blog/index', $data);
    }

    public function detail($par)
    {
        $data = [
            'title' => 'Blog',
            'profil' => $this->profilModel->first()
        ];
        return view('blog/detail', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri',
            'profil' => $this->profilModel->first()
        ];
        return view('blog/galeri', $data);
    }

    public function siswa($thn = NULL)
    {
        $profil = $this->profilModel->first();
        if ($thn == NULL) {
            $tahun = $profil['periode'] - 3;
            $siswa = $this->memberModel->where('akun', 'siswa')->where('tahun > ', $tahun)->orderBy('tahun')->orderBy('nama')->findAll();
        } else {
            $siswa = $this->memberModel->where('akun', 'siswa')->where('tahun', $thn)->orderBy('nama')->findAll();
        }
        $data = [
            'title' => 'Siswa',
            'profil' => $profil,
            'siswa' => $siswa
        ];
        // dd($data);
        return view('blog/siswa', $data);
    }

    public function alumni()
    {
        $profil = $this->profilModel->first();
        $tahun = $profil['periode'] - 2;
        $data = [
            'title' => 'Alumni',
            'profil' => $profil,
            'alumni' => $this->memberModel->where('akun', 'siswa')->where('tahun < ', $tahun)->orderBy('nama')->findAll()
        ];
        return view('blog/alumni', $data);
    }
}
