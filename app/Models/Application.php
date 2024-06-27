<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'post_id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
