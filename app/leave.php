<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
    
   protected $fillable=['type',
						'from',
						'to',
						'submission_date',
						'attachement',
						'description',
						'status'];
}
