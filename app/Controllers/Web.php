<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Web extends BaseController
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        helper('url');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Depan';
        $data['title'] = 'Web Prog II | Merancang Template Sederhana dengan CodeIgniter';
        // 1 view use return, many views use echo
        return view('v-header', $data) . view('v-index', $data) . view('v-footer', $data);
    }
}
