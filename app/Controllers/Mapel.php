<?php

namespace App\Controllers;

class Mapel extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Mata Pelajaran'
    ];
    return view('mapel/index', $data);
  }
}
