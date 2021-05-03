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
    // $Walas = $this->db->query("SELECT * FROM walas 
    //   LEFT JOIN guru ON walas.id_guru = guru.id_guru 
    //   LEFT JOIN kelas ON walas.id_kelas = kelas.id_kelas 
    //   LEFT JOIN mapel ON walas.id_mapel = mapel.id_mapel");
    // $hasil = [];
    // if (!empty($Walas)) {
    //   foreach ($Walas->getResultArray() as $key) {
    //     $hasil[] = $key;
    //   }
    // }
    if ($id_walas == false) {
      return $this->db->table('walas')->join('guru', 'guru.id_guru=walas.id_guru', 'left')->join('kelas', 'kelas.id_kelas=walas.id_kelas', 'left')->join('mapel', 'mapel.id_mapel=walas.id_mapel', 'left')->get()->getResultArray();
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
