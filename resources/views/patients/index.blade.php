@extends('layouts.app')

@section('content')
<h2>Patient <a href="{{ route('patients.create') }}" class="btn btn-success pull-right">Add Patient</a></h2>

<table class="table table-striped">
    <thead> 
        <tr>
            <th>Name</th>
        </tr> 
    </thead> 
    <tbody>
        @foreach($patients as $patient)
            <tr>
                <td><a href="{{ route('patients.show', $patient->id) }}">{{$patient->last_name}}, {{$patient->first_name}}</a></td>
            </tr>
        @endforeach
    </tbody> 
</table>
@endsection