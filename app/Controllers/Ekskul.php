<?php

namespace App\Controllers;

use App\Models\EkskulModel;

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

  public function create()
  {
    $kode = $this->ekskulModel->autonumber();
    $no = substr($kode, 3, 4) + 1;
    $autonumber = "EKS" . sprintf("%03s", $no);

    $data = [
      'title' => 'Form Tambah Data Kelas',
      'validation' => \Config\Services::validation(),
      'kode' => $autonumber
    ];
    return view('ekskul/create', $data);
  }

  public function save()
  {
    //Validasi Input
    if (!$this->validate([
      'nama_ekskul' => [
        'rules' => 'required|is_unique[ekskul.nama_ekskul]',
        'errors' => [
          'required' => 'Nama Ekskul wajib diisi',
          'is_unique' => 'Nama Ekskul sudah ada'
        ]
      ]
    ])) {
      return redirect()->to('/ekskul/create')->withInput();
    }
    $this->ekskulModel->insert([
      'id_ekskul' => $this->request->getPost('id_ekskul'),
      'nama_ekskul' => $this->request->getPost('nama_ekskul')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    return redirect()->to('/ekskul');
  }

  public function delete($id_ekskul)
  {
    $this->ekskulModel->delete($id_ekskul);
    session()->setFlashdata('pesan', 'Data berhasil dihapus');
    return redirect()->to('/ekskul');
  }

  public function edit($id_ekskul)
  {
    $data = [
      'title' => 'Form Ubah Data ekskul',
      'validation' => \Config\Services::validation(),
      'ekskul' => $this->ekskulModel->getekskul($id_ekskul)
    ];

    return view('ekskul/edit', $data);
  }

  public function update($id_ekskul)
  {
    if (!$this->validate([
      'nama_ekskul' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama ekskul wajib diisi'
        ]
      ]
    ])) {
      return redirect()->to('/ekskul/edit/' . $this->request->getVar('id_ekskul'))->withInput();
    }
    $this->ekskulModel->save([
      'id_ekskul' => $id_ekskul,
      'nama_ekskul' => $this->request->getVar('nama_ekskul')
    ]);

    return redirect()->to('/ekskul');
  }
}
