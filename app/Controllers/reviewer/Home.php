<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;
use App\Models\AssignmentModel;

class Home extends BaseController
{
  protected $assignmentModel;

  public function __construct()
  {
    $this->assignmentModel = new AssignmentModel();
  }

  public function index()
  {
    $data = [
      'title' => "Active Submissions",
      'contentTitle' => ""
    ];

    // if($submissions = $this->submissionModel->findAll()) {
    //   $data['submissions'] = $submissions;
    // }

    if($assignments = $this->assignmentModel->joinSubmissionArticle()->findAll()) {
      $data['assignments'] = $assignments;
      // dd($assignments);
    }
    
    return view('pages/reviewer/home', $data);
  }
}
