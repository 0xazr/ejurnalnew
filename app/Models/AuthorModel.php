<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthorModel extends Model
{
    protected $table = 'author';
    protected $primaryKey = 'id_author';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['first_name', 'middle_name', 'last_name', 'email', 'url', 'affiliation', 'country', 'bio_statement'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'last_modified';
}