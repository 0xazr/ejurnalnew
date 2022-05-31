<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;
use App\Models\AssignmentModel;
use App\Models\ReviewerResponseModel;

class ConfirmReview extends BaseController
{
  protected $assignmentModel;
  protected $reviewerResponseModel;

  public function __construct()
  {
    $this->assignmentModel = new AssignmentModel();
    $this->reviewerResponseModel = new ReviewerResponseModel();
  }

  public function index($assignment_id)
  {
    return redirect()->to('/reviewer/submission/'.$assignment_id);
  }

  public function accept($assignment_id)
  {
    $assignment = $this->assignmentModel->find($assignment_id);
    
    if($this->reviewerResponseModel->where('id_assignment', $assignment_id)->findAll() != NULL) return redirect()->to('/reviewer/submission/'.$assignment_id);

    $data = [
      'id_assignment' => $assignment_id,
      'id_reviewer' => $assignment["id_reviewer"],
      'id_submission' => $assignment["submission_id"],
      'response' => 1
    ];
    
    // dd($data);

    $this->reviewerResponseModel->insert($data);
    
    return redirect()->to('/reviewer/submission/'.$assignment_id);
  }

  public function decline($assignment_id)
  {
    $assignment = $this->assignmentModel->find($assignment_id);
    
    if($this->reviewerResponseModel->where('id_assignment', $assignment_id)->findAll() != NULL) return redirect()->to('/reviewer/submission/'.$assignment_id);
    
    $data = [
      'id_assignment' => $assignment_id,
      'id_reviewer' => $assignment["id_reviewer"],
      'id_submission' => $assignment["submission_id"],
      'response' => 0
    ];

    // dd($data);

    $this->reviewerResponseModel->insert($data);

    return redirect()->to('/reviewer/submission/'.$assignment_id);
  }
}
