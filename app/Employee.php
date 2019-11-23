<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['empId', 'namePrefix', 'firstName', 'middleInitial', 'lastName', 'gender', 'email', 'fatherName', 'motherName', 'motherMaiden', 'dob', 'startDate', 'salary', 'ssn', 'phone', 'city', 'state', 'zip'];
}
