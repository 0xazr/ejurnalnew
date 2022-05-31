<?php

namespace App\Controllers\Author;

use App\Controllers\BaseController;
use App\Controllers\Author\Submit;
use App\Models\SubmissionModel;
use App\Models\SubmissionFileModel;
use App\Models\SubmissionSupplementaryFileModel;
use App\Models\AuthorModel;
use App\Models\ArticleModel;
use App\Models\CommentModel;

class SaveSubmit extends BaseController
{
  protected $submissionModel;
  protected $submissionFileModel;
  protected $helpers = ['form'];

  public function __construct()
  {
    $this->submissionModel = new SubmissionModel();
    $this->submissionFileModel = new SubmissionFileModel();
    $this->authorModel = new AuthorModel();
    $this->articleModel = new ArticleModel();
    $this->submissionSupplementaryFileModel = new SubmissionSupplementaryFileModel();
    $this->commentModel = new CommentModel();

    $this->submit = new Submit();
  }

  public function index($page = 1, $id = 0)
  {
    switch($page) {
      case 1:
        $data['progress'] = $page;
        $comments = $this->request->getPost()['commentsToEditor'];
        
        $submission = $this->submissionModel->where('submission_id', $id)->first();
        
        if($submission == NULL) {
          $this->submissionModel->insert($data);
          $submission_id = $this->submissionModel->getInsertID();
          $data['comments'] = [
            'comment' => $comments,
            'submission_id' => $submission_id
          ];

          $this->commentModel->insert($data['comments']);
        } else {
          $submission_id = $id;
          
        }
        
        return redirect()->to('/author/submit/2/'.$submission_id); 
        break;

      case 2:
        // if($this->request->getPost('submissionFile') == NULL) return redirect()->to('/author/submit/3/'.$id);
        // die();
        $validationRule = [
          'submissionFile' => [
              'label' => 'Submission File',
              'rules' => 'uploaded[submissionFile]'
                  . '|mime_in[submissionFile,application/pdf]'
          ],
        ];

        // var_dump($this->request);
        // die('stop');
        if(!$this->validate($validationRule)) {
          return redirect()->to('/author/submit/2/'.$id.'?error=pdf+only');
        }

        $file = $this->request->getFile('submissionFile');

        if($file != NULL) {
          $data['submission_id'] = $id;
          
          $this->submissionFileModel->insert($data);
          
          $submission_file_id = $this->submissionFileModel->getInsertID();
          $count = count($this->submissionFileModel->where('submission_id', $id)->find());

          $data = [
            'file_name' => $id . '-' . $submission_file_id . '-' . $count . '-SM.pdf',
            'original_file_name' => $file->getClientName(),
            'file_size' => $file->getSizeByUnit('kb'),
            'file_address' => 'uploads/author/' . $id . '/' . $submission_file_id . '/' . $id . '-' . $submission_file_id . '-' . $count . '-SM.pdf'
          ];

          $result = $this->submissionFileModel->update($submission_file_id, $data);
          
          if($result) {
            $file->store('author/' . $id . '/' . $submission_file_id, $data['file_name']);
          }

          return redirect()->to('/author/submit/2/'.$id);
        }
        break;
      case 3:
        $post = $this->request->getPost();
        // var_dump($post);
        if(isset($post['submitArticle'])) {
          $author = $post['authors'][0];

          // var_dump($author);
          $data['authors'] = [
            'first_name' => $author['firstName'],
            'middle_name' => $author['middleName'],
            'last_name' => $author['lastName'],
            'url' => $author['url'],
            'email' => $author['email'],
            'affiliation' => $author['affiliation'],
            'country' => $author['country'],
            'bio_statement' => $author['biography']
          ];

          // Jika belum submit pertama kali
          if(strlen($author['authorId']) == 0) {  
            // Submit Author First
            $this->authorModel->insert($data['authors']);
            
            // Lalu, ambil author_id
            $authorId = $this->authorModel->getInsertID();
          } else {
            $this->authorModel->update($author['authorId'], $data['authors']);
            $authorId = $author['authorId'];
          }

          $article = $post['article'];

          $data['article'] = [
            'title' => $article['title'],
            'abstract' => $article['abstract'],
            'keyword' => $article['keyword'],
            'language' => $article['language'],
            'references' => $article['references'],
            'author_id' => $authorId,
            'submission_id' => $id
          ];  

          if(strlen($author['authorId']) == 0) {
            $this->articleModel->insert($data['article']);
          } else {
            $this->articleModel->update($article['articleId'], $data['article']);
          }

          return redirect()->to('/author/submit/4/'.$id);
        } 
        break;

      case 4:
        $validationRule = [
          'submissionSuppFile' => [
              'label' => 'Submission Supplementary File',
              'rules' => 'uploaded[uploadSuppFile]'
                  . '|mime_in[uploadSuppFile,application/pdf]'
          ],
        ];

        // var_dump($this->request);
        // die('stop');
        if(!$this->validate($validationRule)) {
          return redirect()->to('/author/submit/4/'.$id.'?error=pdf+only');
        }

        $file = $this->request->getFile('uploadSuppFile');
        
        if($file != NULL) {
          // Buat submission_id baru
          $data['submission_id'] = $id;
          
          $this->submissionSupplementaryFileModel->insert($data);
          
          $submission_supp_file_id = $this->submissionSupplementaryFileModel->getInsertID();
          $count = count($this->submissionSupplementaryFileModel->where('submission_id', $id)->find());

          // Update fileinfo menggunakan submission id
          $data = [
            'file_name' => $id . '-' . $submission_supp_file_id . '-' . $count . '-SP.pdf',
            'original_file_name' => $file->getClientName(),
            'file_size' => $file->getSizeByUnit('kb'),
            'file_address' => 'uploads/author/' . $id . '/' . $submission_supp_file_id . '/' . $id . '-' . $submission_supp_file_id . '-' . $count . '-SP.pdf'
          ];

          $result = $this->submissionSupplementaryFileModel->update($submission_supp_file_id, $data);
          
          if($result) {
            $file->store('author/' . $id . '/' . $submission_supp_file_id, $data['file_name']);
          }

          return redirect()->to('/author/submit/4/'.$id);
        }
        break;
        
      case 5:
        $this->articleModel->whereIn('submission_id', [$id])->set(['status' => 1])->update();

        return redirect()->to('/author/');
        break;
    }

    if($page != 1 && $this->submissionModel->where('submission_id', $id)->first() == NULL) {
      return redirect()->to('/author/submit/1');
    }
  }
}