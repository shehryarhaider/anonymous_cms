<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBooking extends Model
{
    protected $table = 'user_booking';

    public function client()
    {
        return $this->hasOne('App\User', 'id', 'client_id');
    }

    public function employee()
    {
        return $this->hasOne('App\UserEmployee', 'id', 'employee_id');
    }
    
}
