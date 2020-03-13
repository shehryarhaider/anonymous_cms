@extends('layouts.master')
@section('title')
    <title>TRG | Resume | Edit</title>
@endsection
@section('content')
    @section('breadcrumb')
      <li class="breadcrumb-item active" aria-current="page">Edit Resume</li>
    @endsection
    <div class="dashboard-content-wrapper">
      <div class="dashboard-applied">
        <h4 class="apply-title">{{count($work_done)}} Jobs Done</h4>
        <div class="dashboard-apply-area">
          @foreach ($work_done as $workdone)
            <div class="job-list">
              <div class="thumb">
                <a href="#">
                  <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                </a>
              </div>
              <div class="body">
                <div class="content">
                  <h4><a href="#">{{$workdone->employee->employeeCategory->category->name}}</a></h4>
                  <div class="info">
                    <span class="company"><i class="fa fa-user"></i>Client: {{$workdone->client->fname}}&nbsp;{{$workdone->client->lname}}</span>
                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                    <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>{{$workdone->created_at}}</a></span>
                  </div>
                </div>
                {{-- <div class="more">
                  <div class="buttons">
                    <a href="#" class="button">Apply Now</a>
                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                  </div>
                  <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                  <p class="deadline">Deadline: Oct 31, 2018</p>
                </div> --}}
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    @endsection
