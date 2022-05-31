<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;
use App\Models\AssignmentModel;
use App\Models\SubmissionModel;
use App\Models\ArticleModel;
use App\Models\AuthorModel;
use App\Models\SubmissionFileModel;
use App\Models\SubmissionSupplementaryFileModel;
use App\Models\SubmissionRevisionFileModel;
use App\Models\ReviewerResponseModel;
use App\Models\ReviewerRecommendationModel;

class Submission extends BaseController
{
  protected $assignmentModel;
  protected $submissionModel;
  protected $articleModel;
  protected $authorModel;
  protected $submissionFileModel;
  protected $submissionSuppFileModel;
  protected $submissionRevisionFileModel;
  protected $reviewerResponseModel;
  protected $reviewerRecommendationModel;

  public function __construct()
  {
    $this->assignmentModel = new AssignmentModel();
    $this->submissionModel = new SubmissionModel();
    $this->articleModel = new ArticleModel();
    $this->authorModel = new AuthorModel();
    $this->submissionFileModel = new SubmissionFileModel();
    $this->submissionSuppFileModel = new SubmissionSupplementaryFileModel();
    $this->submissionRevisionFileModel = new SubmissionRevisionFileModel();
    $this->reviewerResponseModel = new ReviewerResponseModel();
    $this->reviewerRecommendationModel = new ReviewerRecommendationModel();
  }

  public function index($assignment_id)
  {
    if($this->assignmentModel->find($assignment_id) == NULL) return redirect()->to('/reviewer/');
    
    $data["assignment"] = $this->assignmentModel->find($assignment_id);
    $data["submission"] = $this->submissionModel->find($data["assignment"]["submission_id"]);
    $data["article"] = $this->articleModel->where('submission_id', $data["assignment"]["submission_id"])->first();
    $data["author"] = $this->authorModel->find($data["article"]["author_id"]);
    $data["file"] = $this->submissionFileModel->where('submission_id', $data["assignment"]["submission_id"])->orderBy('submission_file_id', 'desc')->first();
    $data["suppfile"] = $this->submissionSuppFileModel->where('submission_id', $data["assignment"]["submission_id"])->orderBy('submission_supplementary_file_id', 'desc')->first();
    $data["title"] = "#". $data["assignment"]['id_assignment']. " Review";

    $data["reviewer_response"] = $this->reviewerResponseModel->where('id_assignment', $assignment_id)->findColumn("response");

    if($fileinfo = $this->submissionRevisionFileModel->where('submission_id', $data["assignment"]["submission_id"])->orderBy('submission_revision_file_id', 'desc')->first())
    {
      $data['fileinfo'] = $fileinfo;
    }

    if($reviewer_recommendation = $this->reviewerRecommendationModel->where('submission_id', $data["assignment"]["submission_id"])->findColumn('recommendation'))
    {
      $data['reviewer_recommendation'] = $reviewer_recommendation[0];
    }

    // dd($data);
    
    return view('pages/reviewer/submission', $data);
  }
}
