<?php

namespace App\Models;

use App\Models\User;
use App\Models\SubmissionValidation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'name_institution',
        'name_manager',
        'category',
        'type',
        'date_submission',
        'year_submission',
        'subdistrict',
        'ward_village',
        'address',
        'grand_total',
        'proposal',
        'deed_of_establishment',
        'npwp',
        'account_book',
        'rab_renovation',
        'photo',
        'note',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function validation()
    {
        return $this->hasOne(SubmissionValidation::class);
    }
}
