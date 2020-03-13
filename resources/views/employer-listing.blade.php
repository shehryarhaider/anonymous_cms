@extends('layouts.master')
@section('content')
    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Employer Listing</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employer Listing</li>
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

    <!-- Job Listing -->
    <div class="alice-bg section-padding-bottom">
      <div class="container">
        <div class="row no-gutters">
          <div class="col">
            <div class="employer-container">
              <div class="filtered-employer-wrapper">
                <div class="employer-view-controller-wrapper">
                  <div class="employer-view-controller">
                    <div class="controller list active">
                      <i data-feather="menu"></i>
                    </div>
                    <div class="controller grid">
                      <i data-feather="grid"></i>
                    </div>
                    <div class="employer-view-filter">
                      <select class="selectpicker">
                        <option value="" selected>Most Recent</option>
                        <option value="california">Top Rated</option>
                        <option value="las-vegas">Most Popular</option>
                      </select>
                    </div>
                  </div>
                  <div class="showing-number">
                    <span>Showing 1–12 of 28 Jobs</span>
                  </div>
                </div>
                <div class="employer-filter-result">
                  <div class="employer">
                    <div class="thumb">
                      <a href="#">
                        <img src="images/employer/thumb-1.png" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="employer-details.html">Theoreo Digital LTD</a></h4>
                        <div class="info">
                          <span class="company-category"><a href="#"><i data-feather="briefcase"></i>Softwate Firm</a></span>
                          <span class="location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                        </div>
                      </div>
                      <div class="button-area">
                        <a href="#">4 Open Position</a>
                      </div>
                    </div>
                  </div>
                  <div class="employer">
                    <div class="thumb">
                      <a href="#">
                        <img src="images/employer/thumb-2.png" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="employer-details.html">Realhouse Property</a></h4>
                        <div class="info">
                          <span class="company-category"><a href="#"><i data-feather="briefcase"></i>Real Estate</a></span>
                          <span class="location"><a href="#"><i data-feather="map-pin"></i>Washington, D.C.</a></span>
                        </div>
                      </div>
                      <div class="button-area">
                        <a href="#">10 Open Positions</a>
                      </div>
                    </div>
                  </div>
                  <div class="employer">
                    <div class="thumb">
                      <a href="#">
                        <img src="images/employer/thumb-3.png" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="employer-details.html">Degoin Art Institute</a></h4>
                        <div class="info">
                          <span class="company-category"><a href="#"><i data-feather="briefcase"></i>DEsign &amp; Creative</a></span>
                          <span class="location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                        </div>
                      </div>
                      <div class="button-area">
                        <a href="#">12 Open Positions</a>
                      </div>
                    </div>
                  </div>
                  <div class="employer">
                    <div class="thumb">
                      <a href="#">
                        <img src="images/employer/thumb-4.png" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="employer-details.html">Healthyeat Company</a></h4>
                        <div class="info">
                          <span class="company-category"><a href="#"><i data-feather="briefcase"></i>Health &amp; Medicine</a></span>
                          <span class="location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                        </div>
                      </div>
                      <div class="button-area">
                        <a href="#">5 Open Positions</a>
                      </div>
                    </div>
                  </div>
                  <div class="employer">
                    <div class="thumb">
                      <a href="#">
                        <img src="images/employer/thumb-5.png" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="employer-details.html">Digoin Creative LTD</a></h4>
                        <div class="info">
                          <span class="company-category"><a href="#"><i data-feather="briefcase"></i>Real Estate</a></span>
                          <span class="location"><a href="#"><i data-feather="map-pin"></i>Los Angeles</a></span>
                        </div>
                      </div>
                      <div class="button-area">
                        <a href="#">3 Open Positions</a>
                      </div>
                    </div>
                  </div>
                  <div class="employer">
                    <div class="thumb">
                      <a href="#">
                        <img src="images/employer/thumb-6.png" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="employer-details.html">Homolant Real Estate</a></h4>
                        <div class="info">
                          <span class="company-category"><a href="#"><i data-feather="briefcase"></i>Real Estate</a></span>
                          <span class="location"><a href="#"><i data-feather="map-pin"></i>Seattle</a></span>
                        </div>
                      </div>
                      <div class="button-area">
                        <a href="#">6 Open Positions</a>
                      </div>
                    </div>
                  </div>
                  <div class="employer">
                    <div class="thumb">
                      <a href="#">
                        <img src="images/employer/thumb-7.png" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="employer-details.html">IT Care Software LTD</a></h4>
                        <div class="info">
                          <span class="company-category"><a href="#"><i data-feather="briefcase"></i>Real Estate</a></span>
                          <span class="location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                        </div>
                      </div>
                      <div class="button-area">
                        <a href="#">12 Open Positions</a>
                      </div>
                    </div>
                  </div>
                  <div class="employer">
                    <div class="thumb">
                      <a href="#">
                        <img src="images/employer/thumb-10.png" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="employer-details.html">Doitco Bank</a></h4>
                        <div class="info">
                          <span class="company-category"><a href="#"><i data-feather="briefcase"></i>Real Estate</a></span>
                          <span class="location"><a href="#"><i data-feather="map-pin"></i>Baltimore</a></span>
                        </div>
                      </div>
                      <div class="button-area">
                        <a href="#">9 Open Positions</a>
                      </div>
                    </div>
                  </div>
                  <div class="employer">
                    <div class="thumb">
                      <a href="#">
                        <img src="images/employer/thumb-8.png" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="employer-details.html">Designer Required </a></h4>
                        <div class="info">
                          <span class="company-category"><a href="#"><i data-feather="briefcase"></i>Real Estate</a></span>
                          <span class="location"><a href="#"><i data-feather="map-pin"></i>Washington, D.C.</a></span>
                        </div>
                      </div>
                      <div class="button-area">
                        <a href="#">12 Open Positions</a>
                      </div>
                    </div>
                  </div>
                  <div class="employer">
                    <div class="thumb">
                      <a href="#">
                        <img src="images/employer/thumb-9.png" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="employer-details.html">Xzone Software Company</a></h4>
                        <div class="info">
                          <span class="company-category"><a href="#"><i data-feather="briefcase"></i>Real Estate</a></span>
                          <span class="location"><a href="#"><i data-feather="map-pin"></i>Philadelphia</a></span>
                        </div>
                      </div>
                      <div class="button-area">
                        <a href="#">12 Open Positions</a>
                      </div>
                    </div>
                  </div>
                </div>
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
              <div class="employer-filter-wrapper">
                <div class="selected-options same-pad">
                  <div class="selection-title">
                    <h4>You Selected</h4>
                    <a href="#">Clear All</a>
                  </div>
                  <ul class="filtered-options">
                  </ul>
                </div>
                <div class="employer-filter-dropdown same-pad category">
                  <select class="selectpicker">
                    <option value="" selected>Category</option>
                    <option value="california">Accounting / Finance</option>
                    <option value="california">Education</option>
                    <option value="california">Design &amp; Creative</option>
                    <option value="california">Health Care</option>
                    <option value="california">Engineer &amp; Architects</option>
                    <option value="california">Marketing &amp; Sales</option>
                    <option value="california">Garments / Textile</option>
                    <option value="california">Customer Support</option>
                    <option value="california">Digital Media</option>
                    <option value="california">Telecommunication</option>
                  </select>
                </div>
                <div class="employer-filter-dropdown same-pad location">
                  <select class="selectpicker">
                    <option value="" selected>Location</option>
                    <option value="california">Chicago</option>
                    <option value="california">New York City</option>
                    <option value="california">San Francisco</option>
                    <option value="california">Washington</option>
                    <option value="california">Boston</option>
                    <option value="california">Los Angeles</option>
                    <option value="california">Seattle</option>
                    <option value="california">Las Vegas</option>
                    <option value="california">San Diego</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Job Listing End -->

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
