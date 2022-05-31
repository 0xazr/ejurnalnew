<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewerRecommendationModel extends Model
{
    protected $table = 'reviewer_recommendation';
    protected $primaryKey = 'reviewer_recommendation_id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['recommendation', 'submission_id', 'reviewer_id'];
    protected $createdField  = 'date_created';
    protected $updatedField = '';
}