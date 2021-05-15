<?php

namespace App\Controllers;

class Users extends BaseController
{
  public function iindex()
  {
    return view('users/index');
  }
}
