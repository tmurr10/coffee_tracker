<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;
use App\Coffee;

class UserController extends Controller
{
    public function updateProfile() {
        $id = Input::get('id');
        $name = Input::get('name');
        $username = Input::get('username');

        if ($id == 0) {
            $user = new User;
        } else {
            $user = User::find($id);
        }

        $user->username = $username;
        $user->name = $name;
        $user->save();

        $data = array(
            'user'  => $user,
            'users' => User::all()
        );

        return view('pages.profile')->with('data', $data)->with('id', $user->id);
    }
}
