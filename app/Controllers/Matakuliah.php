<?php // Controller\Matakuliah

namespace App\Controllers;

class Matakuliah extends BaseController
{
    public function index()
    {
        $data = $this->validation;
        return view('view-form-matakuliah', $data);
    }

    public function cetak()
    {
        if (!$this->validate([
            'kode' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Kode Matakuliah Harus diisi',
                    'min_length' => 'Kode terlalu pendek'
                ]
            ],
            'nama' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama Matakuliah Harus diisi',
                    'min_length' => 'Nama terlalu pendek'
                ]
            ],
        ])) {
            return redirect()->to('Matakuliah/')->withInput()->with('validation', $this->validation);
        } else {
            $data = [
                'kode' => $this->request->getPost('kode'),
                'nama' => $this->request->getPost('nama'),
                'sks' => $this->request->getPost('sks')
            ];
            return view('view-data-matakuliah', $data);
        }
    }
}
