@extends('layouts.dashboard')

@section('content')
<div class="container">
<h1 class="h4">{{$citizen->firstname}} {{$citizen->lastname}}</h1>
<hr>
<form action="{{route('checkout.update',$citizen->id)}}" method="POST" class="col-md-8">
    @csrf
    @method('PATCH')
    <div class="form-group">
            <label for="covid_case">Vaccine Effect</label>
            <textarea name="vaccine_effect" class="form-control"></textarea>
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success">confirm</button>
    </div>
</form><br>
</div>
@endsection
