<?php

namespace App\Models;

use App\Models\Result;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable , HasRoles;

    
    protected $guarded  = [];
    
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function results()
    {
        return $this->hasMany(Result::class);
    }

        
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
