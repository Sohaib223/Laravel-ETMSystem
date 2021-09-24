<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allowances extends Model
{   protected $table ='Allowances';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $filltabel = ['eid','allowance','aprice','deductions','dprice','month','year','salary'];
}
