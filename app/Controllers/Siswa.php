<?php

namespace App\Controllers;

use App\Models\AgamaModel;
use App\Models\SiswaModel;

class Siswa extends BaseController
{
  protected $siswaModel;
  public function __construct()
  {
    $this->siswaModel = new SiswaModel();
    $this->agamaModel = new AgamaModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Siswa',
      'siswa' => $this->siswaModel->getSiswa()
    ];
    return view('siswa/index', $data);
  }

  public function detail($id_siswa)
  {
    $data = [
      'title' => 'Detail Siswa',
      'siswa' => $this->siswaModel->getSiswa($id_siswa)
    ];

    //jika detail guru kosong
    if (empty($data['siswa'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Id Siswa ' . $id_siswa . ' tidak ditemukan !!');
    }
    return view('siswa/detail', $data);
  }

  public function create()
  {
    //Generate auto number
    $kode = $this->siswaModel->autonumber();
    $no = substr($kode, 3, 4) + 1;
    $autonumber = "SWA" . sprintf("%04s", $no);

    $data = [
      'title' => 'Form Tambah Data',
      'agama' => $this->agamaModel->getAgama(),
      'validation' => \Config\Services::validation(),
      'kode' => $autonumber
    ];

    return view('siswa/create', $data);
  }

  public function save()
  {
    //validasi input
    if (!$this->validate([
      // 'id_siswa' => [
      //   'rules' => 'required|is_unique[siswa.id_siswa]',
      //   'errors' => [
      //     'required' => 'ID Siswa wajib diisi.',
      //     'is_unique' => 'ID Siswa tidak boleh sama'
      //   ]
      // ],
      'nis' => [
        'rules' => 'required|max_length[18]|numeric',
        'errors' => [
          'required' => 'NIS Siswa wajib diisi',
          'max_length' => 'NIS Siswa tidak boleh lebih dari 18 karakter',
          'numeric' => 'NIS Siswa harus angka'
        ]
      ],
      'nisn' => [
        'rules' => 'required|max_length[9]|numeric',
        'errors' => [
          'required' => 'NISN Siswa wajib diisi',
          'max_length' => 'NISN Siswa tidak boleh lebih dari 9 karakter',
          'numeric' => 'NISN Siswa harus angka'
        ]
      ],
      'nama_siswa' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama Siswa wajib diisi'
        ]
      ],
      'tempat_lahir' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Tempat lahir wajib diisi'
        ]
      ],
      'tanggal_lahir' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Tanggal lahir wajib diisi'
        ]
      ],
      'alamat_siswa' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Alamat Siswa wajib diisi'
        ]
      ],
      'telepon_siswa' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'Telepon Siswa wajib diisi.',
          'numeric' => 'Telepon Siswa harus angka'
        ]
      ],
      'nama_ayah' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama Ayah wajib diisi'
        ]
      ],
      'pekerjaan_ayah' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Pekerjaan Ayah wajib diisi'
        ]
      ],
      'nama_ibu' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama Ibu wajib diisi'
        ]
      ],
      'pekerjaan_ibu' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Pekerjaan Ibu wajib diisi'
        ]
      ],
      'alamat_ortu' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Alamat orang tua wajib diisi'
        ]
      ],
      'telepon_ortu' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'Telepon orang tua wajib diisi.',
          'numeric' => 'Telepon orang tua harus angka'
        ]
      ]
    ])) {
      // $validation = \Config\Services::validation();
      return redirect()->to('/siswa/create')->withInput();
    }

    //ambil gambar
    $fotoSiswa = $this->request->getFile('foto_siswa');
    //memindahkan file ke folder img -> fotoGuru
    $fotoSiswa->move('img/fsiswa');
    //ambil nama file foto guru
    $namaFoto = $fotoSiswa->getName();

    $this->siswaModel->insert([
      'id_siswa' => $this->request->getPost('id_siswa'),
      'nis' => $this->request->getPost('nis'),
      'nisn' => $this->request->getPost('nisn'),
      'nama_siswa' => $this->request->getPost('nama_siswa'),
      'jk_siswa' => $this->request->getPost('jk_siswa'),
      'tempat_lahir' => $this->request->getPost('tempat_lahir'),
      'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
      'agama' => $this->request->getPost('agama'),
      'alamat_siswa' => $this->request->getPost('alamat_siswa'),
      'telepon_siswa' => $this->request->getPost('telepon_siswa'),
      'nama_ayah' => $this->request->getPost('nama_ayah'),
      'pekerjaan_ayah' => $this->request->getPost('pekerjaan_ayah'),
      'nama_ibu' => $this->request->getPost('nama_ibu'),
      'pekerjaan_ibu' => $this->request->getPost('pekerjaan_ibu'),
      'alamat_ortu' => $this->request->getPost('alamat_ortu'),
      'telepon_ortu' => $this->request->getPost('telepon_ortu'),
      'foto_siswa' => $namaFoto
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    return redirect()->to('/siswa');
  }
  public function delete($id_siswa)
  {
    //cari gambar berdasarkan id
    $siswa = $this->siswaModel->find($id_siswa);

    // hapus gambar
    unlink('img/fsiswa/' . $siswa['foto_siswa']);

    $this->siswaModel->delete($id_siswa);
    session()->setFlashdata('pesan', 'Data berhasil dihapus');
    return redirect()->to('/siswa');
  }

  public function edit($id_siswa)
  {
    $data = [
      'title' => 'Form Ubah Data siswa',
      'validation' => \Config\Services::validation(),
      'siswa' => $this->siswaModel->getSiswa($id_siswa),
      'agama' => $this->agamaModel->getAgama()
    ];

    return view('siswa/edit', $data);
  }

  public function update($id_siswa)
  {
    // $idlama = $this->siswaModel->getSiswa($this->request->getVar('id_siswa'));
    // if ($idlama['id_siswa'] == $this->request->getVar('id_siswa')) {
    //   $ruleid = 'required';
    // } else {
    //   $ruleid = 'required|is_unique[siswa.id_siswa]';
    // }

    // Validasi input
    if (!$this->validate([
      // 'id_siswa' => [
      //   'rules' => $ruleid,
      //   'errors' => [
      //     'required' => 'ID Siswa wajib diisi.',
      //     'is_unique' => 'ID Siswa tidak boleh sama'
      //   ]
      // ],
      'nis' => [
        'rules' => 'required|max_length[18]|numeric',
        'errors' => [
          'required' => 'NIS Siswa wajib diisi',
          'max_length' => 'NIS Siswa tidak boleh lebih dari 18 karakter',
          'numeric' => 'NIS Siswa harus angka'
        ]
      ],
      'nisn' => [
        'rules' => 'required|max_length[9]|numeric',
        'errors' => [
          'required' => 'NISN Siswa wajib diisi',
          'max_length' => 'NISN Siswa tidak boleh lebih dari 18 karakter',
          'numeric' => 'NISN Siswa harus angka'
        ]
      ],
      'nama_siswa' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama Siswa wajib diisi'
        ]
      ],
      'tempat_lahir' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Tempat lahir wajib diisi'
        ]
      ],
      'tanggal_lahir' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Tanggal lahir wajib diisi'
        ]
      ],
      'alamat_siswa' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Alamat Siswa wajib diisi'
        ]
      ],
      'telepon_siswa' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'Telepon Siswa wajib diisi.',
          'numeric' => 'Telepon Siswa harus angka'
        ]
      ],
      'nama_ayah' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama Ayah wajib diisi'
        ]
      ],
      'pekerjaan_ayah' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Pekerjaan Ayah wajib diisi'
        ]
      ],
      'nama_ibu' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama Ibu wajib diisi'
        ]
      ],
      'pekerjaan_ibu' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Pekerjaan Ibu wajib diisi'
        ]
      ],
      'alamat_ortu' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Alamat orang tua wajib diisi'
        ]
      ],
      'telepon_ortu' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'Telepon orang tua wajib diisi.',
          'numeric' => 'Telepon orang tua harus angka'
        ]
      ],
      'foto_siswa' => [
        'rules' => 'max_size[foto_siswa,2048]|is_image[foto_siswa]|mime_in[foto_siswa,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran gambar terlalu besar (max 2mb)',
          'is_image' => 'File yang anda pilih bukan gambar',
          'mime_in' => 'File yang anda pilih bukan gambar'
        ]
      ]
    ])) {
      // $validation = \Config\Services::validation();
      return redirect()->to('/siswa/edit/' . $this->request->getVar('id_siswa'))->withInput();
    }

    $fileSiswa = $this->request->getFile('foto_siswa');

    //cek gambar Siswa, apa tetap atau beruba
    if ($fileSiswa->getError() == 4) {
      $namaFoto = $this->request->getVar('fotoLama');
    } else {
      //pindahkan Gambar
      $fileSiswa->move('img/fsiswa');
      //ambil nama file foto guru
      $namaFoto = $fileSiswa->getName();
      //hapus file lama
      unlink('img/fsiswa/' . $this->request->getVar('fotoLama'));
    }

    $this->siswaModel->save([
      'id_siswa' => $id_siswa,
      'nis' => $this->request->getVar('nis'),
      'nisn' => $this->request->getVar('nisn'),
      'nama_siswa' => $this->request->getVar('nama_siswa'),
      'jk_siswa' => $this->request->getVar('jk_siswa'),
      'tempat_lahir' => $this->request->getVar('tempat_lahir'),
      'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
      'agama' => $this->request->getVar('agama'),
      'alamat_siswa' => $this->request->getVar('alamat_siswa'),
      'telepon_siswa' => $this->request->getVar('telepon_siswa'),
      'nama_ayah' => $this->request->getVar('nama_ayah'),
      'pekerjaan_ayah' => $this->request->getVar('pekerjaan_ayah'),
      'nama_ibu' => $this->request->getVar('nama_ibu'),
      'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
      'alamat_ortu' => $this->request->getVar('alamat_ortu'),
      'telepon_ortu' => $this->request->getVar('telepon_ortu'),
      'foto_siswa' => $namaFoto
    ]);

    session()->setFlashdata('pesan', 'Data berhasil diubah');
    return redirect()->to('/siswa');
  }
}
