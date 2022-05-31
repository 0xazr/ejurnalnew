<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;
use App\Models\AssignmentModel;
use App\Models\ReviewerRecommendationModel;

class RecordRecommendation extends BaseController
{
  protected $assignmentModel;
  protected $reviewerRecommendationModel;

  public function __construct()
  {
    $this->assignmentModel = new AssignmentModel();
    $this->reviewerRecommendationModel = new ReviewerRecommendationModel();
  }

  public function index()
  {
    $assignmentID = $this->request->getPost('reviewId');
    $recommendation = $this->request->getPost('recommendation'); 

    $submissionID = $this->assignmentModel->where('id_assignment', $assignmentID)->findColumn('submission_id'); 
    $reviewerID = $this->assignmentModel->where('id_assignment', $assignmentID)->findColumn('id_reviewer');
    $data = [
      'recommendation' => $recommendation,
      'submission_id' => $submissionID[0],
      'reviewer_id' => $reviewerID[0]
    ];

    $this->reviewerRecommendationModel->insert($data);

    return redirect()->to('/reviewer/submission/'.$assignmentID);
  }
}
