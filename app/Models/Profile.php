<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'phone','gender','age','occupation','alcohol_in_take','allergy','do_you_have_family_history_of_diabetes','do_you_have_family_history_of_hypertension','previous_surgical_history','past_medical_history','last_blood_sugar_value','last_blood_pressure_value_checked','user_id'
    ];

    protected $casts = [
        'account_info' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
