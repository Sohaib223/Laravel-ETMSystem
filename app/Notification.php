<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $tabel ='notifications';
    protected $primarykey = 'id';
    protected $filltabel = ['Employee_Name','Title_2','Description','Status','readonly','empreadonly'];
   
}
