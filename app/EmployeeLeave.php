<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeLeave extends Model
{
   protected $table = 'EmployeeLeave';
   protected $primarykey = 'id';
   public $timestamps = false;
   protected $fillable = ['empid','empname','reason','status','description','leave_from','leave_to'];

}
