<?php

namespace App\Controllers;

use App\Models\TestModel;

class Test extends BaseController
{
  protected $testModel;

  public function __construct()
  {
    $this->testModel = new TestModel();
  }

  public function index()
  {
    $test = $this->testModel->findAll();
    dd($test);
    
    return view('test');
  }
}
