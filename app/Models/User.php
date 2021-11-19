<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use  Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','account_reference','account_info'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'account_info' => 'array',
    ];

    public function hospital()
    {
        return $this->hasOne(HospitalInformation::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function stash()
    {
        return $this->hasOne('App\Models\Stash');
    }

    public function fundings()
    {
        return $this->hasMany('App\Models\Funding');
    }

    public function requests()
    {
        return $this->hasMany('App\Models\Request');
    }

    public function sent_invoices()
    {
        return $this->hasMany('App\Models\Invoice','from');
    }

    public function received_invoices()
    {
        return $this->hasMany('App\Models\Invoice','to');
    }


    public function bill_histories()
    {
        return $this->hasMany('App\Models\BillHistory');
    }
}
