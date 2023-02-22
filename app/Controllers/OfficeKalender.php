<?php

namespace App\Controllers;

use App\Models\KalenderModel;

class OfficeKalender extends BaseController
{
    protected $kalenderModel;

    public function __construct()
    {
        $this->kalenderModel = new KalenderModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Kalender',
            'acara' => $this->kalenderModel->findAll()
        ];
        return view('office/kalender', $data);
    }

    public function get($id)
    {
        $data = ['kalender' => $this->kalenderModel->find($id)];
        echo json_encode($data);
    }

    public function delete($id)
    {
        $this->kalenderModel->delete($id);
        flash('Beshasil', 'Menghapus Data Kalender');
        return redirect()->to('/admin/kalender');
    }

    public function save($id = NULL)
    {
        $data = [
            'jenis' => $this->request->getPost('jenis'),
            'tgl_awal' => $this->request->getPost('tgl_awal'),
            'tgl_ahir' => $this->request->getPost('tgl_ahir'),
            'acara' => $this->request->getPost('acara'),
            'ket' => $this->request->getPost('ket'),
            'warna' => $this->request->getPost('warna')
        ];
        if ($id == NULL) {
            $this->kalenderModel->insert($data);
            flash('Berhasil', 'Menambah Data Kalender');
        } else {
            $this->kalenderModel->update($id, $data);
            flash('Berhasil', 'Mengubah Data Kalender');
        }
        return redirect()->to('/admin/kalender');
    }

    public function jadwal()
    {
        $data = [
            'title' => 'Jadwal'
        ];
        return view('office/jadwal', $data);
    }
}
