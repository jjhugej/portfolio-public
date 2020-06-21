<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeRequest extends Model
{
    protected $fillable = ['name', 'email', 'company', 'position', 'notes'];
}
