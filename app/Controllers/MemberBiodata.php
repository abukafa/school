<?php

namespace App\Controllers;

use App\Models\MemberModel;

class MemberBiodata extends BaseController
{
    protected $memberModel;

    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function index($id)
    {
        $cek = $this->memberModel->where('id', $id)->first();
        $data = [
            'title' => 'Biodata',
            'member' => $cek
        ];
        return view('member/biodata', $data);
    }

    public function save($id = NULL)
    {
        if ($id == NULL) {
            $ket = $this->request->getPost('ket');
        } else {
            $ket = $this->request->getPost('ket');
            $old = $this->memberModel->find($id);
            $ket = $ket ?: $old['ket'];
        }
        $data = [
            'ni' => $this->request->getPost('ni'),
            'nama' => $this->request->getPost('nama'),
            'panggil' => $this->request->getPost('panggil'),
            'jk' => $this->request->getPost('jk'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'nik' => $this->request->getPost('nik'),
            'no_kk' => $this->request->getPost('no_kk'),
            'alamat' => $this->request->getPost('alamat'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kabupaten' => $this->request->getPost('kabupaten'),
            'kode_pos' => $this->request->getPost('kode_pos'),
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
            'tahun' => $this->request->getPost('tahun'),
            'nama_ayah' => $this->request->getPost('nama_ayah'),
            'tl_ayah' => $this->request->getPost('tl_ayah'),
            'pekerjaan_ayah' => $this->request->getPost('pekerjaan_ayah'),
            'nama_ibu' => $this->request->getPost('nama_ibu'),
            'tl_ibu' => $this->request->getPost('tl_ibu'),
            'pekerjaan_ibu' => $this->request->getPost('pekerjaan_ibu'),
            'kesan' => $this->request->getPost('kesan'),
            'pesan' => $this->request->getPost('pesan'),
            'akun' => $this->request->getPost('akun'),
            'pass' => $this->request->getPost('pass'),
            'arsip' => $this->request->getPost('arsip'),
            'ket' => $ket
        ];
        if ($id == NULL) {
            $this->memberModel->insert($data);
            flash('Berhasil', 'Menambah Data Member');
        } else {
            $this->memberModel->update($id, $data);
            flash('Berhasil', 'Mengubah Data Member');
        }
        $view = $this->memberModel->where('ni', $this->request->getPost('ni'))->first();

        if (session()->get('member')) {
            return redirect()->to('/member/biodata/' . $view['id']);
        } else {
            return redirect()->to('/admin/biodata/' . $view['id']);
        }
    }

    public function delete($id)
    {
        $cek = $this->memberModel->where('id', $id)->first();
        $member = ($cek['akun'] == 'Siswa') ? 'siswa' : 'guru';
        $this->memberModel->delete($id);
        flash('Berhasil', 'Menghapus Data Member', 'warning');
        return redirect()->to('/admin/' . $member);
    }
}
