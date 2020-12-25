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

  public function save()
  {
    $this->kelasModel->insert([
      'id_kelas' => $this->request->getPost('id_kelas'),
      'tingkat' => $this->request->getPost('tingkat'),
      'nama_kelas' => $this->request->getPost('nama_kelas')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    return redirect()->to('/kelas');
  }
}
