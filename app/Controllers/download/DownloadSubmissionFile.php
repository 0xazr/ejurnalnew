<?php

namespace App\Controllers\Download;

use App\Controllers\BaseController;
use App\Models\SubmissionFileModel;

class DownloadSubmissionFile extends BaseController
{
  protected $submissionFileModel;

  public function __construct()
  {
    $this->submissionFileModel = new SubmissionFileModel();
  }
  public function index($id)
  {
    $file = $this->submissionFileModel->where('submission_id', $id)->orderBy('submission_file_id', 'desc')->first();
    // dd($file);
    dd($this->response->download(WRITEPATH.$file["file_address"], null));
  }
  
}
