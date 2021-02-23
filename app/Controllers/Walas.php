<?php

namespace App\Controllers;

use App\Models\GuruModel;
use App\Models\KelasModel;
use App\Models\MapelModel;
use App\Models\WalasModel;

class Walas extends BaseController
{
  protected $walasModel;
  public function __construct()
  {
    $this->walasModel = new WalasModel();
    $this->guruModel = new GuruModel();
    $this->kelasModel = new KelasModel();
    $this->mapelModel = new MapelModel();
  }
  public function indeX()
  {
    $data = [
      'title' => 'Walas',
      'walas' => $this->walasModel->getWalas()
    ];
    return view('walas/index', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Form Tambah Data',
      'guru' => $this->guruModel->getGuru(),
      'kelas' => $this->kelasModel->getKelas(),
      'mapel' => $this->mapelModel->getMapel(),
      'validation' => \Config\Services::validation()
    ];

    return view('walas/create', $data);
  }

  public function save()
  {
    //validasi input
    if (!$this->validate([
      'id_walas' => [
        'rules' => 'required|is_unique[walas.id_walas]',
        'errors' => [
          'required' => 'ID Walas wajib diisi',
          'is_unique' => 'ID Walas sudah ada'
        ]
      ]
    ])) {
      return redirect()->to('/walas/create')->withInput();
    }

    $this->walasModel->insert([
      'id_walas' => $this->request->getPost('id_walas'),
      'id_guru' => $this->request->getPost('id_guru'),
      'id_mapel' => $this->request->getPost('id_mapel'),
      'id_kelas' => $this->request->getPost('id_kelas')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    return redirect()->to('/walas');
  }

  public function delete($id_walas)
  {
    $this->walasModel->delete($id_walas);
    session()->setFlashdata('pesan', 'Data berhasil dihapus');
    return redirect()->to('/walas');
  }
}
