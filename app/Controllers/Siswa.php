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
}
