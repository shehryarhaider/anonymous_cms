<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEmployee extends Model
{
    protected $table = 'user_employee';

    protected $fillable = ['user_id','cnic_no','address','dob','profession','working_exp','description','tags'];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function employeeCategory()
    {
        return $this->hasOne('App\EmployeeCategory', 'employee_id', 'id');
    }
}
