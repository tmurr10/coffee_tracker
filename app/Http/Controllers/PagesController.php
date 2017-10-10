<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    //
    public function index() {
        $data = array(
            'users' => User::all()
        );
        
        return view('pages.index')->with('data', $data)->with('id', 0);
    }

    public function profile($id) {
        $data = array(
            'user'  => User::where('id', $id)->first(),
            'users' => User::all()
        );
        
        return view('pages.profile')->with('data', $data)->with('id', $id);
    }

    public function newProfile() {
        $data = array(
            'users' => User::all()
        );
        
        return view('pages.profile')->with('data', $data)->with('id', 0);
    }

    public function coffee($id) {
        $data = array(
            'user'   => User::where('id', $id)->first(),
            'coffee' => User::find($id)->coffees,
            'users'  => User::all()
        );  
        
        return view('pages.coffee')->with('data', $data)->with('id', $id);
    }
}
