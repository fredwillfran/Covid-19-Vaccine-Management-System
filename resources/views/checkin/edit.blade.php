@extends('layouts.dashboard')

@section('content')
<div class="container">
<h1 class="h4">{{$citizen->firstname}} {{$citizen->lastname}}</h1>
<hr>
<form action="{{route('checkin.update',$citizen->id)}}" method="POST" class="col-md-8">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="ncd">NCD &nbsp;</label>
        <input type="checkbox" id="ncd" name="ncd">
    </div>
    <br>
    <div class="form-group">
            <label for="covid_case">Description</label>
            <textarea name="ncd_description" class="form-control"></textarea>
    </div>
    <br>
    <div class="form-group">
            <label for="covid_case">Covid case &nbsp;</label>
            <input type="checkbox" id="covid_case" name="covid_case">
    </div>
    <br>
    <div class="form-group">
            <label for="covid_case">Vaccine Effect</label>
            <textarea name="vaccine_effect" class="form-control"></textarea>
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form><br>
</div>
@endsection
