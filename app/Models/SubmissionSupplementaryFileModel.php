<?php

namespace App\Models;

use CodeIgniter\Model;

class SubmissionSupplementaryFileModel extends Model
{
    protected $table = 'submission_supplementary_file';
    protected $primaryKey = 'submission_supplementary_file_id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['file_name', 'original_file_name', 'file_size', 'uploaded_at', 'submission_id', 'file_address'];
    protected $createdField  = 'uploaded_at';
    protected $updateField = 'updated_at';
}