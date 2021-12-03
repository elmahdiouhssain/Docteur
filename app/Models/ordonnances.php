<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordonnances extends Model
{
    use HasFactory;
    protected $table = 'ordonnances';
    public $timestamps = true;
    protected $fillable = [
        'fullname',
        'traitment',
        'cin',
        'observation',
        'usage',
        'date_traitment',
    ];
}
