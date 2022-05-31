<?php

namespace App\Controllers\Author;

use App\Controllers\BaseController;
use App\Models\SubmissionModel;

class Home extends BaseController
{
  protected $submissionModel;

  public function __construct()
  {
    $this->submissionModel = new SubmissionModel();
  }

  public function index()
  {
    $data = [
      'title' => "Index",
      'contentTitle' => ""
    ];

    if($submissions = $this->submissionModel->findAll()) {
      $data['submissions'] = $submissions;
    }
    
    return view('pages/author/home', $data);
  }
}
