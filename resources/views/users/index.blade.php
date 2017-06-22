@extends('layouts.app')

@section('content')
    <h2>Users <a href="{{ route('register') }}" class="btn btn-success pull-right">Add User</a></h2>

    <table class="table table-striped">
        <thead> 
            <tr>
                <th>Name</th>
            </tr> 
        </thead> 
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><a href="{{ route('users.show', $user->id) }}">{{$user->last_name}}, {{$user->first_name}}</a></td>
            </tr>
        @endforeach
        </tbody> 
    </table>
@endsection