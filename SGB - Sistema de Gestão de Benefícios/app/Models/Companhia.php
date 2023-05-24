<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companhia extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'logo',
        'created_at',
        'updated_at',
    ];
}
