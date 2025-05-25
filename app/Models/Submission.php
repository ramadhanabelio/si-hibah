<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name_institution',
        'type',
        'date_submission',
        'year_submission',
        'subdistrict',
        'address',
        'grand_total',
        'proposal',
        'photo',
        'status',
    ];
}
