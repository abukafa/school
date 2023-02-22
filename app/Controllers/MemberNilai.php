<?php

namespace App\Controllers;

class MemberNilai extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Nilai'
        ];
        return view('member/nilai', $data);
    }
}
