<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expences extends Model
{
    protected $tabel ='expences';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $filltabel = ['title','decs','amount'];
}
