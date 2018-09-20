@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <div class="title m-b-md">
        top secret admin page
    </div>
    @foreach($users as $user)
        <p>
            <span>{{$user->name}}</span>
            @if ($user->admin) 
                <span>is admin</span>
            @else
                <span>is pleb</span>
            @endif
        </p>
    @endforeach
@endsection