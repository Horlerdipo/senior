<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded=[

    ];

    protected $casts = [
        'account_info' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
