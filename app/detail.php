<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table='details';
    protected $fillable=['fristname',
    'middlename',
    'lastname',
    'exprience',
    'gender',
    'hiring_data',
    'monthly_salary'];
}
