
@extends('layouts.app')

@section('content')
    <div class="coffee-page">
        <div class="container">
            <div class="page-heading">{{ $data['user']->username }}'s Coffee</div>
            <div class="coffee-list">
                @foreach ($data['coffee'] as $c)
                    <div class="coffee-time">-{{ date('n/j/y ga', strtotime($c->created_at)) }}</div>
                @endforeach
            </div>
            <button class="black-button" id="add_coffee">Add</button>
            <input type="hidden" id="id" value="{{ $id }}">
        </div><!--/.container --> 
    </div><!--/.coffee-page -->
@endsection
