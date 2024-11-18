<?php

namespace App\Models;

use CodeIgniter\Model;

class editModel extends Model
{
    protected $table      = 'akun';
    protected $allowedFields = ['id', 'email', 'username', 'password', 'picture'];
    protected bool $allowEmptyInserts = false;
}