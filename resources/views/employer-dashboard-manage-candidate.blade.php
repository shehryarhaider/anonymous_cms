@extends('layouts.master')
@section('content')

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Employer Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employer Dashboard</li>
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
                <div class="manage-candidate-container">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Job Title</th>
                        <th>Status</th>
                        <th class="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="candidates-list">
                        <td class="title">
                          <div class="thumb">
                            <img src="dashboard/images/user-1.jpg" class="img-fluid" alt="">
                          </div>
                          <div class="body">
                            <h5><a href="#">Lula Wallace</a></h5>
                            <div class="info">
                              <span class="designation"><a href="#"><i data-feather="check-square"></i>Senior UI / UX Designer</a></span>
                              <span class="location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            </div>
                          </div>
                        </td>
                        <td class="status"><i data-feather="check-circle"></i>Shortlisted</td>
                        <td class="action">
                          <a href="#" class="download"><i data-feather="download"></i></a>
                          <a href="#" class="inbox"><i data-feather="mail"></i></a>
                          <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      <tr class="candidates-list">
                        <td class="title">
                          <div class="thumb">
                            <img src="dashboard/images/user-2.jpg" class="img-fluid" alt="">
                          </div>
                          <div class="body">
                            <h5><a href="#">Hertha A. Sullivan</a></h5>
                            <div class="info">
                              <span class="designation"><a href="#"><i data-feather="check-square"></i>Senior UI / UX Designer</a></span>
                              <span class="location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            </div>
                          </div>
                        </td>
                        <td class="status"><i data-feather="check-circle"></i>Shortlisted</td>
                        <td class="action">
                          <a href="#" class="download"><i data-feather="download"></i></a>
                          <a href="#" class="inbox"><i data-feather="mail"></i></a>
                          <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      <tr class="candidates-list">
                        <td class="title">
                          <div class="thumb">
                            <img src="dashboard/images/user-3.jpg" class="img-fluid" alt="">
                          </div>
                          <div class="body">
                            <h5><a href="#">David Johnston</a></h5>
                            <div class="info">
                              <span class="designation"><a href="#"><i data-feather="check-square"></i>Senior UI / UX Designer</a></span>
                              <span class="location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            </div>
                          </div>
                        </td>
                        <td class="status"><i data-feather="check-circle"></i>Shortlisted</td>
                        <td class="action">
                          <a href="#" class="download"><i data-feather="download"></i></a>
                          <a href="#" class="inbox"><i data-feather="mail"></i></a>
                          <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      <tr class="candidates-list">
                        <td class="title">
                          <div class="thumb">
                            <img src="dashboard/images/user-4.jpg" class="img-fluid" alt="">
                          </div>
                          <div class="body">
                            <h5><a href="#">Robert Hayes</a></h5>
                            <div class="info">
                              <span class="designation"><a href="#"><i data-feather="check-square"></i>Senior UI / UX Designer</a></span>
                              <span class="location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            </div>
                          </div>
                        </td>
                        <td class="status"><i data-feather="check-circle"></i>Shortlisted</td>
                        <td class="action">
                          <a href="#" class="download"><i data-feather="download"></i></a>
                          <a href="#" class="inbox"><i data-feather="mail"></i></a>
                          <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="pagination-list text-center">
                    <nav class="navigation pagination">
                      <div class="nav-links">
                        <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
                        <a class="page-numbers" href="#">1</a>
                        <span aria-current="page" class="page-numbers current">2</span>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">4</a>
                        <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="dashboard-sidebar">
                <div class="company-info">
                  <div class="thumb">
                    <img src="dashboard/images/company-logo.png" class="img-fluid" alt="">
                  </div>
                  <div class="company-body">
                    <h5>Degoin</h5>
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
                    <li><i class="fas fa-home"></i><a href="employer-dashboard.html">Dashboard</a></li>
                    <li><i class="fas fa-user"></i><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                    <li><i class="fas fa-briefcase"></i><a href="employer-dashboard-manage-job.html">Manage Jobs</a></li>
                    <li class="active"><i class="fas fa-users"></i><a href="employer-dashboard-manage-candidate.html">Manage Candidates</a></li>
                    <li><i class="fas fa-heart"></i><a href="#">Shortlisted Resumes</a></li>
                    <li><i class="fas fa-plus-square"></i><a href="employer-dashboard-post-job.html">Post New Job</a></li>
                    <li><i class="fas fa-comment"></i><a href="employer-dashboard-message.html">Message</a></li>
                    <li><i class="fas fa-calculator"></i><a href="employer-dashboard-pricing.html">Pricing Plans</a></li>
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
