<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends model
{
  protected $table = 'siswa';
  protected $primaryKey = 'id_siswa';
  protected $allowedFields = ['id_siswa', 'nis', 'nisn', 'nama_siswa', 'jk_siswa', 'tempat_lahir', 'tanggal_lahir', 'agama', 'alamat_siswa', 'telepon_siswa', 'nama_ayah', 'pekerjaan_ayah', 'nama_ibu', 'pekerjaan_ibu', 'alamat_ortu', 'telepon_ortu', 'foto_siswa'];

  public function getSiswa($id_siswa = false)
  {
    if ($id_siswa == false) {
      return $this->db->table('siswa')->join('agama', 'agama.agama=siswa.agama')->get()->getResultArray();
    }

    return $this->where(['id_siswa' => $id_siswa])->first();
  }

  public function autonumber()
  {
    $cd = $this->db->query("SELECT MAX(id_siswa) as kode FROM siswa");
    $kd = $cd->getRow();
    return $kd->kode;
  }
}
