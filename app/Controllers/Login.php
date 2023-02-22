<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\MemberModel;

class Login extends BaseController
{
    public function admin()
    {
        $data = [
            'title' => 'Login'
        ];
        if (session()->get('uname')) {
            return redirect()->to('/dashboard');
        } else {
            return view('login/admin', $data);
        }
    }

    public function member()
    {
        $data = [
            'title' => 'Login'
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
                session()->set(['uname' => $uname, 'member' => $akun]);
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