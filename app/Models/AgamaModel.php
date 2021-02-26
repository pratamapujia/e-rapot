<?php

namespace App\Models;

use CodeIgniter\Model;

class AgamaModel extends model
{
  protected $table = 'agama';
  protected $primaryKey = 'id_agama';

  public function getAgama($id_agama = false)
  {
    if ($id_agama == false) {
      return $this->findAll();
    }
    return $this->where(['id_agama' => $id_agama])->first();
  }
}
