@extends('layouts.master')
@section('title')
    <title>TRG | Edit-Profile</title>
@endsection
@section('content')
    @section('breadcrumb')
    <!-- Breadcrumb -->
    <li class="breadcrumb-item active" aria-current="page">Resume</li>
    @endsection 

    <div class="dashboard-content-wrapper">
      <div style="float:right">
        <a href="{{route('edit-resume')}}"><button class="btn btn-primary">Edit Resume</button></a>
      </div>
      <div class="download-resume dashboard-section">
        <a href="#">Download CV<i data-feather="download"></i></a>
      </div>
      <div class="skill-and-profile dashboard-section">
        <div class="skill">
          <label>Skills:</label>
          <a href="#">Design</a>
          <a href="#">Illustration</a>
          <a href="#">iOS</a>
        </div>
      </div>
      <div class="about-details details-section dashboard-section">
        <h4><i data-feather="align-left"></i>About Me</h4>
        <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including.</p>
        <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable </p>
        <div class="information-and-contact">
          <div class="information">
            <h4>Information</h4>
            <ul>
              <li><span>Category:</span> Design & Creative</li>
              <li><span>Location:</span> Los Angeles</li>
              <li><span>Status:</span> Full-time</li>
              <li><span>Experience:</span> 3 year(s)</li>
              <li><span>Salary:</span> $32k - $36k</li>
              <li><span>Gender:</span> Male</li>
              <li><span>Age:</span> 24 Year(s)</li>
              <li><span>Qualification:</span> Gradute</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="personal-information dashboard-section last-child details-section">
        <h4><i data-feather="user-plus"></i>Personal Deatils</h4>
        <ul>
          <li><span>Full Name:</span> Micheal N. Taylor</li>
          <li><span>Father's Name:</span> Howard Armour</li>
          <li><span>Mother's Name:</span> Megan Higbee</li>
          <li><span>Date of Birth:</span> 22/08/1992</li>
          <li><span>Nationality:</span> American </li>
          <li><span>Sex:</span> Male</li>
          <li><span>Address:</span> 2018 Nelm Street, Beltsville, VA 20705</li>
        </ul>
      </div>
      <div class="edication-background details-section dashboard-section">
        <h4><i data-feather="book"></i>Education Background</h4>
        <div class="education-label">
          <span class="study-year">2018 - Present</span>
          <h5>Masters in Software Engineering<span>@ Engineering University</span></h5>
          <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
        </div>
        <div class="education-label">
          <span class="study-year">2014 - 2018</span>
          <h5>Diploma in Graphics Design<span>@ Graphic Arts Institute</span></h5>
          <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
        </div>
        <div class="education-label">
          <span class="study-year">2008 - 2014</span>
          <h5>Secondary School Certificate<span>@  Engineering High School</span></h5>
          <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
        </div>
      </div>
      <div class="experience dashboard-section details-section">
        <h4><i data-feather="briefcase"></i>Work Experiance</h4>
        <div class="experience-section">
          <span class="service-year">2016 - Present</span>
          <h5>Lead UI/UX Designer<span>@ Codepassengers LTD</span></h5>
          <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
        </div>
        <div class="experience-section">
          <span class="service-year">2012 - 2016</span>
          <h5>Former Graphic Designer<span>@ Graphicreeeo CO</span></h5>
          <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
        </div>
      </div>
      {{-- <div class="professonal-skill dashboard-section details-section">
        <h4><i data-feather="feather"></i>Professional Skill</h4>
        <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which  It has survived not only five centuries, but also the leap into electronic typesetting</p>
        <div class="progress-group">
          <div class="progress-item">
            <div class="progress-head">
              <p class="progress-on">Photoshop</p>
            </div>
            <div class="progress-body">
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
              </div>
              <p class="progress-to">70%</p>
            </div>
          </div>
          <div class="progress-item">
            <div class="progress-head">
              <p class="progress-on">HTML/CSS</p>
            </div>
            <div class="progress-body">
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
              </div>
              <p class="progress-to">90%</p>
            </div>
          </div>
          <div class="progress-item">
            <div class="progress-head">
              <p class="progress-on">JavaScript</p>
            </div>
            <div class="progress-body">
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
              </div>
              <p class="progress-to">74%</p>
            </div>
          </div>
          <div class="progress-item">
            <div class="progress-head">
              <p class="progress-on">PHP</p>
            </div>
            <div class="progress-body">
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
              </div>
              <p class="progress-to">86%</p>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="special-qualification dashboard-section details-section">
        <h4><i data-feather="gift"></i>Special Qualification</h4>
        <ul>
          <li>5 years+ experience designing and building products.</li>
          <li>Skilled at any Kind Design Tools.</li>
          <li>Passion for people-centered design, solid intuition.</li>
          <li>Hard Worker & Quick Lerner.</li>
        </ul>
      </div> --}}
      {{-- <div class="portfolio dashboard-section details-section">
        <h4><i data-feather="gift"></i>Portfolio</h4>
        <div class="portfolio-slider owl-carousel">
          <div class="portfolio-item">
            <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
            <div class="overlay">
              <a href="#"><i data-feather="eye"></i></a>
              <a href="#"><i data-feather="link"></i></a>
            </div>
          </div>
          <div class="portfolio-item">
            <img src="images/portfolio/thumb-1.jpg" class="img-fluid" alt="">
            <div class="overlay">
              <a href="#"><i data-feather="eye"></i></a>
              <a href="#"><i data-feather="link"></i></a>
            </div>
          </div>
          <div class="portfolio-item">
            <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
            <div class="overlay">
              <a href="#"><i data-feather="eye"></i></a>
              <a href="#"><i data-feather="link"></i></a>
            </div>
          </div>
          <div class="portfolio-item">
            <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
            <div class="overlay">
              <a href="#"><i data-feather="eye"></i></a>
              <a href="#"><i data-feather="link"></i></a>
            </div>
          </div>
          <div class="portfolio-item">
            <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
            <div class="overlay">
              <a href="#"><i data-feather="eye"></i></a>
              <a href="#"><i data-feather="link"></i></a>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
@endsection
   