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
    //cari data guru
    $cari = $this->request->getVar('cari');
    if ($cari) {
      $guru = $this->guruModel->search($cari);
    } else {
      $guru = $this->guruModel;
    }

    // $guru = $this->guruModel->findAll();
    $data = [
      'title' => 'Guru',
      'guru' => $guru->getGuru()
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
    //Generate auto number
    $kode = $this->guruModel->autonumber();
    $no = substr($kode, 3, 4) + 1;
    $autonumber = "GRU" . sprintf("%04s", $no);

    $data = [
      'title' => 'Form Tambah Data Guru',
      'validation' => \Config\Services::validation(),
      'kode' => $autonumber
    ];

    return view('guru/create', $data);
  }

  public function save()
  {
    // Validasi input
    if (!$this->validate([
      // 'id_guru' => [
      //   'rules' => 'required|is_unique[guru.id_guru]',
      //   'errors' => [
      //     'required' => 'ID Guru wajib diisi.',
      //     'is_unique' => 'ID Guru sudah ada'
      //   ]
      // ],
      'nip' => [
        'rules' => 'required|is_unique[guru.nip]|max_length[18]|numeric',
        'errors' => [
          'required' => 'NIP Guru wajib diisi',
          'is_unique' => 'NIP Guru sudah ada',
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
      ],
      'foto_guru' => [
        'rules' => 'uploaded[foto_guru]|max_size[foto_guru,1024]|is_image[foto_guru]|mime_in[foto_guru,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'uploaded' => 'Foto guru wajib diisi',
          'max_size' => 'Ukuran gambar terlalu besar (max 1mb)',
          'is_image' => 'File yang anda pilih bukan gambar',
          'mime_in' => 'File yang anda pilih bukan gambar'
        ]
      ],
      'jk_guru' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Pilih salah satu'
        ]
      ],
      'profesi' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Pilih salah satu'
        ]
      ],
      'status' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Pilih salah satu'
        ]
      ]
    ])) {
      // $validation = \Config\Services::validation();
      // return redirect()->to('/guru/create')->withInput()->with('validation', $validation);
      return redirect()->to('/guru/create')->withInput();
    }

    //ambil gambar
    $fotoGuru = $this->request->getFile('foto_guru');
    //memindahkan file ke folder img -> fotoGuru
    $fotoGuru->move('img/fguru');
    //ambil nama file foto guru
    $namaFoto = $fotoGuru->getName();

    $this->guruModel->insert([
      'id_guru' => $this->request->getPost('id_guru'),
      'nip' => $this->request->getPost('nip'),
      'nama_guru' => $this->request->getPost('nama_guru'),
      'jk_guru' => $this->request->getPost('jk_guru'),
      'alamat_guru' => $this->request->getPost('alamat_guru'),
      'telepon_guru' => $this->request->getPost('telepon_guru'),
      'profesi' => $this->request->getPost('profesi'),
      'status' => $this->request->getPost('status'),
      'foto_guru' => $namaFoto
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    return redirect()->to('/guru');
  }

  public function delete($id_guru)
  {
    //cari gambar berdasarkan id
    $guru = $this->guruModel->find($id_guru);

    // hapus gambar
    unlink('img/fguru/' . $guru['foto_guru']);

    $this->guruModel->delete($id_guru);
    session()->setFlashdata('pesan', 'Data berhasil dihapus');
    return redirect()->to('/guru');
  }

  public function edit($id_guru)
  {
    $data = [
      'title' => 'Form Ubah Data Guru',
      'validation' => \Config\Services::validation(),
      'guru' => $this->guruModel->getGuru($id_guru)
    ];

    return view('guru/edit', $data);
  }

  public function update($id_guru)
  {
    // $idlama = $this->guruModel->getGuru($this->request->getVar('id_guru'));
    // if ($idlama['id_guru'] == $this->request->getVar('id_guru')) {
    //   $ruleid = 'required';
    // } else {
    //   $ruleid = 'required|is_unique[guru.id_guru]';
    // }
    // dd($ruleid);
    // Validasi input
    if (!$this->validate([
      // 'id_guru' => [
      //   'rules' => $ruleid,
      //   'errors' => [
      //     'required' => 'ID Guru wajib diisi.',
      //     'is_unique' => 'ID Guru tidak boleh sama'
      //   ]
      // ],
      'nip' => [
        'rules' => 'required|max_length[18]|numeric',
        'errors' => [
          'required' => 'NIP Guru wajib diisi',
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
      ],
      'foto_guru' => [
        'rules' => 'max_size[foto_guru,1024]|is_image[foto_guru]|mime_in[foto_guru,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran gambar terlalu besar (max 1mb)',
          'is_image' => 'File yang anda pilih bukan gambar',
          'mime_in' => 'File yang anda pilih bukan gambar'
        ]
      ]
    ])) {
      // $validation = \Config\Services::validation();
      return redirect()->to('/guru/edit/' . $this->request->getVar('id_guru'))->withInput();
    }

    $fileGuru = $this->request->getFile('foto_guru');

    //cek gambar Guru, apa tetap atau beruba
    if ($fileGuru->getError() == 4) {
      $namaFoto = $this->request->getVar('fotoLama');
    } else {
      //pindahkan Gambar
      $fileGuru->move('img/fguru');
      //ambil nama file foto guru
      $namaFoto = $fileGuru->getName();
      //hapus file lama
      unlink('img/fguru/' . $this->request->getVar('fotoLama'));
    }

    $this->guruModel->save([
      'id_guru' => $id_guru,
      'nip' => $this->request->getVar('nip'),
      'nama_guru' => $this->request->getVar('nama_guru'),
      'jk_guru' => $this->request->getVar('jk_guru'),
      'alamat_guru' => $this->request->getVar('alamat_guru'),
      'telepon_guru' => $this->request->getVar('telepon_guru'),
      'profesi' => $this->request->getVar('profesi'),
      'status' => $this->request->getVar('status'),
      'foto_guru' => $namaFoto
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diubah');
    return redirect()->to('/guru');
  }
}
