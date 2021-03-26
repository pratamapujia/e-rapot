<?php

namespace App\Controllers;

use App\Models\MapelModel;
use CodeIgniter\Config\Config;

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

  public function create()
  {
    //Generate auto number
    $kode = $this->mapelModel->autonumber();
    $no = substr($kode, 3, 4) + 1;
    $autonumber = "MPL" . sprintf("%04s", $no);


    $data = [
      'title' => 'Form Tambah Mapel',
      'validation' => \Config\Services::validation(),
      'kode' => $autonumber
    ];

    return view('mapel/create', $data);
  }

  public function save()
  {
    // validasi input
    if (!$this->validate([
      'nama_mapel' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama Mapel wajib diisi'
        ]
      ],
      'singkatan' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Singkatan wajib diisi'
        ]
      ]
    ])) {
      return redirect()->to('/mapel/create')->withInput();
    }

    $this->mapelModel->insert([
      'id_mapel' => $this->request->getPost('id_mapel'),
      'jenis_mapel' => $this->request->getPost('jenis_mapel'),
      'nama_mapel' => $this->request->getPost('nama_mapel'),
      'singkatan' => $this->request->getPost('singkatan')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    return redirect()->to('/mapel');
  }

  public function delete($id_mapel)
  {
    $this->mapelModel->delete($id_mapel);
    session()->setFlashdata('pesan', 'Data berhasil dihapus');
    return redirect()->to('/mapel');
  }

  public function edit($id_mapel)
  {
    $data = [
      'title' => 'Form Ubah Data Kelas',
      'validation' => \Config\Services::validation(),
      'mapel' => $this->mapelModel->getmapel($id_mapel)
    ];

    return view('mapel/edit', $data);
  }

  public function update($id_mapel)
  {
    // validasi input
    if (!$this->validate([
      'nama_mapel' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama Mapel wajib diisi'
        ]
      ],
      'singkatan' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Singkatan wajib diisi'
        ]
      ]
    ])) {
      return redirect()->to('/mapel/edit/' . $this->request->getVar('id_mapel'))->withInput();
    }

    $this->mapelModel->save([
      'id_mapel' => $id_mapel,
      'jenis_mapel' => $this->request->getVar('jenis_mapel'),
      'nama_mapel' => $this->request->getVar('nama_mapel'),
      'singkatan' => $this->request->getVar('singkatan')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diubah');

    return redirect()->to('/mapel');
  }
}
