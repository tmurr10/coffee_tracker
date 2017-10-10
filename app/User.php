<?php

namespace App;

//use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

//class User extends Authenticatable
class User extends Model
{
    protected $fillable = ['username', 'name'];

    public function coffees()
    {
        return $this->hasMany('App\Coffee');
    }
}
