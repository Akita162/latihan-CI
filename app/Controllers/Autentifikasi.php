<?php

namespace App\Controllers;

class Autentifikasi extends BaseController
{
    public function index()
    {
        if (session()->has('email')) {
            redirect('user');
        }
        if (empty($this->request->getPost())) {
            $data['judul'] = 'Login';
            $data['user'] = '';
            $data['validation'] = $this->validator;
            return view('pustaka/login', $data);
        }
        if (!$this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email harus diisi!!',
                    'valid_email' => 'Email tidak benar!!',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi!!'
                ]
            ],
        ])) {
            return redirect()->to('autentifikasi')->withInput();
        } else {
            return $this->_login();
        }
    }

    private function _login()
    {
        $email = htmlspecialchars($this->request->getPost('email', true));
        $password = $this->request->getPost('password', true);
        $user = $this->ModelUser->getUser(['email' => $email])->getRowArray();

        // jika usernya ada
        if ($user) {
            // jika user sudah aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    session()->set([
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                    ]);
                    if ($user['role_id'] == 1) {
                        return redirect()->to('admin');
                    } else if ($user['image'] == 'default.jpg') {
                        return redirect()->to('user')
                            ->withInput()
                            ->with('pesan', 'Silahkan Ubah Profile Anda untuk melanjutkan');
                    }
                } else $pesan = 'Password salah!!';
            } else $pesan = 'User belum diaktifasi!!';
        } else $pesan = 'Email tidak terdaftar!!';
        return redirect()->to('autentifikasi')
            ->withInput()
            ->with('pesan', $pesan);
    }
}
