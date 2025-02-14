<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model {

    protected $table = 'employee_models';
    protected $connection = 'mysql';
    public $fillable = ['first_name', 'last_name', 'department'];

}
