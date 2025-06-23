<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionPeriod extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'status',
    ];

    public static function isActive()
    {
        $today = now()->toDateString();
        return self::where('start_date', '<=', $today)
            ->where('end_date', '>=', $today)
            ->exists();
    }
}
