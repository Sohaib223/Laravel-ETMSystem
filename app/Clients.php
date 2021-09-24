<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
 protected $tabel ='client';
 protected $primarykey = 'id';
 public $timestamps = false;
 protected $filltabel = ['Name','Address','Phonenumber','CompanyName','Status','created_at'];

}
