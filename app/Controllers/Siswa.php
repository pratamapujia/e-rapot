<?php

namespace App\Controllers;

class Siswa extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Siswa'
    ];
    return view('siswa/index', $data);
  }
}
