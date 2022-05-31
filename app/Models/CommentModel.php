<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'id_comment';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['comment', 'status', 'submission_id'];
    protected $createdField  = 'date_created';
    protected $updatedField  = 'last_modified';
}