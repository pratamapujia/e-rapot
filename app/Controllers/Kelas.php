<?php

namespace App\Controllers;

use App\Models\KelasModel;

class Kelas extends BaseController
{
  protected $kelasModel;
  public function __construct()
  {
    $this->kelasModel = new KelasModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Kelas',
      'kelas' => $this->kelasModel->getKelas()
    ];
    return view('kelas/index', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Form Tambah Data Kelas',
      'validation' => \Config\Services::validation()
    ];
    return view('kelas/create', $data);
  }

  public function save()
  {
    // Validasi input
    if (!$this->validate([
      'id_kelas' => [
        'rules' => 'required|is_unique[kelas.id_kelas]',
        'errors' => [
          'required' => 'ID Kelas wajib diisi',
          'is_unique' => 'ID Kelas sudah ada'
        ]
      ],
      'nama_kelas' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama kelas wajib diisi'
        ]
      ]
    ])) {
      return redirect()->to('/kelas/create')->withInput();
    }


    $this->kelasModel->insert([
      'id_kelas' => $this->request->getPost('id_kelas'),
      'tingkat' => $this->request->getPost('tingkat'),
      'nama_kelas' => $this->request->getPost('nama_kelas')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    return redirect()->to('/kelas');
  }

  public function delete($id_kelas)
  {
    $this->kelasModel->delete($id_kelas);
    session()->setFlashdata('pesan', 'Data berhasil dihapus');
    return redirect()->to('/kelas');
  }
}
