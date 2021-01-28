<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
  protected $siswaModel;
  public function __construct()
  {
    $this->siswaModel = new SiswaModel();
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
    $data = [
      'title' => 'Form Tambah Data',
      'validation' => \Config\Services::validation()
    ];

    return view('siswa/create', $data);
  }

  public function save()
  {
    //validasi input
    if (!$this->validate([
      'id_siswa' => [
        'rules' => 'required|is_unique[siswa.id_siswa]',
        'errors' => [
          'required' => 'ID Siswa wajib diisi.',
          'is_unique' => 'ID Siswa tidak boleh sama'
        ]
      ],
      'nis' => [
        'rules' => 'required|is_unique[siswa.nis]|max_length[18]|numeric',
        'errors' => [
          'required' => 'NIS Siswa wajib diisi',
          'is_unique' => 'NIS Siswa tidak boleh sama',
          'max_length' => 'NIS Siswa tidak boleh lebih dari 18 karakter',
          'numeric' => 'NIS Siswa harus angka'
        ]
      ],
      'nisn' => [
        'rules' => 'required|is_unique[siswa.nisn]|max_length[9]|numeric',
        'errors' => [
          'required' => 'NISN Siswa wajib diisi',
          'is_unique' => 'NISN Siswa tidak boleh sama',
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
      ]
    ])) {
      $validation = \Config\Services::validation();
      return redirect()->to('/siswa/create')->withInput()->with('validation', $validation);
    }

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
      'foto_siswa' => $this->request->getPost('foto_siswa')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    return redirect()->to('/siswa');
  }
}
