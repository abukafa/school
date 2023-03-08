<?php

namespace App\Controllers;

use App\Models\AbsensiModel;
use App\Models\BlogModel;
use App\Models\InfoModel;
use App\Models\KalenderModel;
use App\Models\MemberModel;
use App\Models\PoolingModel;
use App\Models\ProfilModel;

class Home extends BaseController
{
    protected $profilModel;
    protected $memberModel;
    protected $kalenderModel;
    protected $blogModel;
    protected $poolingModel;
    protected $absensiModel;
    protected $infoModel;

    public function __construct()
    {
        $this->profilModel = new ProfilModel();
        $this->memberModel = new MemberModel();
        $this->kalenderModel = new KalenderModel();
        $this->blogModel = new BlogModel();
        $this->poolingModel = new PoolingModel();
        $this->absensiModel = new AbsensiModel();
        $this->infoModel = new InfoModel();
    }

    public function pooling($id)
    {
        $a = 0;
        $b = 0;
        $c = 0;
        $d = 0;
        $new = $this->request->getVar('pooling');
        switch ($new) {
            case 'a':
                $a++;
                break;
            case 'b':
                $b++;
                break;
            case 'c':
                $c++;
                break;
            case 'd':
                $d++;
                break;
        }
        $old = $this->poolingModel->find($id);
        $data = [
            'a' =>  $a + $old['a'],
            'b' =>  $b + $old['b'],
            'c' =>  $c + $old['c'],
            'd' =>  $d + $old['d'],
        ];
        $this->poolingModel->update($id, $data);
        return redirect()->to('#pooling-next');
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'profil' => $this->profilModel->first(),
            'blog' => $this->blogModel->findAll(),
        ];
        // dd($data);
        return view('home/index', $data);
    }

    public function profile()
    {
        $sekolah = $this->blogModel->where('kategori', 'profil')->first();
        $data = [
            'title' => 'Profil',
            'profil' => $this->profilModel->first(),
            'blog' => $sekolah
        ];
        return view('home/profile', $data);
    }

    public function foreword()
    {
        $pengantar = $this->blogModel->where('kategori', 'prakata')->first();
        $data = [
            'title' => 'Profil',
            'profil' => $this->profilModel->first(),
            'blog' => $pengantar
        ];
        return view('home/foreword', $data);
    }

    public function program()
    {
        $program = $this->blogModel->where('kategori', 'program')->first();
        $data = [
            'title' => 'Profil',
            'profil' => $this->profilModel->first(),
            'blog' => $program
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
            'profil' => $this->profilModel->first(),
            'info' => $this->infoModel->where('prioritas', false)->findAll(),
            'headline' => $this->infoModel->where('prioritas', true)->findAll(),
        ];
        // dd($data);
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
        $kelas = $this->memberModel->select('tahun, COUNT(nama) as jumlah')->where('tahun <>', '')->where('akun', 'Siswa')->groupBy('tahun')->get();
        $hadir = $this->absensiModel->select('tahun, SUM(IF(absen = "", 1, 0)) as jumlah')->where('tanggal', date('Y-m-d'))->groupBy('tahun')->get()->getResultArray();
        // $absen = $this->absensiModel->where('tanggal', date('Y-m-d'))where('jam1', false)->orWhere('jam2', false)->orWhere('jam3', false)->orWhere('jam4', false)->orWhere('jam5', false)->orderBy('panggil')->findAll();
        $absen = $this->absensiModel->where('tanggal', date('Y-m-d'))->orderBy('panggil')->findAll();
        // $absen = $this->absensiModel->orderBy('panggil')->findAll();
        $data = [
            'title' => 'Informasi',
            'profil' => $this->profilModel->first(),
            'kelas' => $kelas->getResultArray(),
            'hadir' => $hadir,
            'absen' => $absen,
        ];
        // dd($data);
        return view('info/absensi', $data);
    }

    public function blog()
    {
        $blog = $this->blogModel->where('publish', true);
        $countBlog = $this->blogModel->countAllResults();
        $data = [
            'title' => 'Blog',
            'profil' => $this->profilModel->first(),
            'latest' => $blog->orderBy('id', 'desc')->first(),
            'blog' => $blog->orderBy('id', 'desc')->limit(7, 1)->get()->getResultArray()

        ];
        // dd($data);
        return view('blog/index', $data);
    }

    public function detail($id)
    {
        $blog = $this->blogModel->find($id);
        $data = [
            'title' => 'Blog',
            'profil' => $this->profilModel->first(),
            'relate' => $this->blogModel->where('publish', true)->orderBy('rand()')->limit(2)->get()->getResultArray(),
            'blog' => $blog,
        ];
        return view('blog/detail', $data);
    }

    public function galeri()
    {
        $galeri = $this->blogModel->where('galeri', true)->orderBy('id', 'desc')->findAll();
        $data = [
            'title' => 'Galeri',
            'profil' => $this->profilModel->first(),
            'galeri' => $galeri
        ];
        return view('blog/galeri', $data);
    }

    public function siswa($thn = NULL)
    {
        $profil = $this->profilModel->first();
        $absensi = $this->absensiModel->findAll();
        if ($thn == NULL) {
            $tahun = $profil['periode'] - 3;
            $siswa = $this->memberModel->where('akun', 'siswa')->where('tahun > ', $tahun)->orderBy('tahun')->orderBy('nama')->findAll();
        } else {
            $siswa = $this->memberModel->where('akun', 'siswa')->where('tahun', $thn)->orderBy('nama')->findAll();
        }
        $data = [
            'title' => 'Siswa',
            'profil' => $profil,
            'siswa' => $siswa,
            'absensi' => $absensi
        ];
        // dd($data);
        return view('blog/siswa', $data);
    }

    public function alumni($thn = NULL)
    {
        $profil = $this->profilModel->first();
        $tahun = $profil['periode'] - 3;
        if ($thn == NULL) {
            $alumni = $this->memberModel->where('akun', 'siswa')->where('tahun', $tahun)->orderBy('nama')->findAll();
        } else {
            $alumni = $this->memberModel->where('akun', 'siswa')->where('tahun', $thn)->orderBy('nama')->findAll();
        }
        $data = [
            'title' => 'Alumni',
            'profil' => $profil,
            'alumni' => $alumni
        ];
        return view('blog/alumni', $data);
    }
}
