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
      'title' => 'Form Tambah Data'
    ];

    return view('siswa/create', $data);
  }

  public function save()
  {
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
