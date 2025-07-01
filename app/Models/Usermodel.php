<?php

namespace App\Models;

use CodeIgniter\Model; #pada Codeigniter huruf 'i' harus menggunakan huruf besar menjadi 'CodeIgniter'

class Usermodel extends Model
{
    protected $table = 'users'; #dari 'userss' menjadi 'users'
    protected $allowedFields = ['name', 'email', 'created_at'];
}
