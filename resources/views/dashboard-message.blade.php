@extends('layouts.master')
@section('content')

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Candidates Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Candidates Dashboard</li>
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
              <div class="dashboard-content-wrapper no-padding">
                <div class="dashboard-message-wrapper">
                  <div class="message-lists">
                    <form action="#" class="message-search">
                      <input type="text" placeholder="Search Friend...">
                      <button><i data-feather="search"></i></button>
                    </form>
                    <a href="#" class="message-single">
                      <div class="thumb">
                        <img src="dashboard/images/user-1.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="body">
                        <h6 class="username">Laura Cormier</h6>
                        <span class="text-number">2</span>
                      </div>
                    </a>
                    <a href="#" class="message-single">
                      <div class="thumb">
                        <img src="dashboard/images/user-2.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="body">
                        <h6 class="username">Paul Cox</h6>
                        <span class="send-time">2 min</span>
                      </div>
                    </a>
                    <a href="#" class="message-single active">
                      <div class="thumb">
                        <img src="dashboard/images/user-3.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="body">
                        <h6 class="username">Carlos Dobson</h6>
                        <span class="send-time">6 min</span>
                      </div>
                    </a>
                    <a href="#" class="message-single">
                      <div class="thumb">
                        <img src="dashboard/images/user-4.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="body">
                        <h6 class="username">Dahlia Divers</h6>
                        <span class="send-time">45 min</span>
                      </div>
                    </a>
                  </div>
                  <div class="message-box">
                    <div class="message-box-header">
                      <a href="#"><i class="fas fa-ellipsis-h"></i></a>
                      <h5>Carlos Dobson</h5>
                    </div>
                    <ul class="dashboard-conversation">
                      <li class="conversation in">
                        <div class="avater">
                          <img src="dashboard/images/avater-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="message"><span>Can we go inside? I feel like my toes are starting to go numb.</span></div>
                        <span class="send-time">2.32 am</span>
                      </li>
                      <li class="conversation out">
                        <div class="avater">
                          <img src="dashboard/images/avater-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="message"><span>Can we go inside? I feel like my toes are starting to go numb.</span></div>
                        <span class="send-time">2.32 am</span>
                      </li>
                      <li class="conversation in">
                        <div class="avater">
                          <img src="dashboard/images/avater-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="message"><span>Hi, Luke! How are you? Can you please stop</span></div>
                        <span class="send-time">2.34 am</span>
                      </li>
                      <li class="conversation out">
                        <div class="avater">
                          <img src="dashboard/images/avater-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="message"><span>Hi, Luke! How are you? Can you please stop and pick up extra paper for the computer ?</span></div>
                        <span class="send-time">2.34 am</span>
                      </li>
                      <li class="conversation in">
                        <div class="avater">
                          <img src="dashboard/images/avater-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="message file-send">
                          <div class="images">
                            <img src="dashboard/images/avater-1.jpg" class="img-fluid" alt="">
                            <img src="dashboard/images/avater-1.jpg" class="img-fluid" alt="">
                            <img src="dashboard/images/avater-1.jpg" class="img-fluid" alt="">
                            <span class="more">+12</span>
                          </div>
                        </div>
                        <span class="send-time">2.34 am</span>
                      </li>
                    </ul>
                    <div class="conversation-write-wrap">
                      <form action="#">
                        <label class="send-file">
                          <input type="file"><i data-feather="paperclip"></i>
                        </label>
                        <label class="send-image">
                          <input type="file"><i data-feather="image"></i>
                        </label>
                        <textarea placeholder="Type a message"></textarea>
                        <a href="#" class="emoji"><i data-feather="thumbs-up"></i></a>
                        <button class="send-message"><i data-feather="send"></i></button>
                      </form>
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
                    <li><i class="fas fa-heart"></i><a href="dashboard-bookmark.html">Bookmarked</a></li>
                    <li><i class="fas fa-check-square"></i><a href="dashboard-applied.html">Applied Job</a></li>
                    <li class="active"><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
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
