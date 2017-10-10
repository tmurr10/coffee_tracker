<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $table = 'coffee';
    protected $fillable = ['created_at'];
    public $timestamps = false;
}
