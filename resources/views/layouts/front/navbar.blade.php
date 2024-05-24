<!-- search popup start-->
 <!-- <div class="td-search-popup" id="td-search-popup">
  <form action="#" class="search-form">
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Search.....">
      </div>
      <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
  </form>
</div> -->
<!-- search popup end-->
<div class="body-overlay" id="body-overlay"></div>

<!-- navbar start -->
<div class="navbar-top style-2">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 d-lg-inline-block d-none">
              <div class="logo">
                  <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="img"></a>
              </div>
          </div>
          <div class="col-lg-3 col-md-5 align-self-center">
              {{-- <div class="media">
                  <div class="media-left">
                      <i class="far fa-clock"></i>
                  </div>
                  <div class="media-body">
                      <h6>Office time</h6>
                      <p>Opening Hour 9:00am - 10:00pm</p>
                  </div>
              </div> --}}
          </div>
          <div class="col-lg-3 col-md-5 align-self-center">
              {{-- <div class="media">
                  <div class="media-left">
                      <i class="far fa-envelope"></i>
                  </div>
                  <div class="media-body">
                      <h6>Office time</h6>
                      <p>Opening Hour 9:00am - 10:00pm</p>
                  </div>
              </div> --}}
          </div>
          <div class="col-lg-3 d-lg-block d-none align-self-center">
              <div class="social-media-light text-md-end text-center">
                <a class="facebook" href="https://www.facebook.com/Prakharsoftware" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="twitter" href="https://twitter.com/Prakharsoftware" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="twitter" href="https://www.linkedin.com/company/prakhar-software/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a class="instagram" href="https://www.instagram.com/prakhar.softwares/" target="_blank"> <i class="fab fa-instagram"></i></a>
                <a class="youtube" href="https://www.youtube.com/@PrakharSoftwares" target="_blank"><i class="fab fa-youtube"></i></a>
              </div>
          </div>
      </div>
  </div>
</div> 
<nav class="navbar navbar-area navbar-area-2 navbar-expand-lg">
  <div class="container nav-container">
      <div class="responsive-mobile-menu">
          <button class="menu toggle-btn d-block d-lg-none" data-target="#Iitechie_main_menu"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-left"></span>
              <span class="icon-right"></span>
          </button>
      </div>
      <div class="logo d-inline-block d-lg-none">
          <a href="#"><img src="{{ asset('img/logo.png') }}" alt="img"></a>
      </div>
      <div class="nav-right-part nav-right-part-mobile">
          <a class="search-bar-btn" href="#">
              <i class="fa fa-search"></i>
          </a>
      </div>
      <div class="collapse navbar-collapse" id="Iitechie_main_menu">
          <ul class="navbar-nav menu-open text-lg-start">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('about') }}">About Us</a></li>
          <li class="nav-item dropdown" style="background-color: #249751;">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
      
          <ul class="dropdown-menu">
            <li class="nav-item dropend main-menu">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Drone Technology</a>
              <ul class="dropdown-menu submenu" >
                    <li><a href="{{ url('sitdrone') }}">SITC in Drone</a></li>
                      <hr class="dropdown-divider">
                    <li><a href="{{ url('antidrone') }}">Anti Drone Technology</a></li>
              </ul>
            </li>
            <li<hr class="dropdown-divider"></li>
            <li class="nav-item dropend main-menu">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Training and Development</a>
              <ul class="dropdown-menu submenu">
                    <li><a href="{{ url('skill-development-training') }}">Skill Development Training</a></li>
                    <hr class="dropdown-divider">
                    <li><a href="{{ url('corporate-trainings') }}">Corporate Trainings</a></li>
              </ul>
            </li>
            <li<hr class="dropdown-divider"></li>
            <li class="nav-item dropend main-menu">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Manpower Support</a>
              <ul class="dropdown-menu submenu">
                    <li><a  href="{{ url('skill-it-recruitment') }}">Skill It Recruitment</a></li>
                    <hr class="dropdown-divider">
                    <li><a  href="{{ url('non-it-recruitment') }}">Non It Recruitment</a></li>                    
              </ul>
            </li>
            <li<hr class="dropdown-divider"></li>
            <li class="nav-item dropend main-menu">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Procurement Support
              </a>
              <ul class="dropdown-menu submenu">
                    <li><a  href="{{ url('it-hardwares-accessories') }}">It Hardwares & Accessories</a></li>
                    <hr class="dropdown-divider">
                    <li><a  href="{{ url('licensed-softwares-solutions') }}">Licensed Softwares & Solutions</a></li>
              </ul>
            </li>
            <li<hr class="dropdown-divider"></li>
            <li class="nav-item dropend main-menu">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Professional Services
              </a>
              <ul class="dropdown-menu submenu">
                    <li><a  href="{{ url('application-web-development') }}">Application & Web Development</a></li>
                    <hr class="dropdown-divider">
                    <li><a  href="{{ url('web-based-softwares') }}">Web Based Softwares</a></li>
                    <hr class="dropdown-divider">
                    <li><a  href="{{ url('system-integration-data-service') }}">System Integration Data Service</a></li>
              </ul>
            </li>
            <li<hr class="dropdown-divider"></li>
            <li class="nav-item dropend main-menu">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">E-Governance Projects</a>
              <ul class="dropdown-menu submenu">
                    <li><a  href="{{ url('training-implementation') }}">Training & Implementation</a></li>
                    <hr class="dropdown-divider">
                    <li><a  href="{{ url('security-survillance-project-cctv') }}">Security & Survillance Project </a></li>
                    <hr class="dropdown-divider">
                    <li><a  href="{{ url('scanning-digitization-document-management-system') }}">Scanning and Digitization</a></li>
              </ul>
            </li>
            <li<hr class="dropdown-divider"></li>
            <li><a href="{{ url('gis-remote-sensing-projects') }}" class="base-sub-menu">&nbsp;&nbsp;&nbsp;&nbsp;GIS/Remote Sensing Projects</a></li>
            <li<hr class="dropdown-divider"></li>
            <li><a href="{{ url('hr-consulting-services') }}" class="base-sub-menu">&nbsp;&nbsp;&nbsp;&nbsp;HR Consulting Services</a></li>
            <li<hr class="dropdown-divider"></li>
            <li><a href="{{url('call-centre-solution')}}"class="base-sub-menu" >&nbsp;&nbsp;&nbsp;&nbsp;Call Centre Solution</a></li>
          </ul>
        </li>              
              <!-- <li class="menu-item-has-children">
                  <a href="{{ url('services') }}">Service</a>
                  <ul class="sub-menu">
                      <li><a href="{{ url('sitdrone') }}">SITC in Drone</a></li>
                      <li><a href="{{ url('antidrone') }}">Anti Drone Technology</a></li>
                      <li><a href="{{ url('skill-development-training') }}">Skill Development Training</a></li>
                      <li><a href="{{ url('corporate-trainings') }}">Corporate Trainings</a></li>
                      <li><a  href="{{ url('skill-it-recruitment') }}">Skill It Recruitment</a></li>
                      <li><a  href="{{ url('non-it-recruitment') }}">Non It Recruitment</a></li>
                      <li><a  href="{{ url('it-hardwares-accessories') }}">It Hardwares & Accessories</a></li>
                      <li><a  href="{{ url('licensed-softwares-solutions') }}">Licensed Softwares & Solutions</a></li>
                      <li><a  href="{{ url('application-web-development') }}">Application & Web Development</a></li>
                      <li><a  href="{{ url('web-based-softwares') }}">Web Based Softwares</a></li>
                      <li><a  href="{{ url('system-integration-data-service') }}">System Integration Data Service</a></li>
                      <li><a  href="{{ url('training-implementation') }}">Training & Implementation (Roll out of services)</a></li>
                      <li><a  href="{{ url('security-survillance-project-cctv') }}">Security & Survillance Project -- CCTV</a></li>
                      <li><a  href="{{ url('scanning-digitization-document-management-system') }}">Scanning and Digitization and Document management System</a></li>
                      <li><a  href="{{ url('gis-remote-sensing-projects') }}">GIS/Remote Sensing Projects</a></li>
                      <li><a  href="{{ url('hr-consulting-services') }}">HR Consulting Services</a></li>
                  </ul>
              </li> -->
              <!--<li><a href="#">Product</a></li>-->
              <!--<li><a href="#">Achivement</a></li>-->
              <li><a href="{{ url('blog') }}">Blog</a></li>
              <li><a href="{{ url('contact') }}">Contact Us</a></li>
              <li><a href="{{ url('career') }}">Career </a></li>
          </ul>
      </div>
      <!-- <div class="nav-right-part nav-right-part-desktop align-self-center">
          <a class="search-bar-btn" href="#">
              <i class="fa fa-search"></i>
          </a>
          <a class="btn btn-black" href="#">Get Started</a>
      </div> -->
  </div>
</nav>
<!-- navbar end -->