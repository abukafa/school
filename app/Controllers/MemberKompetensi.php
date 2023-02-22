<?php

namespace App\Controllers;

class MemberKompetensi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kompetensi'
        ];
        return view('member/kompetensi', $data);
    }
}
