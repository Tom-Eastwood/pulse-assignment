@extends('layouts.app')

@section('content')
<h2>{{$surgeon->last_name}}, {{$surgeon->first_name}}</h2>

<table class="table table-striped">
    <thead> 
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Patient List</th>
        </tr> 
    </thead> 
    <tbody>
        <tr>
            <td>{{$surgeon->first_name}}</td>
            <td>{{$surgeon->last_name}}</td>
            <td>{{$surgeon->email}}</td>
            <td>
                @foreach($surgeon->patients as $patient)
                    {{$patient->last_name}}, {{$patient->first_name}}
                    <br>
                @endforeach
            </td>
        </tr>
    </tbody> 
</table>

<a href="{{ route('surgeons.edit', $surgeon->id) }}" class="btn btn-info">Update</a>

<form class="form-horizontal pull-right" role="form" method="POST" action="{{ route('surgeons.destroy', $surgeon->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you want to delete this surgeon?')">
        Delete
    </button>
</form>
@endsection