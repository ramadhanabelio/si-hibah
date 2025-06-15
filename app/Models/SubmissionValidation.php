<?php

namespace App\Models;

use App\Models\Submission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubmissionValidation extends Model
{
    protected $fillable = [
        'submission_id',

        'valid_proposal',
        'valid_deed',
        'valid_npwp',
        'valid_account_book',
        'valid_rab',
        'valid_photo',

        'valid_name_institution',
        'valid_name_manager',
        'valid_address',
        'valid_subdistrict',
        'valid_ward_village',
        'valid_category',
        'valid_type',

        'subst_goal',
        'subst_benefit',
        'subst_timeline',
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
