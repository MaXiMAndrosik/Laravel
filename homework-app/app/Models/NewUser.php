<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewUser extends Model
{
    /** @use HasFactory<\Database\Factories\NewUserFactory> */
    use HasFactory;
    protected $table = 'new_users';
    protected $connection = 'mysql';
    protected $fillable = [
        'name', 'surname', 'email',
    ];
}
