<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Web extends BaseController
{
    function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    public function index()
    {
        $data['judul'] = 'Halaman Depan';
        return view('v-header', $data) . view('v-index', $data) . view('v-footer', $data);
    }
}
