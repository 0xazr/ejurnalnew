<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;
use App\Models\SubmissionModel;

class Submissions extends BaseController
{
  protected $submissionModel;

  public function __construct()
  {
    $this->submissionModel = new SubmissionModel();
  }

  public function index()
  {
    $data = [
      'title' => "Submissions in Review",
      'contentTitle' => ""
    ];

    if($submissions = $this->submissionModel->findAll()) {
      $data['submissions'] = $submissions;
    }
    
    return view('pages/editor/submissions', $data);
  }

  public function submissionsUnassigned()
  {
    $data = [
      'title' => "Unassigned"
    ];

    return view('pages/editor/submissionsUnassigned', $data);
  }
}
