<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServoControl extends Model
{
    use HasFactory;

    protected $fillable = [
        'servo',
        'derajat',
    ];
}
