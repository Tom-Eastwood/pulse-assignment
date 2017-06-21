@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Welcome</div>

<div class="panel-body">    
    <div class="col-md-4">
        <a href="{{route('register')}}">Add User</a>
    </div>
    <div class="col-md-4">
        <a href="{{route('patients.index')}}">View Patients</a>
    </div>
    <div class="col-md-4">
        <a href="{{route('surgeons.index')}}">View Surgeons</a>
    </div> 
</div>
@endsection