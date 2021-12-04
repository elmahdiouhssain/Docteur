<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;
    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = [
        'email',
        'fullname',
        'cin',
        'addr',
        'tele',
        'date',
        'genre',

    ];
}
