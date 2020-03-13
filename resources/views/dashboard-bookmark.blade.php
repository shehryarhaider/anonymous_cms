@extends('layouts.master')
@section('content')

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Candidate Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Candidate Dashboard</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-md-6">
            <div class="breadcrumb-form">
              <form action="#">
                <input type="text" placeholder="Enter Keywords">
                <button><i data-feather="search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                <div class="dashboard-bookmarked">
                  <h4 class="bookmark-title">06 Job Bookmarked</h4>
                  <div class="bookmark-area">
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="job-details.html">Designer Required</a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                            <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
                          </div>
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31,  2020</p>
                        </div>
                      </div>
                    </div>
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images/job/company-logo-2.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="job-details.html">Project Manager</a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                            <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
                          </div>
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31,  2020</p>
                        </div>
                      </div>
                    </div>
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images/job/company-logo-8.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="job-details.html">Restaurant Team Member - Crew </a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>Geologitic</a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
                          </div>
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31,  2020</p>
                        </div>
                      </div>
                    </div>
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images/job/company-logo-9.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="job-details.html">Nutrition Advisor</a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                            <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
                          </div>
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31,  2020</p>
                        </div>
                      </div>
                    </div>
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images/job/company-logo-10.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="job-details.html">UI Designer</a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                            <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
                          </div>
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31,  2020</p>
                        </div>
                      </div>
                    </div>
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images/job/company-logo-3.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="job-details.html">Land Development Marketer</a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington, D.C.</a></span>
                            <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                          </div>
                        </div>
                        <div class="more">
                          <div class="buttons">
                            <a href="#" class="button">Apply Now</a>
                            <a href="#" class="favourite"><i data-feather="heart"></i></a>
                          </div>
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31,  2020</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dashboard-sidebar">
                <div class="user-info">
                  <div class="thumb">
                    <img src="dashboard/images/user-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="user-body">
                    <h5>Lula Wallace</h5>
                    <span>@username</span>
                  </div>
                </div>
                <div class="profile-progress">
                  <div class="progress-item">
                    <div class="progress-head">
                      <p class="progress-on">Profile</p>
                    </div>
                    <div class="progress-body">
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                      </div>
                      <p class="progress-to">70%</p>
                    </div>
                  </div>
                </div>
                <div class="dashboard-menu">
                  <ul>
                    <li><i class="fas fa-home"></i><a href="dashboard.html">Dashboard</a></li>
                    <li><i class="fas fa-user"></i><a href="dashboard-edit-profile.html">Edit Profile</a></li>
                    <li><i class="fas fa-file-alt"></i><a href="resume.html">Resume</a></li>
                    <li><i class="fas fa-edit"></i><a href="edit-resume.html">Edit Resume</a></li>
                    <li class="active"><i class="fas fa-heart"></i><a href="dashboard-bookmark.html">Bookmarked</a></li>
                    <li><i class="fas fa-check-square"></i><a href="dashboard-applied.html">Applied Job</a></li>
                    <li><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
                    <li><i class="fas fa-calculator"></i><a href="dashboard-pricing.html">Pricing Plans</a></li>
                  </ul>
                  <ul class="delete">
                    <li><i class="fas fa-power-off"></i><a href="#">Logout</a></li>
                    <li><i class="fas fa-trash-alt"></i><a href="#" data-toggle="modal" data-target="#modal-delete">Delete Profile</a></li>
                  </ul>
                  <!-- Modal -->
                  <div class="modal fade modal-delete" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <h4><i data-feather="trash-2"></i>Delete Account</h4>
                          <p>Are you sure! You want to delete your profile. This can't be undone!</p>
                          <form action="#">
                            <div class="form-group">
                              <input type="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="buttons">
                              <button class="delete-button">Save Update</button>
                              <button class="">Cancel</button>
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" checked="">
                              <label class="form-check-label">You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="call-to-action-bg padding-top-90 padding-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="call-to-action-2">
              <div class="call-to-action-content">
                <h2>For Find Your Dream Job or Candidate</h2>
                <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
              </div>
              <div class="call-to-action-button">
                <a href="add-resume.html" class="button">Add Resume</a>
                <span>Or</span>
                <a href="post-job.html" class="button">Post A Job</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Call to Action End -->
    @endsection
