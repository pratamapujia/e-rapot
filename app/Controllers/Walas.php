<?php

namespace App\Controllers;

use App\Models\WalasModel;

class Walas extends BaseController
{
  protected $walasModel;
  public function __construct()
  {
    $this->walasModel = new WalasModel();
  }
  public function indeX()
  {
    $data = [
      'title' => 'Walas',
      'walas' => $this->walasModel->getWalas()
    ];
    return view('walas/index', $data);
  }
}
