@extends('layouts.app')

@section('content')
<h2>{{$patient->last_name}}, {{$patient->first_name}}</h2>


<table class="table table-striped">
    <thead> 
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Surgeon</th>
        </tr> 
    </thead> 
    <tbody>
        <tr>
            <td>{{$patient->first_name}}</td>
            <td>{{$patient->last_name}}</td>
            <td>{{$patient->email}}</td>
            <td>({{$patient->phone1}}) {{$patient->phone2}}-{{$patient->phone3}}</td>
            <td>{{$patient->gender}}</td>
            <td>{{$patient->age}}</td>
            <td>@if($patient->surgeon){{$patient->surgeon->last_name}}, {{$patient->surgeon->first_name}}@endif</td>
        </tr>
    </tbody> 
</table>

<a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-info">Update</a>

<form class="form-horizontal pull-right" role="form" method="POST" action="{{ route('patients.destroy', $patient->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you want to delete this patient?')">
        Delete
    </button>
</form>
@endsection