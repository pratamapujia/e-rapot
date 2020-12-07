<?php

namespace App\Controllers;

class Kelas extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Kelas'
    ];
    return view('kelas/index', $data);
  }
}
