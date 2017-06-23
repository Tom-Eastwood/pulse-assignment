@extends('layouts.app')

@section('content')

<div class="row home">    
    <div class="col-md-4">
        <div class="well">
            <a href="{{route('users.index')}}"> <i class="fa fa-user fa-4x" aria-hidden="true"></i><br> Users</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="well">
            <a href="{{route('patients.index')}}"><i class="fa fa-clipboard fa-4x" aria-hidden="true"></i><br> Patients</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="well">
            <a href="{{route('surgeons.index')}}"><i class="fa fa-user-md fa-4x" aria-hidden="true"></i><br> Surgeons</a>
        </div>
    </div> 
</div>
@endsection