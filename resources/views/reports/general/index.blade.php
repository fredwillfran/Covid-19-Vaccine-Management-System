@extends('layouts.dashboard')

@section('content')
    <div class="col-lg-10">
        <h1 class="h5 text-center">General Daily Vaccination Report</h1><hr>
        <form action="/generalReport/citizen" method="POST" class="row">
            @csrf
            <div class="col-md-4"></div>
                <div class="input-group col-md-2">
                        <select name="dose" class="form-control">
                            <option value="1">Dose 1</option>
                            <option value="2">Dose 2</option>
                        </select>
                    </div>
            <div class="col-lg-2 align-self-center">
                <button type="submit" class="btn btn-primary btn-sm">Generate</button>
            </div>
        </form>
        <hr>
        <div class="text-center">
            @if($citizens->count() > 0)
            <p class="text-center">
                {{$citizens->count()}} people vaccinated today for dose {{session('dose')}}
            </p><br><br>
            <a class="btn btn-primary btn-sm ml-4" href="{{ URL::to('/generalReport/citizen/pdf') }}">Export to PDF</a><br><br>
            @endif
        </div>
    </div>
@endsection
