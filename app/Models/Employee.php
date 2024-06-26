<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'address', 'birth_date', 'city_id', 'state_id', 'country_id', 'department_id', 'zip_code', 'date_hired'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function  department()
    {
        return $this->belongsTo(Department::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
