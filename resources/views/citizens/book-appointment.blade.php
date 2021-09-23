@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Book an appointment</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('save-appointment') }}">
                        @csrf
                        <fieldset>
                           <div class="form-group">
                              <div class="col-md-8 inputGroupContainer">
                                    <small class="ml-1">National ID or Passport Number</small>
                                 <div class="input-group"><input id="national_id" type="number" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" placeholder="Enter your National ID" required autocomplete="national_id" autofocus>
                                    @error('national_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror</div>
                              </div>
                           </div>
                           <div class="form-group">
                                <div class="col-md-8 inputGroupContainer">
                                        <small class="ml-1">Names</small>
                                        <div class="row">
                                   <div class="input-group col-md-6"><input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" placeholder="Enter your First name" required autocomplete="firstname">
                                      @error('firstname')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror</div>
                                      <div class="input-group col-md-6"><input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" placeholder="Enter your Last name" required autocomplete="lastname">
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror</div>
                                    </div>
                                </div>
                             </div>
                                 <div class="form-group">
                                        <div class="col-md-8 inputGroupContainer">
                                            <small class="ml-1">Date of birth</small>
                                           <div class="input-group"><input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob">
                                              @error('dob')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror</div>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                            <div class="col-md-8 inputGroupContainer">
                                                <small class="ml-1">Phone number</small>
                                            <div class="input-group"><input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number eg: 07XXXXXXXX" required autocomplete="phone">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror</div>
                                      </div>
                                   </div>
                                   <div class="form-group">
                                        <div class="col-md-8 inputGroupContainer">
                                            <small class="ml-1">Address</small>
                                            <div class="row">
                                        <div class="input-group col-md-4">
                                            <select name="city" id="city" class="form-control">
                                                <option value="Kigali">Kigali</option>
                                                <option value="East">East</option>
                                                <option value="West">West</option>
                                                <option value="North">North</option>
                                                <option value="South">South</option>
                                            </select>
                                        </div>
                                        <div class="input-group col-md-4"><input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ old('district') }}" placeholder="Enter district" required autocomplete="district">
                                            @error('district')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror</div>
                                        <div class="input-group col-md-4"><input id="sector" type="text" class="form-control @error('sector') is-invalid @enderror" name="sector" value="{{ old('sector') }}" placeholder="Enter sector" required autocomplete="sector">
                                            @error('sector')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror</div>
                                    </div>
                                  </div>
                               </div>

                               <div class="form-group">
                                    <div class="col-md-8 inputGroupContainer">
                                          <small class="ml-1">Gender</small>
                                       <div class="input-group">
                                            <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="gender" value="male" checked>Male
                                                    </label>
                                                  </div>
                                                  <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="gender" value="female">Female
                                                    </label>
                                                  </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                        <div class="col-md-8 inputGroupContainer">
                                              <small class="ml-1">Dose</small>
                                           <div class="input-group">
                                                <div class="form-check-inline">
                                                        <label class="form-check-label">
                                                          <input type="radio" class="form-check-input" name="dose" value="1" checked>First
                                                        </label>
                                                      </div>
                                                      <div class="form-check-inline">
                                                        <label class="form-check-label">
                                                          <input type="radio" class="form-check-input" name="dose" value="2">Second
                                                        </label>
                                                      </div>
                                           </div>
                                        </div>
                                     </div>

                                     <div class="form-group">
                                            <div class="col-md-8 inputGroupContainer">
                                                <small class="ml-1">select a health center</small>
                                            <div class="input-group">
                                                    <select name="health_center" id="health_center" class="form-control">
                                                        @foreach($healthCenters as $healthCenter)
                                                            <option value="{{$healthCenter->name}}">{{$healthCenter->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                      </div>
                                   </div>

                                                 <div class="form-group">
                                                        <div class="col-md-8 inputGroupContainer">
                                                                <button type="submit" class="btn btn-primary">
                                                                        Submit
                                                                    </button>
                                                        </div>
                                                     </div>
                        </fieldset>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
