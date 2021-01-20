<?php

namespace App\Controllers;

use App\Models\MapelModel;

class Mapel extends BaseController
{
  protected $mapelModel;
  public function __construct()
  {
    $this->mapelModel = new MapelModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Mata Pelajaran',
      'mapel' => $this->mapelModel->getmapel()
    ];
    return view('mapel/index', $data);
  }

  public function save()
  {
    $this->mapelModel->insert([
      'id_mapel' => $this->request->getPost('id_mapel'),
      'jenis_mapel' => $this->request->getPost('jenis_mapel'),
      'nama_mapel' => $this->request->getPost('nama_mapel'),
      'singkatan' => $this->request->getPost('singkatan')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    return redirect()->to('/mapel');
  }
}
