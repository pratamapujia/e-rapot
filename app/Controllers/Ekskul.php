<?php

namespace App\Controllers;

class Ekskul extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Ekstrakulikuler'
    ];
    return view('ekskul/index', $data);
  }
}
