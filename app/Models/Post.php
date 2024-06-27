<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'job_title',
        'phone_number',
        'location',
        'work_type',
        'content'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function Application()
    {
        return $this->hasMany(Application::class);
    }
}
