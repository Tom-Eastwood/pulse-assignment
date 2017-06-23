@extends('layouts.app')

@section('content')
<h2>{{$user->last_name}}, {{$user->first_name}}</h2>

<table class="table table-striped">
    <thead> 
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr> 
    </thead> 
    <tbody>
        <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
        </tr>
    </tbody> 
</table>

<a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Update</a>

<form class="form-horizontal pull-right" role="form" method="POST" action="{{ route('users.destroy', $user->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you want to delete this user?')">
        Delete
    </button>
</form>
@endsection