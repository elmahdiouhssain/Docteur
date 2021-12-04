<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicaments extends Model
{
    use HasFactory;
    protected $table = 'medicaments';
    public $timestamps = true;
    protected $fillable = [
        'titre',
        'prix',
        'observation',
    ];
}
