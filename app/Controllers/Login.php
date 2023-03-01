<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\MemberModel;
use App\Models\ProfilModel;

class Login extends BaseController
{
    public function admin()
    {
        $profileModel = new ProfilModel();
        $data = [
            'title' => 'Login',
            'profil' => $profileModel->first()
        ];
        if (session()->get('uname')) {
            return redirect()->to('/dashboard');
        } else {
            return view('login/admin', $data);
        }
    }

    public function member()
    {
        $profileModel = new ProfilModel();
        $data = [
            'title' => 'Login',
            'profil' => $profileModel->first()
        ];
        if (session()->get('uname')) {
            return redirect()->to('/dashboard');
        } else {
            return view('login/member', $data);
        }
    }

    public function loginAdmin()
    {
        $userModel = new UserModel();
        $uname = $this->request->getVar('uname');
        $pass = $this->request->getVar('pass');
        $user = $userModel->where('uname', $uname)->first();
        if ($user) {
            if (password_verify($pass, $user['pass'])) {
                session()->set($user);
                flash($user['nama'], 'Selamat Datang');
                // dd(session()->get());
            } else {
                session()->setFlashdata('error', 'Password salah..');
            }
        } else {
            session()->setFlashdata('error', 'Anda belum Terdaftar..');
        }
        return redirect()->to('/admin');
    }

    public function loginMember()
    {
        $memberModel = new MemberModel();
        $uname = $this->request->getVar('uname');
        $pass = $this->request->getVar('pass');
        $member = $memberModel->where('ni', $uname)->first();
        if ($member) {
            if ($pass == $member['pass']) {
                $akun = ($member['akun'] == 'Siswa') ? $member['tahun'] : $member['akun'];
                session()->set(['uname' => $uname, 'member' => $akun, 'id' => $member['id']]);
                flash($member['nama'], 'Selamat Datang');
                // dd(session()->get());
            } else {
                session()->setFlashdata('error', 'Password salah..');
            }
        } else {
            session()->setFlashdata('error', 'Anda belum Terdaftar..');
        }
        return redirect()->to('/member');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
