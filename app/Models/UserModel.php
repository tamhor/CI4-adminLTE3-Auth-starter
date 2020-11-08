<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = [
        'fullname',
        'email',
        'username',
        'password',
        'reset_token',
        'role',
        'activate_token',
        'is_active',
        'activated_at',
        'updated_at',
        'deactivated_at'
    ];
}
