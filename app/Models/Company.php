<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class Company extends Model implements Authenticatable
{
    use HasApiTokens, AuthenticatableTrait, HasFactory, Notifiable;

    protected $table = 'companies';
    public $timestamps = false;

    protected $fillable = [
        'company_name',
        'email',
        'location',
        'specialization',
        'establishment_date',
        'registration_number',
        'phone_number',
        'password'
    ];

    // Mutator to hash password before saving
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
