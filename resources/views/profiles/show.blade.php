@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <hr>
        <div class="row container">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header bg-dark text-white lead"><strong>person profile</strong></div>
                    <div class="card-body">
                        <div>
                            <strong>Firstname</strong><br>
                            <small>{{ $profile->citizen->firstname }}</small>
                        </div><br>
                        <div>
                            <strong>Lastname</strong><br>
                            <small>{{ $profile->citizen->lastname }}</small>
                        </div><br>
                        <div>
                                <strong>Email</strong><br>
                                <small>{{ $profile->citizen->email }}</small>
                            </div><br>
                        <div>
                            <strong>Phone</strong><br>
                            <small>{{ $profile->citizen->phone }}</small>
                        </div><br>
                        <div>
                            <strong>Address</strong><br>
                            <small>{{ $profile->citizen->city }} {{ $profile->citizen->district }} {{ $profile->citizen->sector }}</small>
                        </div><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                    <h6 class="text-default text-center">{{ $profile->citizen->firstname }}
                            {{ $profile->citizen->lastname }}</h6><br>
                <img class="img-fluid img-thumbnail img-profile rounded-circle"
                    src="{{ asset('img/undraw_profile.svg') }}"><br><br>
                <a href="#" class="btn btn-dark btn-sm btn-block text-white">Edit
                    profile</a>
                    <br><br>
                    <a href="{{ route('profile.download',$profile->citizen_id) }}" class="btn btn-primary btn-sm btn-block text-white">Download vaccination certificate</a>
            </div>
        </div>
    </div>
@endsection
