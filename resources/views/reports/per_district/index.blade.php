@extends('layouts.dashboard')

@section('content')
    <div class="col-lg-10">
        <h1 class="h5 text-center">Vaccination Report per district</h1><hr>
        <form action="/report/citizen" method="POST" class="row">
            @csrf
            <div class="input-group col-md-2">
                    <select name="city" id="type" class="form-control">
                        <option value="Kigali">Kigali</option>
                        <option value="East">East</option>
                        <option value="West">West</option>
                        <option value="North">North</option>
                        <option value="South">South</option>
                    </select>
                </div>

                <div class="input-group col-md-2">
                        <select name="district" id="size" class="form-control">
                            <option value="Gasabo">Gasabo</option>
                            <option value="Kicukiro">Kicukiro</option>
                            <option value="Nyaru">Nyarugenge</option>
                        </select>
                </div>
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
        <div>
            <a class="btn btn-primary btn-sm" href="{{ URL::to('/report/citizen/pdf') }}">Export to PDF</a><br><br>
                <table id="tableSearch" class="table table-bordered table-hover table-sm small w-100">
                    <thead>
                        <tr>
                            <th class="text-center">Firstname</th>
                            <th class="text-center">Lastname</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">District</th>
                            <th class="text-center">Dose</th>
                            {{-- <th class="text-center">Count</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($citizens as $citizen)
                            <tr>
                                <td>{{ $citizen->firstname }}</td>
                                <td>{{ $citizen->lastname }}</td>
                                <td>{{ $citizen->email }}</td>
                                <td>{{ $citizen->phone }}</td>
                                <td>{{ $citizen->district }}</td>
                                <td>{{ $citizen->dose }}</td>
                                {{-- <td>{{ $citizen->count() }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                        </tr>
                    </tfoot>
                </table>
        </div>
    </div>
    @include('partials.dataTableScripts')
@endsection
@section('extra-script')
<script src="{{asset('js/appointment.js')}}"></script>
@endsection
