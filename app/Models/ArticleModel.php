<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'id_article';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'abstract', 'keyword', 'language', 'references', 'date_submit', 'status', 'author_id', 'submission_id'];
    protected $createdField  = 'date_created';
    protected $updatedField  = 'last_modified';

    public function joinSubmission()
    {
        return $this
        ->select()
        ->join('submission', 'submission.submission_id = article.submission_id');
    }

    public function joinSubmissionAuthorByID($submission_id)
    {
        return $this
        ->select()
        ->join('submission', 'submission.submission_id = article.submission_id')
        ->join('author', 'author.id_author = article.author_id')
        ->where('submission.submission_id = '.$submission_id);
    }
}