<?php

namespace App\Controllers;

use \App\Models\GuruModel;
use CodeIgniter\Config\Config;

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
      'title' => 'Form Tambah Data',
      'validation' => \Config\Services::validation()
    ];

    return view('guru/create', $data);
  }

  public function save()
  {
    // Validasi input
    if (!$this->validate([
      'id_guru' => [
        'rules' => 'required|is_unique[guru.id_guru]',
        'errors' => [
          'required' => 'ID Guru wajib diisi.',
          'is_unique' => 'ID Guru tidak boleh sama'
        ]
      ],
      'nip' => [
        'rules' => 'required|is_unique[guru.nip]|max_length[18]|numeric',
        'errors' => [
          'required' => 'NIP Guru wajib diisi',
          'is_unique' => 'NIP Guru tidak boleh sama',
          'max_length' => 'NIP Guru tidak boleh lebih dari 18 karakter',
          'numeric' => 'NIP Guru harus angka'
        ]
      ],
      'nama_guru' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama Guru wajib diisi'
        ]
      ],
      'alamat_guru' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Alamat Guru wajib diisi'
        ]
      ],
      'telepon_guru' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'Telepon Guru wajib diisi.',
          'numeric' => 'Telepon Guru harus angka'
        ]
      ]
    ])) {
      $validation = \Config\Services::validation();
      return redirect()->to('/guru/create')->withInput()->with('validation', $validation);
    }

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

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    return redirect()->to('/guru');
  }
}
