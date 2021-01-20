<?php

namespace App\Models;

use CodeIgniter\Model;

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
}
