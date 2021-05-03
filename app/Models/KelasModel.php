<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends model
{
  protected $table = 'kelas';
  protected $primaryKey = 'id_kelas';
  protected $allowedFields = ['id_kelas', 'tingkat', 'jurusan', 'nama_kelas'];

  public function getKelas($id_kelas = false)
  {
    if ($id_kelas == false) {
      return $this->findAll();
    }

    return $this->where(['id_kelas' => $id_kelas])->first();
  }

  public function autonumber()
  {
    $cd = $this->db->query("SELECT MAX(id_kelas) AS kode FROM kelas");
    $kd = $cd->getRow();
    return $kd->kode;
  }
}
