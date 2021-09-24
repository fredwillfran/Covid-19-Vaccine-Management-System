@extends('layouts.dashboard')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('extra-script')
<script type="application/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
@endsection
@section('content')
<div class="container-fluid">
        @include('partials.message')
    <div class="col-lg-12">
        <h1 class="h4">Checkout</h1>
        <hr>
        <div>
            <table id="tableSearch" class="table table-bordered table-hover table-sm small">
                <thead>
                    <tr>
                        <th class="text-center">National Id</th>
                        <th class="text-center">Firstname</th>
                        <th class="text-center">Lastname</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($citizens as $citizen)
                        <tr>
                        <td class="text-center"><a href="{{route('checkout.edit',$citizen->id)}}">{{ $citizen->national_id }}</td>
                            <td>{{ $citizen->firstname }}</td>
                            <td>{{ $citizen->lastname }}</td>
                            <td>{{ $citizen->email }}</td>
                            <td>{{ $citizen->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th style="display: none"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
    @include('partials.dataTableScripts')
@endsection
