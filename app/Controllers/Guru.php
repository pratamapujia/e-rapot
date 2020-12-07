<?php

namespace App\Controllers;

use \App\Models\GuruModel;

class Guru extends BaseController
{
  protected $guruModel;
  public function __construct()
  {
    $this->guruModel = new GuruModel();
  }
  public function index()
  {
    // $guru = $this->guruModel->findAll();
    $data = [
      'title' => 'Guru',
      'guru' => $this->guruModel->getGuru()
    ];


    return view('guru/index', $data);
  }

  public function detail($id_guru)
  {
    $data = [
      'title' => 'Detail Guru',
      'guru' => $this->guruModel->getGuru($id_guru)
    ];

    //jika detail guru kosong
    if (empty($data['guru'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Id Guru ' . $id_guru . ' tidak ditemukan !!');
    }

    return view('guru/detail', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Form Tambah Data'
    ];

    return view('guru/create', $data);
  }

  public function save()
  {
    $this->guruModel->insert([
      'id_guru' => $this->request->getPost('id_guru'),
      'nip' => $this->request->getPost('nip'),
      'nama_guru' => $this->request->getPost('nama_guru'),
      'jk_guru' => $this->request->getPost('jk_guru'),
      'alamat_guru' => $this->request->getPost('alamat_guru'),
      'telepon_guru' => $this->request->getPost('telepon_guru'),
      'profesi' => $this->request->getPost('profesi'),
      'status' => $this->request->getPost('status'),
      'foto_guru' => $this->request->getPost('foto_guru')
    ]);

    return redirect()->to('/guru');
  }
}
