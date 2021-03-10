<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
  protected $table = "guru";
  protected $primaryKey = "id_guru";
  protected $allowedFields = ['id_guru', 'nip', 'nama_guru', 'jk_guru', 'alamat_guru', 'telepon_guru', 'profesi', 'status', 'foto_guru'];

  public function getGuru($id_guru = false)
  {
    if ($id_guru == false) {
      return $this->findAll();
    }

    return $this->where(['id_guru' => $id_guru])->first();
  }

  public function autonumber()
  {
    $cd = $this->db->query("SELECT MAX(id_guru) AS kode FROM guru");
    $kd = $cd->getRow();
    return $kd->kode;
  }
}
