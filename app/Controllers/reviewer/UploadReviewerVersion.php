<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;
use App\Models\SubmissionRevisionFileModel;
use App\Models\AssignmentModel;

class UploadReviewerVersion extends BaseController
{
  protected $submissionRevisionFileModel;
  protected $assignmentModel;

  public function __construct()
  {
    $this->submissionRevisionFileModel = new SubmissionRevisionFileModel();
    $this->assignmentModel = new AssignmentModel();
  }

  public function index()
  {
    $assignmentID = $this->request->getPost('reviewId');

    $validationRule = [
      'submissionRevisionFile' => [
          'label' => 'Submission Revision File',
          'rules' => 'uploaded[submissionRevisionFile]'
              . '|mime_in[submissionRevisionFile,application/pdf]'
      ],
    ];

    if(!$this->validate($validationRule)) {
      return redirect()->to('/reviewer/submission/'.$assignmentID.'?error=pdf+only');
    }

    $file = $this->request->getFile('submissionRevisionFile');

    if($file != NULL) {
      // Buat submission_id baru
      $submissionID = $this->assignmentModel->where('id_assignment', $assignmentID)->findColumn('submission_id');
      $data["submission_id"] = $submissionID[0];
      $this->submissionRevisionFileModel->insert($data);
      
      $submission_filerev_id = $this->submissionRevisionFileModel->getInsertID();
      $count = count($this->submissionRevisionFileModel->where('submission_id', $data["submission_id"])->find());

      // Update fileinfo menggunakan submission id
      $data = [
        'file_name' => $data["submission_id"] . '-' . $submission_filerev_id . '-' . $count . '-RV.pdf',
        'original_file_name' => $file->getClientName(),
        'file_size' => $file->getSizeByUnit('kb'),
        'file_address' => 'uploads/reviewer/' . $data["submission_id"] . '/' . $submission_filerev_id . '/' . $data["submission_id"] . '-' . $submission_filerev_id . '-' . $count . '-RV.pdf'
      ];

      $result = $this->submissionRevisionFileModel->update($submission_filerev_id, $data);
      
      if($result) {
        $file->store('reviewer/' . $submissionID[0] . '/' . $submission_filerev_id, $data['file_name']);
      }

      return redirect()->to('/reviewer/submission/'.$assignmentID);
    }
  }
}
