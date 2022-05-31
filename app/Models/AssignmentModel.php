<?php

namespace App\Models;

use CodeIgniter\Model;

class AssignmentModel extends Model
{
    protected $table = 'assignment';
    protected $primaryKey = 'id_assignment';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['submission_id', 'editor_id', 'date_created', 'date_accepted', 'date_completed', 'date_invited', 'id_reviewer', 'id_round', 'id_decision', 'status'];
    protected $createdField  = 'date_created';
    protected $updatedField  = '';

    public function joinSubmissionArticle()
    {
      return $this
      ->select()
      ->join('submission', 'submission.submission_id = assignment.submission_id')
      ->join('article', 'article.submission_id = assignment.submission_id');;
    }

    // public function joinArticle()
    // {
    //   return $this
    //   ->select()
      
    // }

    // public function joinAuthor()
    // {
    //   return $this
    //   ->select()
    //   ->join('author', 'author.author_id = article.author_id');
    // }

    // public function joinSubmissionAuthorByID($submission_id)
    // {
    //     return $this
    //     ->select()
    //     ->join('submission', 'submission.submission_id = article.submission_id')
    //     ->join('author', 'author.id_author = article.author_id')
    //     ->where('submission.submission_id = '.$submission_id);
    // }
}