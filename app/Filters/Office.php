<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Office implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $akses = !session()->get('akses') ? [] : explode(',', session()->get('akses'));
        if (!in_array('Office', $akses)) {
            return redirect()->to('/dashboard');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // 
    }
}
