<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeRequest extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'company', 'position', 'notes'];
   

    //protected $table = 'resume_requests';
}
