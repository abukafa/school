<?php

namespace App\Controllers;

use App\Models\MemberModel;
use App\Models\UserModel;

class OfficeUser extends BaseController
{
    protected $userModel;
    protected $memberModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->memberModel = new MemberModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengguna',
            'user' => $this->userModel->findAll()
        ];
        return view('office/pengguna', $data);
    }

    public function get($id)
    {
        $data = ['user' => $this->userModel->find($id)];
        echo json_encode($data);
    }

    public function insert()
    {
        $data = [
            'uname' => $this->request->getVar('uname'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
            'idm' => $this->request->getVar('idm'),
            'nama' => $this->request->getVar('nama'),
            'tipe' => $this->request->getVar('tipe'),
            'akses' => $this->request->getVar('akses'),
            'ket' => $this->request->getVar('ket')
        ];
        $this->userModel->insert($data);
        flash('Berhasil', 'Menambah Data Pengguna');
        return redirect()->to('/admin/pengguna');
    }

    public function update($id)
    {
        $data = [
            'uname' => $this->request->getVar('uname'),
            'idm' => $this->request->getVar('idm'),
            'nama' => $this->request->getVar('nama'),
            'tipe' => $this->request->getVar('tipe'),
            'akses' => $this->request->getVar('akses'),
            'ket' => $this->request->getVar('ket')
        ];
        $this->userModel->update($id, $data);
        flash('Berhasil', 'Mengubah Data Pengguna', 'warning');
        return redirect()->to('/admin/pengguna');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        flash('Berhasil', 'Menghapus Data user', 'warning');
        return redirect()->to('/admin/pengguna');
    }

    public function changePass()
    {
        $data = [
            'title' => 'Password'
        ];
        return view('office/password', $data);
    }

    public function updatePass()
    {
        $uname = session()->get('uname');
        $lama = $this->request->getVar('lama');
        $baru = $this->request->getVar('baru');
        $lagi = $this->request->getVar('lagi');

        $user = $this->userModel->where('uname', $uname)->first();
        $member = $this->memberModel->where('ni', $uname)->first();

        if (!$user) {
            if ($lama == $member['pass']) {
                if ($baru == '' || $baru <> $lagi) {
                    flash('Gagal', 'Masukan Kembali Password..', 'warning');
                } else {
                    if ($lama == $baru) {
                        flash('Gagal', 'Masukan Password yang lain..', 'warning');
                    } else {
                        flash('Berhasil', 'Password diubah..');
                        $this->memberModel->update($member['id'], ['pass' => $baru]);
                    }
                }
            } else {
                flash('Gagal', 'Password salah.. Coba lagi ya..', 'warning');
            }
        } else {
            if (password_verify($lama, $user['pass'])) {
                $baruHash = password_hash($baru, PASSWORD_DEFAULT);
                if ($baru == '' || $baru <> $lagi) {
                    flash('Gagal', 'Masukan Kembali Password..', 'warning');
                } else {
                    if ($lama == $baru) {
                        flash('Gagal', 'Masukan Password yang lain..', 'warning');
                    } else {
                        flash('Berhasil', 'Password diubah..');
                        $this->userModel->update($user['id'], ['pass' => $baruHash]);
                    }
                }
            } else {
                flash('Gagal', 'Password salah.. Coba lagi ya..', 'warning');
            }
        };
        return redirect()->to('/password');
    }
}
