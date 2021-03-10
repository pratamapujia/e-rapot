<?php

namespace App\Models;

use CodeIgniter\Model;

class WalasModel extends model
{
  protected $table = 'walas';
  protected $primaryKey = 'id_walas';
  protected $allowedFields = ['id_walas', 'id_guru', 'id_mapel', 'id_kelas'];

  public function getWalas($id_walas = false)
  {
    if ($id_walas == false) {
      return $this->db->table('walas')->join('guru', 'guru.id_guru=walas.id_guru')->join('kelas', 'kelas.id_kelas=walas.id_kelas')->join('mapel', 'mapel.id_mapel=walas.id_mapel')->get()->getResultArray();
    }
    return $this->where(['id_walas' => $id_walas])->first();
  }

  public function autonumber()
  {
    $cd = $this->db->query("SELECT MAX(id_walas) as kode FROM walas");
    $kd = $cd->getRow();
    return $kd->kode;
  }
}
