<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $fillable = ['username', 'titlename', 'location', 'email', 'education', 'specialization', 'jobtitle', 'phone_number', 'password'];
}