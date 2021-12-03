<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;
    protected $table = 'payments';
    public $timestamps = true;
    protected $fillable = [
        'fullname',
        'date',
        'cin',
        'observation',
        'genre',
        'operation',
        'prix',
    ];
}
