<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Dior extends Model
{
    use HasFactory;
    protected $table = 'diors';
    public function product(): HasOne
    {
        return $this->hasOne(Dior::class);
    }
}