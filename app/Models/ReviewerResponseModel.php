<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewerResponseModel extends Model
{
    protected $table = 'reviewer_response';
    protected $primaryKey = 'id_reviewer_response';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['id_reviewer', 'id_assignment', 'id_reviewer', 'id_submission', 'response', 'date_response', 'last_modified'];
    protected $createdField  = 'date_response';
    protected $updatedField = '';
}