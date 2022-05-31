<?php

namespace App\Models;

use CodeIgniter\Model;

class SubmissionModel extends Model
{
    protected $table = 'submission';
    protected $primaryKey = 'submission_id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['progress'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'last_modified';
}