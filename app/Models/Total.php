<?php

namespace App\Models;

use App\Models\User;
use App\Models\Result;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Total extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function result()
    {
        return $this->belongsTo(Result::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
