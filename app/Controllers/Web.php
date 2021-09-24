<?php

namespace App\Controllers;

defined('BASEPATH') or exit('no direct script access allowed');

class Web extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Halaman Depan';
        return view('v-header', $data);
        return view('v-index', $data);
        return view('v-footer', $data);
    }
}
