<?php

namespace App\Controllers\Author;

use App\Controllers\BaseController;
use App\Models\SubmissionModel;
use App\Models\SubmissionFileModel;
use App\Models\SubmissionSupplementaryFileModel;
use App\Models\ArticleModel;
use App\Models\AuthorModel;

class Submit extends BaseController
{
  protected $submissionModel;

  public function __construct()
  {
    $this->submissionModel = new SubmissionModel();
    $this->submissionFileModel = new SubmissionFileModel();
    $this->submissionSupplementaryFileModel = new SubmissionSupplementaryFileModel();
    $this->articleModel = new ArticleModel();
    $this->authorModel = new AuthorModel();
  }

  public function index($page = 1, $id = 0, $result=[])
  {
    $data['title'] = "Submission";
  
    switch($page) {
      case 1:
        $data = [
          'title' => "Step 1. Starting the Submission",
          'headerTitle' => "Step 1. Starting the Submission"
        ];
        
        // Redirect ketika tidak ditemukan submission_id di db
        if($id > 0 && $this->submissionModel->where('submission_id', $id)->first() == NULL) {
          return redirect()->to('/author/submit/1');
        }

        // Untuk input checked di page submission 1 
        $progress = $this->submissionModel->where('submission_id', $id)->findColumn('progress');
        if(!$progress) break;
        $data['checked'] = $progress[0] >= 1 ? 'checked' : '';
        break;
      case 2:
        $data = [
          'title' => "Step 2. Uploading the Submission",
          'headerTitle' => "Step 2. Uploading the Submission"
        ];

        if($fileinfo = $this->submissionFileModel->where('submission_id', $id)->orderBy('submission_file_id', 'desc')->first())
        {
          $data['fileinfo'] = $fileinfo;
        }
        break;
      case 3:
        $data = [
          'title' => "Step 3. Entering the Submission's Metadata",
          'headerTitle' => "Step 3. Entering the Submission's Metadata",
        ];

        if($article = $this->articleModel->where('submission_id', $id)->first()) {
          $data['article'] = $article;
          
          if($author = $this->authorModel->where('id_author', $article['author_id'])->first()) {
            $data['author'] = $author;
          }
        }
        break;
      case 4:
        $data = [
          'title' => "Step 4. Uploading Supplementary Files",
          'headerTitle' => "Step 4. Uploading Supplementary Files"
        ];

        if($filesinfo = $this->submissionSupplementaryFileModel->where('submission_id', $id)->findAll()) {
          $data['filesinfo'] = $filesinfo;
        } 
        break;
      case 5:
        $data = [
          'title' => "Step 5. Confirming the Submission",
          'headerTitle' => "Step 5. Confirming the Submission"
        ];

        if($mainFile = $this->submissionFileModel->where('submission_id', $id)->orderBy('submission_file_id', 'desc')->first()) {
          $data['main_file'] = $mainFile;
        }

        if($suppFile = $this->submissionSupplementaryFileModel->where('submission_id', $id)->findAll()) {
          $data['support_file'] = $suppFile;
        }
        break;
    }

    // Mengirim data submission_id untuk view
    if($id != 0) $data['submission_id'] = $id; 

    // Redirect apabila tidak ditemukan submission_id pada database
    if($page != 1 && $this->submissionModel->where('submission_id', $id)->first() == NULL) {
      return redirect()->to('/author/submit/1');
    }

    return view("pages/author/submit/$page", $data);
  }
}