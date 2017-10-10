<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Coffee;

class CoffeeController extends Controller
{
    public function addCoffee($id) {
        $timestamp = date('Y-m-d H:i:s',time());
        $coffee = new Coffee(['created_at' => $timestamp]);
        $user = User::find($id);
        $user->coffees()->save($coffee);
        $formated_timestamp = date('n/j/y ga', strtotime($timestamp));
        return response()->json(['timestamp' => $formated_timestamp]);
    }
}
