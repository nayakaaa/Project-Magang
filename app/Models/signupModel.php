<?php

namespace App\Models;

use CodeIgniter\Model;

class signupModel extends Model
{
    protected $table      = 'akun';
    protected $allowedFields = ['email', 'username', 'password'];
    protected bool $allowEmptyInserts = false;
}