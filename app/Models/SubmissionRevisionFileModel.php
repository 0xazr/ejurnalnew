<?php

namespace App\Models;

use CodeIgniter\Model;

class SubmissionRevisionFileModel extends Model
{
    protected $table = 'submission_revision_file';
    protected $primaryKey = 'submission_revision_file_id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'file_name', 'original_file_name', 'file_size', 'uploaded_at', 'submission_id', 'file_address'];
    protected $createdField  = 'uploaded_at';
    protected $updateField = 'updated_at';
}