@extends('layouts.master')
@section('title')
    <title>TRG | Edit-Profile</title>
@endsection
@section('content')
    @section('breadcrumb')
      <li class="breadcrumb-item active" aria-current="page"> Edit Profile</li>
    @endsection
  <div class="dashboard-content-wrapper">
    <form action="{{route('update-profile')}}" class="dashboard-form" method="POST">
      @csrf
      <div class="dashboard-section upload-profile-photo">
        <div class="update-photo">
          <img class="image" src="{{url('')}}/uploads/{{$user->userEmployee->image ?? 'placeholder.jpg'}}" name="image" alt="profile-image">
        </div>
        <div class="file-upload">
          <input type="file" class="file-input">Change Avatar
        </div>
      </div>
      <div class="dashboard-section basic-info-input">
        <h4><i data-feather="user-check"></i>Basic Info</h4>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Full Name</label>
          <div class="col-sm-9">
            <input type="text" name="fname" class="form-control" placeholder="Full Name" value="{{$user->fname ?? null}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Last Name</label>
          <div class="col-sm-9">
            <input type="text" name="lname" class="form-control" placeholder="Last Name" value="{{$user->lname ?? null}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Email Address</label>
          <div class="col-sm-9">
            <input type="text" name="email" class="form-control" placeholder="email@example.com" value="{{$user->email ?? null}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Phone</label>
          <div class="col-sm-9">
            <input type="text" name="phone_no" class="form-control" placeholder="+55 123 4563 4643" value="{{$user->phone_no ?? null}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">DOB</label>
          <div class="col-sm-9">
            <input type="date" name="dob" class="form-control" value="{{$user->userEmployee->dob ?? null}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Address</label>
          <div class="col-sm-9">
            <input type="text" name="address" class="form-control" placeholder="Washington D.C" value="{{$user->userEmployee->address ?? null}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Profession</label>
          <div class="col-sm-9">
            <input type="text" name="profession" class="form-control" placeholder="UI & UX Designer" value="{{$user->userEmployee->profession ?? null}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">CNIC #</label>
          <div class="col-sm-9">
            <input type="number" name="cnic_no" class="form-control" placeholder="XXXX-XXXXXXXX-X" value="{{$user->userEmployee->cnic_no ?? null}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">working Experience</label>
          <div class="col-sm-9">
            <input type="text" name="working_exp" class="form-control" placeholder="2 years" value="{{$user->userEmployee->working_exp ?? null}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Searching Tags</label>
          <div class="col-sm-9">
            <input type="text" name="tags" class="form-control" placeholder="electrician,plumber,carpainter" value="{{$user->userEmployee->tags ?? null}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">About Me</label>
          <div class="col-sm-9">
          <textarea class="form-control" name="description" placeholder="Introduce Yourself">{{$user->userEmployee->description ?? null}}</textarea>
          </div>
        </div>
      </div>
      {{-- <div class="dashboard-section basic-info-input">
        <h4><i data-feather="lock"></i>Change Password</h4>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Current Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" placeholder="Current Password">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">New Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" placeholder="New Password">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Retype Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" placeholder="Retype Password">
          </div>
        </div>
      </div> --}}
      <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
          <button class="button">Save Change</button>
        </div>
      </div>
    </form>
  </div>
  @endsection
