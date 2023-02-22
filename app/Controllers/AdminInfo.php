<?php

namespace App\Controllers;

class AdminInfo extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Info'
        ];
        return view('admin/info', $data);
    }
}
