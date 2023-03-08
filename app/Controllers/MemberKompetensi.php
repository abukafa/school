<?php

namespace App\Controllers;

use App\Models\KompetensiModel;
use App\Models\MemberModel;

class MemberKompetensi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kompetensi'
        ];
        return view('member/kompetensi', $data);
    }

    public function member($id)
    {
        $memberModel = new MemberModel();
        $kompetensiModel = new KompetensiModel();
        $data = [
            'title' => 'Kompetensi',
            'member' => $memberModel->find($id),
            'kompetensi' => $kompetensiModel->where('idm', $id)->findAll()
        ];
        return view('member/kompetensi', $data);
    }

    public function get($id)
    {
        $kompetensiModel = new KompetensiModel();
        $data = ['kompetensi' => $kompetensiModel->find($id)];
        echo json_encode($data);
    }

    public function getByIdm($idm)
    {
        $kompetensiModel = new KompetensiModel();
        $data = ['kompetensi' => $kompetensiModel->where('idm', $idm)->get()->getResultArray()];
        echo json_encode($data);
    }

    public function save($id = NULL)
    {
        $kompetensiModel = new KompetensiModel();
        $idm = $this->request->getPost('idm');
        $data = [
            'idm' => $idm,
            'nama' => $this->request->getPost('nama'),
            'jenis' => $this->request->getPost('jenis'),
            'tempat' => $this->request->getPost('tempat'),
            'subjek' => $this->request->getPost('subjek'),
            'hasil' => $this->request->getPost('hasil'),
            'tgl_awal' => $this->request->getPost('tgl_awal'),
            'tgl_ahir' => $this->request->getPost('tgl_ahir'),
            'ket' => $this->request->getPost('ket')
        ];
        if ($id == NULL) {
            $kompetensiModel->insert($data);
            flash('Berhasil', 'Menambah Data Kompetensi');
        } else {
            $kompetensiModel->update($id, $data);
            flash('Berhasil', 'Mengubah Data Kompetensi');
        }
        return redirect()->to('/member/kompetensi/' . $idm);
    }

    public function delete($id)
    {
        $idm = session()->get('id');
        $kompetensiModel = new KompetensiModel();
        $kompetensiModel->delete($id);
        flash('Berhasil', 'Menghapus Data Kompetensi', 'warning');
        return redirect()->to('/member/kompetensi/' . $idm);
    }
}
