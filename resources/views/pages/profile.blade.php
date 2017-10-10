
@extends('layouts.app')

@section('content')
    <div class="profile-page">
        <div class="container">
            <div class="page-heading">{{ !empty($data['user']) ? $data['user']->username . "'s Profile" : 'Create Profile'}}</div>
            <form id="user_form"  method="get" action="/updateuser">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" value="{{ !empty($data['user']) ? $data['user']->username : ''}}">
                        </div><!--/.form-group --> 
                    </div><!--/.col-sm-6 --> 
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ !empty($data['user']) ? $data['user']->name : ''}}">
                        </div><!--/.form-group -->
                    </div><!--/.col-sm-6 -->    
                </div><!--/.row -->
                <button class="black-button" type="submit">SAVE</button>
                <input type="hidden" name="id" value="{{ $id }}">
            </form>
        </div><!--/.container --></div><!--/.container -->
    </div><!--/.profile-page -->
@endsection
