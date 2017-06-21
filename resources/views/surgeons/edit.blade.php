@extends('layouts.app')

@section('content')
<h2>Edit {{$surgeon->last_name}}, {{$surgeon->first_name}}</h2>

<form class="form-horizontal" role="form" method="POST" action="{{ route('surgeons.update', $surgeon->id) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
        <label for="first_name" class="col-md-4 control-label">First Name</label>

        <div class="col-md-6">
            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $surgeon->first_name }}" required autofocus>

            @if ($errors->has('first_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
        <label for="last_name" class="col-md-4 control-label">Last Name</label>

        <div class="col-md-6">
            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $surgeon->last_name }}" required autofocus>

            @if ($errors->has('last_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">Email Address</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ $surgeon->email }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Edit {{$surgeon->last_name}}, {{$surgeon->first_name}}
            </button>
        </div>
    </div>
</form>
@endsection