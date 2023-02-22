<?php

namespace App\Controllers;

class AdminBlog extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Blog'
        ];
        return view('admin/blog', $data);
    }
}
