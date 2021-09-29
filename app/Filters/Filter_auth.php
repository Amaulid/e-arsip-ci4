<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Filter_auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (session()->get('log') != true) {
            session()->setFlashdata('pesan', 'Anda belum Login, Silahkan login !!!');
            return redirect()->to(base_url('auth/index'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        if (session()->get('log') == true) {
            session()->setFlashdata('pesan', 'Selamat Datang !!!');
            return redirect()->to(base_url('home'));
        }
    }
}
