<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalInformation extends Model
{
    use HasFactory;

    protected $guarded=[

    ];


    public function hospital(){
        $this->belongsTo(User::class);
    }
}
