<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Climbers extends Model
{
    protected $fillable = ['phone_number','first_name', 'last_name','email','age','gender','status','citizenship','address','password','type'];
}
