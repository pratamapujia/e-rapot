<?php

namespace App\Controllers;

use App\Models\EkskulModel;
use App\Models\MapelModel;

class Ekskul extends BaseController
{
  protected $ekskulModel;
  public function __construct()
  {
    $this->ekskulModel = new EkskulModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Ekstrakulikuler',
      'ekskul' => $this->ekskulModel->getekskul()
    ];
    return view('ekskul/index', $data);
  }

  public function save()
  {
    $this->ekskulModel->insert([
      'id_ekskul' => $this->request->getPost('id_ekskul'),
      'nama_ekskul' => $this->request->getPost('nama_ekskul')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    return redirect()->to('/ekskul');
  }
}
