<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'class','mobile','permanent_address', 'present_address',
     'reg_id' , 'dep_id' ,'roll' , 'father_name',

    ];
}
