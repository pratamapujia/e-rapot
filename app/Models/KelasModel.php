<?php

namespace App\Models;

use CodeIgniter\Database\SQLite3\Table;
use CodeIgniter\Model;

class KelasModel extends model
{
  protected $table = 'kelas';
  protected $primaryKey = 'id_kelas';
  protected $allowedFields = ['id_kelas', 'tingkat', 'nama_kelas'];

  public function getKelas($id_kelas = false)
  {
    if ($id_kelas == false) {
      return $this->findAll();
    }

    return $this->where(['id_kelas' => $id_kelas])->first();
  }
}
