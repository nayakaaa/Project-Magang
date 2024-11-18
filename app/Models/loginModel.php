<?php

namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model
{
    protected $table      = 'akun';
    protected $allowedFields = ['email', 'username', 'password'];
}