<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiries extends Model
{
    protected $table = 'inquiries';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['bame','address','email','phoneno','title', 'description','created_at'];
}
