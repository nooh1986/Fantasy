<?php

namespace App\Models;

use App\Models\Total;
use App\Models\User;
use App\Models\Round;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function totals()
    {
        return $this->hasOne(Total::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function round()
    {
        return $this->belongsTo(Round::class);
    }
}
