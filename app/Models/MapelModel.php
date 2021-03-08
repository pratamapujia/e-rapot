<?php

namespace App\Models;

use CodeIgniter\Model;
use phpDocumentor\Reflection\PseudoTypes\False_;

class MapelModel extends model
{
  protected $table = 'mapel';
  protected $primaryKey = 'id_mapel';
  protected $allowedFields = ['id_mapel', 'jenis_mapel', 'nama_mapel', 'singkatan'];

  public function getmapel($id_mapel = false)
  {
    if ($id_mapel == false) {
      return $this->findAll();
    }

    return $this->where(['id_mapel' => $id_mapel])->first();
  }

  public function autonumber()
  {
    $cd = $this->db->query("SELECT MAX(id_mapel) AS kode FROM mapel");
    $kd = $cd->getRow();
    return $kd->kode;
  }
}
