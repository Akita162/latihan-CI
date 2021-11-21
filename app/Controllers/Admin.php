<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        // cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Dasboard';
        $data['user'] = $this->ModelUser
            ->getUser(['email' => session()->get('email')])
            ->getRowArray();
        $data['anggota'] = $this->ModelUser
            ->getUserLimit()
            ->getResultArray();
        $data['buku'] = $this->ModelBuku->getBuku()->getResultArray();
        $data['modelUser'] = $this->ModelUser;
        $data['modelBuku'] = $this->ModelBuku;

        return view('pustaka/admin/index', $data);
    }
}
