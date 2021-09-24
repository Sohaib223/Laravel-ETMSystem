<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class duties extends Model
{
 protected $tabel ='duties';
 protected $primarykey = 'id';
 public $timestamps = false;
 protected $filltabel = ['Employee_id','Employee_Name','Employee_PhoneNo','Client_Name','Client_Address','Task','Form','Till','created_at'];
}
