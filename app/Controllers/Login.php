<?php

namespace App\Controllers;

class Login extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Login',
      'contentTitle' => 'Login Page'
    ];
    echo view('pages/login', $data);
  }

  public function signIn()
  {
    echo "Memproses user login";
  }

  public function signOut()
  {
    echo "Memproses user logout";
  }
}
