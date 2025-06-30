<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Employee extends Model
{
    use HasFactory;
        // Allow mass assignment for these fields (optional but recommended)
        protected $fillable = ['name', 'email', 'job_title', 'department'];
    
}


