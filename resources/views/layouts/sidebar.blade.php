<div class="dashboard-sidebar">
    <div class="user-info">
      <div class="thumb">
        <img src="dashboard/images/user-1.jpg" class="img-fluid" alt="">
      </div>
      <div class="user-body">
      <h5>{{auth()->user()->fname ?? null}}&nbsp{{auth()->user()->lname ?? null}}</h5>
        <span>{{auth()->user()->email ?? null}}</span>
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
        <li class="{{Route::currentRouteName() == 'dashboard' ? 'active' : null}}"><i class="fas fa-home"></i><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="{{Route::currentRouteName() == 'edit-profile' ? 'active' : null}}"><i class="fas fa-user"></i><a href="{{route('edit-profile')}}">Edit Profile</a></li>
        <li class="{{Route::currentRouteName() == 'resume' ? 'active' : null}}"><i class="fas fa-file-alt"></i><a href="{{route('resume')}}">Resume</a></li>
        {{-- <li class="{{Route::currentRouteName() == 'Dashboard' ? 'active' : null}}"><i class="fas fa-heart"></i><a href="dashboard-bookmark.html">Bookmarked</a></li> --}}
        <li class="{{Route::currentRouteName() == 'work-done' ? 'active' : null}}"><i class="fas fa-check-square"></i><a href="{{route('work-done')}}">Work Done</a></li>
        {{-- <li class="{{Route::currentRouteName() == 'Dashboard' ? 'active' : null}}"><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li> --}}
        {{-- <li class="{{Route::currentRouteName() == 'Dashboard' ? 'active' : null}}"><i class="fas fa-calculator"></i><a href="dashboard-pricing.html">Pricing Plans</a></li> --}}
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
