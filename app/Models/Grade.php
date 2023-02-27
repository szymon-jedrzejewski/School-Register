<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Grade extends Model
{
    use HasFactory;

    public function teacher(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function student(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
