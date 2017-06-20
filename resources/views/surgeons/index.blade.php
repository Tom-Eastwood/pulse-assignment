@extends('layouts.app')

@section('content')
<h2>Surgeons <a href="{{ route('surgeons.create') }}" class="btn btn-success pull-right">Add Surgeon</a></h2>

<table class="table table-striped">
    <thead> 
        <tr>
            <th>Name</th>
        </tr> 
    </thead> 
    <tbody>
    @foreach($surgeons as $surgeon)
        <tr>
            <td><a href="{{ route('surgeons.show', $surgeon->id) }}">{{$surgeon->last_name}}, {{$surgeon->first_name}}</a></td>
        </tr>
    @endforeach
    </tbody> 
</table>
@endsection