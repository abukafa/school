<?php

namespace App\Controllers;

use App\Models\KalenderModel;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('home/index', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('home/profile', $data);
    }

    public function foreword()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('home/foreword', $data);
    }

    public function program()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('home/program', $data);
    }

    public function pengajar()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('home/pengajar', $data);
    }

    public function info()
    {
        $data = [
            'title' => 'Informasi'
        ];
        return view('info/index', $data);
    }

    public function kalender()
    {
        $kalenderModel = new KalenderModel();
        $data = [
            'title' => 'Informasi',
            'kalender' => $kalenderModel->findAll()
        ];
        return view('info/kalender', $data);
    }

    public function jadwal()
    {
        $data = [
            'title' => 'Informasi'
        ];
        return view('info/jadwal', $data);
    }

    public function absensi()
    {
        $data = [
            'title' => 'Informasi'
        ];
        return view('info/absensi', $data);
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog'
        ];
        return view('blog/index', $data);
    }

    public function detail($par)
    {
        $data = [
            'title' => 'Blog'
        ];
        return view('blog/detail', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri'
        ];
        return view('blog/galeri', $data);
    }

    public function siswa()
    {
        $data = [
            'title' => 'Siswa'
        ];
        return view('blog/siswa', $data);
    }

    public function alumni()
    {
        $data = [
            'title' => 'Alumni'
        ];
        return view('blog/alumni', $data);
    }
}
