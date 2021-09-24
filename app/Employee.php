<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   protected $table = 'employee';
   protected $primarykey = 'id';
   public $timestamps = false;
   protected $fillable = ['name','email','password','cnic','phonenumber', 'dob','city', 'image', 'status'];
}
