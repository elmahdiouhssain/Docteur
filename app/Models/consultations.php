<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultations extends Model
{
    use HasFactory;
    protected $table = 'consultations';
    public $timestamps = true;
    protected $fillable = [
        'poid',
        'fullname',
        'operation',
        'cin',
        'observation',
        'prix',
        'date_operation',
    ];
}
