<?php

namespace App\Controllers;

use App\Models\PoolingModel;
use App\Models\ProfilModel;

class OfficeDashboard extends BaseController
{
    public function index()
    {
        $poolingModel = new PoolingModel();
        $data = [
            'title' => 'Dashboard',
            'pooling' => $poolingModel->findAll()
        ];
        return view('office/dashboard', $data);
    }

    public function profil()
    {
        $profilModel = new ProfilModel();
        $cek = $profilModel->first();
        $data = [
            'title' => 'Profil',
            'profil' => ($cek) ?: ''
        ];
        return view('office/profil', $data);
    }

    public function save()
    {
        $profilModel = new ProfilModel();
        $data = [
            'sekolah' => $this->request->getPost('sekolah'),
            'npsn' => $this->request->getPost('npsn'),
            'yayasan' => $this->request->getPost('yayasan'),
            'no_izin' => $this->request->getPost('no_izin'),
            'alamat' => $this->request->getPost('alamat'),
            'map' => $this->request->getPost('map'),
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
            'motto' => $this->request->getPost('motto'),
            'periode' => $this->request->getPost('periode'),
            'kepala' => $this->request->getPost('kepala'),
            'tema' => $this->request->getPost('tema'),
            'kontak' => $this->request->getPost('kontak'),
            'ket' => $this->request->getPost('ket')
        ];
        $cek = $profilModel->first();
        if ($cek) {
            $profilModel->update($cek['id'], $data);
            flash('Berhasil', 'Mengubah Data Profil');
        } else {
            $profilModel->insert($data);
            flash('Berhasil', 'Menambah Data Profil');
        }
        return redirect()->to('/admin/profil');
    }
}
