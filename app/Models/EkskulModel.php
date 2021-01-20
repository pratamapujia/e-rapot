<?php

namespace App\Models;

use CodeIgniter\Model;

class EkskulModel extends model
{
  protected $table = 'ekskul';
  protected $primaryKey = 'id_ekskul';
  protected $allowedFields = ['id_ekskul', 'nama_ekskul'];

  public function getekskul($id_ekskul = false)
  {
    if ($id_ekskul == false) {
      return $this->findAll();
    }

    return $this->where(['id_ekskul' => $id_ekskul])->first();
  }
}
