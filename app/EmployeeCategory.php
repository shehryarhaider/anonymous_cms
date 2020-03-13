<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeCategory extends Model
{
    protected $table = 'employee_categories';

    public function employee()
    {
        return $this->hasOne('App\UserEmployee', 'id', 'employee_id');
    }
    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

    
}
