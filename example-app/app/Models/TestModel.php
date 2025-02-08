<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    protected $table = 'test';
    protected $connection = 'secind_mysql';
    protected $primaryKey = 'test_id';
    public $incrementing = true;
    public $timestemps = true;

    protected $attributes = ['first_name'];




}
