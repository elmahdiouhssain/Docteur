<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apointment extends Model
{
    use HasFactory;
    protected $table = 'apointments';
    public $timestamps = true;
    protected $fillable = [
        'fullname',
        'cin',
        'title',
        'start',
        'end',
        'observation',
    ];
}
