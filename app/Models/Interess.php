<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interess extends Model
{
    use HasFactory;

    public function house()
    {
        return $this->hasOne(House::class);
    }
}
