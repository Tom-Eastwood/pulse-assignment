@extends('layouts.app')

@section('content')
<h2>Update Patient</h2>

<form class="form-horizontal" role="form" method="POST" action="{{ route('patients.update', $patient->id) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
        <label for="first_name" class="col-md-4 control-label">First Name</label>

        <div class="col-md-6">
            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $patient->first_name }}" required autofocus>

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
            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $patient->last_name }}" required autofocus>

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
            <input id="email" type="email" class="form-control" name="email" value="{{ $patient->email }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group @if($errors->has('phone1') || $errors->has('phone2') || $errors->has('phone3')) has-error @endif">
        <label for="phone" class="col-md-4 control-label">Phone</label>

        <div class="col-md-2">
            <input id="phone1" type="text" class="form-control" name="phone1" value="{{ $patient->phone1 }}" required>
        </div>
        <div class="col-md-2">
            <input id="phone2" type="text" class="form-control" name="phone2" value="{{ $patient->phone2 }}" required>
        </div>
        <div class="col-md-2">
            <input id="phone3" type="text" class="form-control" name="phone3" value="{{ $patient->phone3 }}" required>
        </div>
        @if ($errors->has('phone1') || $errors->has('phone2') || $errors->has('phone3') )
        <div class="col-md-6 col-md-offset-4">
            <span class="help-block">
                <strong>{{ $errors->first('phone1') }}</strong><br>
                <strong>{{ $errors->first('phone2') }}</strong><br>
                <strong>{{ $errors->first('phone3') }}</strong><br>
            </span>
        </div>
        @endif
    </div>

    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
        <label for="gender" class="col-md-4 control-label">Gender</label>

        <div class="col-md-6">
            <label class="radio-inline">
                <input type="radio" name="gender" value="Female" @if($patient->gender == "Female" ) checked  @endif> Female
            </label>

            <label class="radio-inline">
                <input type="radio" name="gender" value="Male" @if($patient->gender == "Male" ) checked  @endif> Male
            </label>

            <label class="radio-inline">
                <input type="radio" name="gender" value="Other" @if($patient->gender == "Other" ) checked  @endif> Other
            </label>

            @if ($errors->has('gender') )
                <span class="help-block">
                    <strong>{{ $errors->first('gender') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
        <label for="age" class="col-md-4 control-label">Age</label>

        <div class="col-md-6">
            <input id="age" type="text" class="form-control" name="age" value="{{ $patient->age }}" required autofocus>

            @if ($errors->has('age'))
                <span class="help-block">
                    <strong>{{ $errors->first('age') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('surgeon_id') ? ' has-error' : '' }}">
        <label for="surgeon" class="col-md-4 control-label">Surgeon</label>

        <div class="col-md-6">
            <select id="surgeon_id" name="surgeon_id">
                <option value="">-</option>
                @foreach($surgeons as $surgeon)
                    <option value="{{$surgeon->id}}" @if($patient->surgeon_id == $surgeon->id ) selected  @endif>{{$surgeon->last_name}}, {{$surgeon->first_name}}</option>
                @endforeach
            </select>

            @if ($errors->has('surgeon_id'))
                <span class="help-block">
                    <strong>The surgeon field is required</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Update Patient
            </button>
        </div>
    </div>
</form>
@endsection