@extends('layouts.front.master')
@section('content')

<style>
    .carousel .slide-image.active {
  opacity: 1;
  transition: opacity 1s ease-in;
}

.carousel .slide-image {
  opacity: 0;
  display: block;
  left: 0;
  transition: opacity 1s ease-out;
}
</style>
    <!-- banner area start -->
    <div class="banner-area banner-area-2 bg-relative" style="background-image: url('assets/img/banner/banner.png');">
        <div class="bg-overlay-gradient"></div>
        <div class="banner-bg-img" style="background-image: url('assets/img/banner/4.webp');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9">
                    <div class="banner-inner">
                        <h4 class="sub-title">{{ $data['banner']->title }}</h4>
                        <h2 class="title" style="font-size: 43px;">{{ $data['banner']->heading }}  <span>{{ $data['banner']->second_heading }}</span></h2>
                        <p class="content">{{$data['banner']->content}}</p>
                        <div class="btn-wrap">
                            <a class="btn btn-base" href="#">Get Started</a>
                            <a class="btn btn-black" href="{{ url('contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <!-- intro area start -->
    <div class="intro-area mg-top--100 bg-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-inner">
                        <div class="thumb media">
                            <div class="media-left">
                                <i class="icomoon-gear"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <h4>{{$data['banner']->first_box_heading}}</h4>
                            </div>
                        </div>
                        <div class="details">
                            <p>{{$data['banner']->first_box_content}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-inner">
                        <div class="thumb media">
                            <div class="media-left">
                                <i class="icomoon-time"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <h4>{{$data['banner']->second_box_heading}}</h4>
                            </div>
                        </div>
                        <div class="details">
                            <p>{{$data['banner']->second_box_content}}</p>
                        </div>h
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-inner">
                        <div class="thumb media">
                            <div class="media-left">
                                <i class="icomoon-money"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <h4>{{$data['banner']->third_box_heading}}</h4>
                            </div>
                        </div>
                        <div class="details">
                            <p>{{$data['banner']->third_box_content}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- intro area end -->

    <!-- about area start -->
    <div class="about-area pd-top-90 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mask-bg-wrap mask-bg-img-3">
                        <div class="thumb">
                            <!--<img src="{{ asset('assets/img/about/3.webp') }}" alt="img">-->
                             <img src="{{ asset('uploads/about/'.$data['about']->about_image ) }}" alt="img" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="section-title px-lg-5 mb-0">
                        <h5 class="sub-title left-border">{{ $data['about']->title }}</h5>
                        <h2 class="title">{{ $data['about']->heading }}</h2>
                        <p class="content-strong mt-2">{{ $data['about']->second_heading }} . </p>
                        <!--<ul class="nav nav-tabs tab-button-style mt-4" id="myTab" role="tablist">-->
                        <!--    <li class="nav-item" role="presentation">-->
                        <!--        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"-->
                        <!--            data-bs-target="#home" type="button" role="tab" aria-controls="home"-->
                        <!--            aria-selected="true">Our Misson</button>-->
                        <!--    </li>-->
                        <!--    <li class="nav-item" role="presentation">-->
                        <!--        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"-->
                        <!--            type="button" role="tab" aria-controls="profile" aria-selected="false">Our Vision</button>-->
                        <!--    </li>-->
                        <!--</ul>-->
                        <!--<div class="tab-content" id="myTabContent">-->
                        <!--    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">-->
                        <!--        <p class="content mt-4">{{ $data['about']->our_mission }}</p>-->
                        <!--        <div class="list-wrap mt-4">-->
                                    <!--<div class="row">-->
                                    <!--    <div class="col-lg-6">-->
                                    <!--        <ul class="single-list-inner">-->
                                    <!--            <li>{{ $data['about']->first_point }}</li>-->
                                    <!--            <li>{{ $data['about']->second_point }}</li>-->
                                    <!--        </ul>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-lg-6">-->
                                    <!--        <ul class="single-list-inner">-->
                                    <!--            <li>{{ $data['about']->third_point }}</li>-->
                                    <!--            <li>{{ $data['about']->fourth_point }}</li>-->
                                    <!--        </ul>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">-->
                        <!--        <p class="content mt-4">{{ $data['about']->our_vision }}</p>-->
                                
                                <!--<div class="list-wrap mt-4">-->
                                <!--    <div class="row">-->
                                <!--        <div class="col-lg-6">-->
                                <!--            {{-- <ul class="single-list-inner">-->
                                <!--                <li>{{ $data['about']-> }}</li>-->
                                <!--                <li>{{ $data['about']-> }}</li>-->
                                <!--            </ul>-->
                                <!--        </div>-->
                                <!--        <div class="col-lg-6">-->
                                <!--            <ul class="single-list-inner">-->
                                <!--                <li>{{ $data-> }}</li>-->
                                <!--                <li>{{ $data-> }}</li>-->
                                <!--            </ul> --}}-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- service area start -->
    <div class="service-area pd-top-115 pd-bottom-90" style="background-image: url('assets/img/bg/6.webp');">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 mb-4 mb-lg-0">
                        <h5 class="sub-title left-border">{{ $data['service']->first_heading }}</h5>
                        <h2 class="title">{{ $data['service']->second_heading }}</h2>
                        <p class="content mt-2">{{ $data['service']->content_second_heading }}</p>
                    </div>
                    <div class="col-xl-6 col-lg-5 align-self-center">
                        <div class="btn-wrap text-md-end">
                            <a class="btn btn-base" href="{{ route('services') }}">Discover More Service</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="icon-box-bg">
                            <i class="icomoon-layer"></i>
                        </div>
                        <div class="details">
                            <h3>{{ $data['service']->drone_tect_heading }}</h3>
                            <p>{{ $data['service']->drone_tech_content }}</p>
                        </div>
                        <div class="details-hover-wrap">
                            <div class="details-hover">
                                <h3>{{ $data['service']->drone_tect_heading }}</h3>
                                <p>{{ $data['service']->drone_tech_content }}</p>
                                <a class="btn btn-base btn-small" href="{{ url('sitdrone') }}">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="icon-box-bg">
                            <i class="icomoon-application"></i>
                        </div>
                        <div class="details">
                            <h3>{{ $data['service']->manpower_support_heading }}</h3>
                            <p>{{ $data['service']->manpower_content }}</p>
                        </div>
                        <div class="details-hover-wrap">
                            <div class="details-hover">
                                <h3>{{ $data['service']->manpower_support_heading }}</h3>
                                <p>{{ $data['service']->manpower_content }}</p>
                                <a class="btn btn-base btn-small" href="{{ url('skill-it-recruitment') }}">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="icon-box-bg">
                            <i class="icomoon-cloud-data"></i>
                        </div>
                        <div class="details">
                              <h3>{{ $data['service']->web_app_heading }}</h3>
                              <p>{{ $data['service']->web_app_content }}</p>
                        </div>
                        <div class="details-hover-wrap">
                            <div class="details-hover">
                                <h3>{{ $data['service']->web_app_heading }}</h3>
                                <p>{{ $data['service']->web_app_content }}</p>
                                <a class="btn btn-base btn-small" href="{{ url('application-web-development') }}">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="icon-box-bg">
                            <i class="icomoon-megaphone"></i>
                        </div>
                        <div class="details">
                            <h3>{{ $data['service']->gis_based_service_head }}</h3>
                            <p>{{ $data['service']->gis_based_service_content }}</p>
                        </div>
                        <div class="details-hover-wrap">
                            <div class="details-hover">
                                 <h3>{{ $data['service']->gis_based_service_head }}</h3>
                                <p>{{ $data['service']->gis_based_service_content }}</p>
                                <a class="btn btn-base btn-small" href="{{ url('gis-remote-sensing-projects') }}">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="icon-box-bg">
                            <i class="icomoon-lock"></i>
                        </div>
                        <div class="details">
                            <h3>{{ $data['service']->system_integration_head }}</h3>
                            <p>{{ $data['service']->system_integration_content }}</p>
                        </div>
                        <div class="details-hover-wrap">
                            <div class="details-hover">
                                 <h3>{{ $data['service']->system_integration_head }}</h3>
                                <p>{{ $data['service']->system_integration_content }}</p>
                                <a class="btn btn-base btn-small" href="{{ url('system-integration-data-service') }}">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="icon-box-bg">
                            <i class="icomoon-magnifiying-glass"></i>
                        </div>
                        <div class="details">
                            <h3>{{ $data['service']->hr_outsourcing_head }}</h3>
                            <p>{{ $data['service']->hr_outsourcing_content }}</p>
                        </div>
                        <div class="details-hover-wrap">
                            <div class="details-hover">
                            <h3>{{ $data['service']->hr_outsourcing_head }}</h3>
                            <p>{{ $data['service']->hr_outsourcing_content }}</p>
                                <a class="btn btn-base btn-small" href="{{url('hr-consulting-services')}}">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- skill area start -->
    <div class="skill-area bg-relative pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-5 mb-5 mb-lg-0">
                    <div class="section-title mb-0">
                        <h5 class="sub-title left-border">{{ $data['professionalSkill']->title }} </h5>
                        <h2 class="title">{{ $data['professionalSkill']->heading }} </h2>
                        <!--<p class="content">Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet-->
                        <!--    adipiscingem neque</p>-->
                    </div>
                    <div class="skill-progress-area mt-4">
                        <div class="single-progressbar">
                            <h6>{{ $data['professionalSkill']->web_development }}</h6>
                            <div class="progress-item" id="progress-running">
                                <div class="progress-bg">
                                    <div id="progress" class="progress-rate" data-value="{{ $data['professionalSkill']->web_development_count }}">
                                    </div>
                                    <div class="progress-count-wrap">
                                        <span class="progress-count counting" data-count="{{ $data['professionalSkill']->web_development_count }}">0</span>
                                        <span class="counting-icons">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <h6>{{ $data['professionalSkill']->drone_technology }}</h6>
                            <div class="progress-item" id="progress-running-1">
                                <div class="progress-bg">
                                    <div id="progress-1" class="progress-rate" data-value="{{ $data['professionalSkill']->drone_technology_count }}">
                                    </div>
                                    <div class="progress-count-wrap">
                                        <span class="progress-count counting" data-count="{{ $data['professionalSkill']->drone_technology_count }}">0</span>
                                        <span class="counting-icons">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <h6>{{ $data['professionalSkill']->manpower_support }}</h6>
                            <div class="progress-item" id="progress-running-2">
                                <div class="progress-bg">
                                    <div id="progress-2" class="progress-rate" data-value="{{ $data['professionalSkill']->manpower_support_count }}">
                                    </div>
                                    <div class="progress-count-wrap">
                                        <span class="progress-count counting" data-count="{{ $data['professionalSkill']->manpower_support_count }}">0</span>
                                        <span class="counting-icons">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <h6>{{ $data['professionalSkill']->system_integration }}</h6>
                            <div class="progress-item mb-0" id="progress-running-3">
                                <div class="progress-bg">
                                    <div id="progress-3" class="progress-rate" data-value="{{ $data['professionalSkill']->system_integration_count }}">
                                    </div>
                                    <div class="progress-count-wrap">
                                        <span class="progress-count counting" data-count="{{ $data['professionalSkill']->system_integration_count }}">0</span>
                                        <span class="counting-icons">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- <div class="single-progressbar">-->
                        <!--    <h6>Security & Survillance </h6>-->
                        <!--    <div class="progress-item mb-0" id="progress-running-3">-->
                        <!--        <div class="progress-bg">-->
                        <!--            <div id="progress-3" class="progress-rate" data-value="74">-->
                        <!--            </div>-->
                        <!--            <div class="progress-count-wrap">-->
                        <!--                <span class="progress-count counting" data-count="74">0</span>-->
                        <!--                <span class="counting-icons">%</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="col-lg-6 px-xl-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="thumb border-radius-5 mb-4 image-hover-animate">
                                <img src="{{ asset('uploads/professional/'.$data['professionalSkill']->skill_first_image) }}" alt="img">
                            </div>
                        </div>
                        <!--<div class="col-md-6">-->
                        <!--    <div class="thumb border-radius-5 image-hover-animate mb-3 mb-md-0">-->
                        <!--        <img src="{{ asset('uploads/professional/'.$data['professionalSkill']->skill_second_image) }}" alt="img">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="thumb border-radius-5 image-hover-animate">-->
                        <!--        <img src="{{ asset('uploads/professional/'.$data['professionalSkill']->skill_third_image)  }}" alt="img">-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- skill area end -->



    <!-- counter area start -->
    <div class="counter-area bg-base pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="single-exp-inner style-white">
                        <h2><span class="counter">{{ $data['professionalExperience']->experiences_value }}</span> <sub>Y</sub></h2>
                        <h5>{{ $data['professionalExperience']->experiences_heading }}</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-exp-inner style-white">
                        <h2><span class="counter">{{ $data['professionalExperience']->happy_client_value }}</span> <sub>M</sub></h2>
                        <h5>{{ $data['professionalExperience']->happy_client_heading }}</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-exp-inner style-white">
                        <h2><span class="counter">{{ $data['professionalExperience']->project_done_value }}</span> <sub>M</sub></h2>
                        <h5>{{ $data['professionalExperience']->project_done_heading }}</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-exp-inner style-white">
                        <h2><span class="counter">{{ $data['professionalExperience']->our_service_value }}</span> <sub>M</sub></h2>
                        <h5>{{ $data['professionalExperience']->our_service_area }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->

  

    <!-- video area start -->
    <!--<div class="video-area text-center pd-top-115 pd-bottom-120"-->
    <!--    style="background-image: url('assets/img/bg/7.webp');">-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="col-lg-6 col-md-10">-->
    <!--                <div class="section-title mb-4 style-white">-->
    <!--                    <h2 class="title">Testimonials</h2>-->
    <!--                </div>-->
    <!--                <a class="video-play-btn video-play-btn-base" href="https://www.youtube.com/embed/Wimkqo8gDZ0"-->
    <!--                    data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
     <!--video area end -->

     <!-- testimonial area start -->
    
    <div class="testimonial-area pd-top-90 bg-cover bg-cover-70"
        style="background-image: url('assets/img/other/map.webp');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                   <h2 class="title text-center">Testimonials</h2>
                </div>
            </div>
        </div>
        <div class="container">
           
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9">
                    <div class="testimonial-slider-3 owl-carousel" data-slider-id="1">
                        <div>
                            <div class="single-testimonial-inner style-two text-center">
                                <!--<div class="about-mask-bg-wrap about-mask-bg-wrap-1">-->
                                    <!--<img class="shape-image-sm top_image_bounce" src="{{ asset('assets/img/about/1sm.webp') }}"-->
                                    <!--    alt="img">-->
                                    <!--<img class="shape-image" src="{{ asset('assets/img/about/1s.webp') }}" alt="img">-->
                                    <!--<div class="thumb">-->
                                    <!--    <img src="{{ asset('assets/img/team/1.webp') }}" alt="img">-->
                                    <!--</div>-->
                                <!--</div>-->
                                <div class="details">
                                    <h2>Donas julias</h2>
                                    <span>Customer,USA</span>
                                    <p>Sollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
                                        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="single-testimonial-inner style-two text-center">
                                <!--<div class="about-mask-bg-wrap about-mask-bg-wrap-1">-->
                                <!--    <img class="shape-image-sm top_image_bounce" src="{{ asset('assets/img/about/1sm.webp') }}"-->
                                <!--        alt="img">-->
                                <!--    <img class="shape-image" src="{{ asset('assets/img/about/1s.webp') }}" alt="img">-->
                                <!--    <div class="thumb">-->
                                <!--        <img src="{{ asset('assets/img/team/2.webp') }}" alt="img">-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="details">
                                    <h2>Donas julias</h2>
                                    <span>Customer,USA</span>
                                    <p>Sollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
                                        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="single-testimonial-inner style-two text-center">
                                <!--<div class="about-mask-bg-wrap about-mask-bg-wrap-1">-->
                                <!--    <img class="shape-image-sm top_image_bounce" src="{{ asset('assets/img/about/1sm.webp') }}"-->
                                <!--        alt="img">-->
                                <!--    <img class="shape-image" src="{{ asset('assets/img/about/1s.webp') }}" alt="img">-->
                                <!--    <div class="thumb">-->
                                <!--        <img src="{{ asset('assets/img/team/3.webp') }}" alt="img">-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="details">
                                    <h2>Donas julias</h2>
                                    <span>Customer,USA</span>
                                    <p>Sollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
                                        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="single-testimonial-inner style-two text-center">
                                <!--<div class="about-mask-bg-wrap about-mask-bg-wrap-1">-->
                                <!--    <img class="shape-image-sm top_image_bounce" src="{{ asset('assets/img/about/1sm.webp') }}"-->
                                <!--        alt="img">-->
                                <!--    <img class="shape-image" src="{{ asset('assets/img/about/1s.webp') }}" alt="img">-->
                                <!--    <div class="thumb">-->
                                <!--        <img src="{{ asset('assets/img/team/4.webp') }}" alt="img">-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="details">
                                    <h2>Donas julias</h2>
                                    <span>Customer,USA</span>
                                    <p>Sollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
                                        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="single-testimonial-inner style-two text-center">
                                <!--<div class="about-mask-bg-wrap about-mask-bg-wrap-1">-->
                                <!--    <img class="shape-image-sm top_image_bounce" src="{{ asset('assets/img/about/1sm.webp') }}"-->
                                <!--        alt="img">-->
                                <!--    <img class="shape-image" src="{{ asset('assets/img/about/1s.webp') }}" alt="img">-->
                                <!--    <div class="thumb">-->
                                <!--        <img src="{{ asset('assets/img/team/1.webp') }}" alt="img">-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="details">
                                    <h2>Donas julias</h2>
                                    <span>Customer,USA</span>
                                    <p>Sollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
                                        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="single-testimonial-inner style-two text-center">
                                <!--<div class="about-mask-bg-wrap about-mask-bg-wrap-1">-->
                                <!--    <img class="shape-image-sm top_image_bounce" src="{{ asset('assets/img/about/1sm.webp') }}"-->
                                <!--        alt="img">-->
                                <!--    <img class="shape-image" src="{{ asset('assets/img/about/1s.webp') }}" alt="img">-->
                                <!--    <div class="thumb">-->
                                <!--        <img src="{{ asset('assets/img/team/2.webp') }}" alt="img">-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="details">
                                    <h2>Donas julias</h2>
                                    <span>Customer,USA</span>
                                    <p>Sollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
                                        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="owl-thumbs testimonial-slider-3-thumb" data-slider-id="1">-->
            <!--    <button class="owl-thumb-item owl-thumb-item-1">-->
            <!--        <div class="about-mask-bg-wrap about-mask-bg-wrap-3">-->
            <!--            <div class="thumb">-->
            <!--                <img src="{{ asset('assets/img/team/1.webp') }}" alt="img">-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </button>-->
            <!--    <button class="owl-thumb-item owl-thumb-item-2">-->
            <!--        <div class="about-mask-bg-wrap about-mask-bg-wrap-3">-->
            <!--            <div class="thumb">-->
            <!--                <img src="{{ asset('assets/img/team/2.webp') }}" alt="img">-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </button>-->
            <!--    <button class="owl-thumb-item owl-thumb-item-3">-->
            <!--        <div class="about-mask-bg-wrap about-mask-bg-wrap-3">-->
            <!--            <div class="thumb">-->
            <!--                <img src="{{ asset('assets/img/team/3.webp') }}" alt="img">-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </button>-->
            <!--    <button class="owl-thumb-item owl-thumb-item-4">-->
            <!--        <div class="about-mask-bg-wrap about-mask-bg-wrap-3">-->
            <!--            <div class="thumb">-->
            <!--                <img src="{{ asset('assets/img/team/4.webp') }}" alt="img">-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </button>-->
            <!--    <button class="owl-thumb-item owl-thumb-item-5">-->
            <!--        <div class="about-mask-bg-wrap about-mask-bg-wrap-3">-->
            <!--            <div class="thumb">-->
            <!--                <img src="{{ asset('assets/img/team/1.webp') }}" alt="img">-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </button>-->
            <!--    <button class="owl-thumb-item owl-thumb-item-6">-->
            <!--        <div class="about-mask-bg-wrap about-mask-bg-wrap-3">-->
            <!--            <div class="thumb">-->
            <!--                <img src="{{ asset('assets/img/team/2.webp') }}" alt="img">-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </button>-->
            <!--</div>-->
        </div>
    </div>
    <!--  testimonial area end -->

    <!-- how it work area start -->
    <div class="how-it-work-area pd-top-100 pd-bottom-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center">
                        <h5 class="sub-title double-border">Work Process</h5>
                        <h2 class="title">How to work it</h2>
                        <p class="content">Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue
                            atpellentesque laoreet</p>
                    </div>
                </div>
            </div>
            <div class="how-it-work-inner">
                <img class="hills-line" src="assets/img/shape/1.webp" alt="img">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-inner style-three text-center">
                            <div class="count-inner">
                                <i class="icomoon-project"></i>
                            </div>
                            <div class="details-wrap">
                                <div class="details-inner">
                                    <h4>User Registration</h4>
                                    <p>Users sign up, providing necessary details to create an account. This may include personal information, contact details, and setting up login credentials.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-inner style-three text-center">
                            <div class="count-inner">
                                <i class="icomoon-analysis"></i>
                            </div>
                            <div class="details-wrap">
                                <div class="details-inner">
                                    <h4>Customization Options</h4>
                                    <p>After registration, users can customize the software according to their needs. This could involve setting preferences, choosing modules or features relevant to their tasks, and configuring settings for optimal use. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-inner style-three text-center">
                            <div class="count-inner">
                                <i class="icomoon-gear"></i>
                            </div>
                            <div class="details-wrap">
                                <div class="details-inner">
                                    <h4>Data Analysis</h4>
                                    <p>The software processes and analyses data input by the user or gathered from integrated sources. This could involve various forms of data processing, like sorting, categorizing, and applying algorithms to extract meaningful insights. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-inner style-three text-center">
                            <div class="count-inner">
                                <i class="icomoon-approval"></i>
                            </div>
                            <div class="details-wrap">
                                <div class="details-inner">
                                    <h4>Results and Reporting</h4>
                                    <p>Finally, the software presents the results of its analysis. This could be in the form of reports, dashboards, or visualizations, providing users with actionable insights, summaries, or detailed breakdowns of the data.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  

   
    <!-- how it work area end -->

 <!------gallery area start---->
	
			<div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">Gallery</h2>
                        
                        <ul class="nav nav-tabs tab-button-style mt-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Services</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Achievement</button>
                            </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="event-tab" data-bs-toggle="tab" data-bs-target="#event"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Events</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class="content mt-4"></p>
                                <div class="list-wrap mt-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('img/1.jpg?lol=lol') }}" rel="prettyPhoto[gallery1]" target="_blank"> 
                                                    <img src="img/1.jpg" width="100%" height="auto" alt="Red round shape" />
                                                </a>
                                            </div>
                                        </div>
                                         <div class="col-lg-3">
                                             <div class="shadow p-2 mb-3 bg-body rounded">
                                                 <a href="{{ asset('img/1.jpg?lol=lol') }}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="img/1.jpg" width="100%" height="auto" alt="Red round shape" />
                                                </a>  
                                            </div>
                                        </div>
                                         <div class="col-lg-3">
                                             <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('img/2.jpg')}}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="img/2.jpg" width="100%" height="auto" alt="Nice building" />
                                                </a>
                                            </div>
                                                
                                        </div>
                                         <div class="col-lg-3">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('img/2.jpg')}}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="img/2.jpg" width="100%" height="auto" alt="Nice building" />
                                                </a>
                                            </div>    
                                        </div>
                                           
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <p class="content mt-4"></p>
                                
                                <div class="list-wrap mt-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('img/1.jpg?lol=lol') }}" target="_blank" rel="prettyPhoto[gallery1]"> 
                                                <img src="img/1.jpg" width="100%" height="auto" alt="Red round shape" />
                                                </a>
                                            </div>
                                        </div>
                                         <div class="col-lg-3">
                                             <div class="shadow p-2 mb-3 bg-body rounded">
                                                 <a href="{{ asset('img/1.jpg?lol=lol') }}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="img/1.jpg" width="100%" height="auto" alt="Red round shape" />
                                                </a>  
                                            </div>
                                        </div>
                                         <div class="col-lg-3">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('img/2.jpg')}}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="img/2.jpg" width="100%" height="auto" alt="Nice building" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('img/2.jpg')}}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="img/2.jpg" width="100%" height="auto" alt="Nice building" />
                                                </a>
                                            </div>    
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab">

                                <div class="list-wrap mt-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('assets/images/events-gallery/1690373274_1.png') }}" target="_blank" rel="prettyPhoto[gallery1]"> 
                                                    <img src="{{ asset('assets/images/events-gallery/1690373274_1.png') }}" width="100%" height="200" alt="Red round shape" />
                                                </a>
                                            </div>
                                        </div>
                                         <div class="col-lg-3">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                 <a href="{{ asset('assets/images/events-gallery/1690373290_7.JPG') }}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="{{ asset('assets/images/events-gallery/1690373290_7.JPG') }}" width="100%" height="200" alt="Red round shape" />
                                                </a>    
                                            </div>
                                        </div>
                                         <div class="col-lg-3">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('assets/images/events-gallery/1690373300_2.png') }}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="{{ asset('assets/images/events-gallery/1690373300_2.png') }}" width="100%" height="200" alt="Nice building" />
                                                </a>    
                                            </div>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('assets/images/events-gallery/1690373308_3.png') }}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="{{ asset('assets/images/events-gallery/1690373308_3.png') }}" width="100%" height="200" alt="Nice building" />
                                                </a>    
                                            </div>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('assets/images/events-gallery/1690373316_4.png') }}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="{{ asset('assets/images/events-gallery/1690373316_4.png') }}" width="100%" height="200" alt="Nice building" />
                                                </a>    
                                            </div>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('assets/images/events-gallery/1690373323_5.png') }}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="{{ asset('assets/images/events-gallery/1690373323_5.png') }}" width="100%" height="200" alt="Nice building" />
                                                </a>    
                                            </div>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('assets/images/events-gallery/1690373331_6.png') }}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="{{ asset('assets/images/events-gallery/1690373331_6.png') }}" width="100%" height="200" alt="Nice building" />
                                                </a>    
                                            </div>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <div class="shadow p-2 mb-3 bg-body rounded">
                                                <a href="{{ asset('assets/images/events-gallery/1700720483_7th June template.jpg') }}" target="_blank" rel="prettyPhoto[gallery1]">
                                                    <img src="{{ asset('assets/images/events-gallery/1700720483_7th June template.jpg') }}" width="100%" height="200" alt="Nice building" />
                                                </a>    
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 text-center mt-4">
                                            <a href="{{ route('events.gallery') }}" target="_blank"><button type="button" class="btn btn-base">View More</button></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
            
        
        <!------gallery area end---->

    <!-- blog area start -->
    <div class="blog-area pd-top-85">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title text-center">
                        <h5 class="sub-title double-line">Blog Post</h5>
                        <h2 class="title">Read Our Latest Tips &Tricks</h2>
                        <p class="content">Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue
                            atpellentesque laoreet</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach( $data['blogs'] as $blog)

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner style-2">
                        <div class="thumb">
                            <img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="img"  class="w-100" height="300">
                        </div>
                        <div class="details">
                            <h4><a href="#">{{ ucwords($blog->title)  }}</a></h4>
                            <ul class="blog-meta">
                                <li><i class="far fa-user"></i> By {{ ucfirst($blog->created_by)  }}</li>
                                <li><i class="far fa-calendar-alt"></i> {{ App\Helpers\GeneralHelper::dateFormat($blog->date) }}</li>
                            </ul>
                            <p>{{  $blog->content }}</p>
                            <a class="read-more-text" href="#">Read More <i
                                    class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <div class="col-lg-12 col-md-12 text-center mt-4">
                    <a href="{{route('blog')}}" target="_blank"><button type="button" class="btn btn-base">Read More</button></a>
                </div>            
            </div>
        </div>
    </div>
    <!-- blog area end -->

   
        
        <!-- faq area start -->
    <div class="faq-area pd-top-100 pd-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-xl-5 align-self-center">
                    <div class="section-title mb-0">
                        <h5 class="sub-title left-border">Faq</h5>
                        <h2 class="title">Know more about solution</h2>
                        <p class="content">Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                            adipiscingem neque</p>
                    </div>
                    <div class="accordion mt-4" id="accordionExample">
                        <div class="accordion-item single-accordion-inner style-2">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Why we are?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                                    adipiscingem neque sed ipsum. amquam nunc
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item single-accordion-inner style-2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What we do for you?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                                    adipiscingem neque sed ipsum. amquam nunc
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item single-accordion-inner style-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    100% data security
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                                    adipiscingem neque sed ipsum. amquam nunc
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <form class="contact-form-wrap" action="https://solverwp.com/demo/html/itechie/mail.php" method="post" id="contact-form">
                        <div class="consulting-contact-form mx-lg-4">
                            <h3 class="mb-3">Free consulting </h3>
                            <div class="single-input-inner style-bg">
                                <input name="name" type="text" placeholder="Full Name">
                            </div>
                            <div class="single-input-inner style-bg">
                                <input name="email" type="text" placeholder="Email Address">
                            </div>
                            <div class="single-input-inner style-bg">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="btn-wrap pb-3">
                                <button type="submit" class="btn btn-base">Submit Now </button>
                            </div>
                        </div>
                        <p class="form-messege mb-0 mt-20 text-center"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->

    <!-- client-area area start -->
    <!--<div class="client-area-area bg-base pt-5 pb-5">-->
    <!--    <div class="container">-->
    <!--        <div class="client-slider owl-carousel">-->
    <!--            <div class="item">-->
    <!--                <div class="thumb text-center">-->
    <!--                    <img src="{{ asset('assets/img/client/5.webp') }}" alt="img">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="item">-->
    <!--                <div class="thumb text-center">-->
    <!--                    <img src="{{ asset('assets/img/client/6.webp') }}" alt="img">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="item">-->
    <!--                <div class="thumb text-center">-->
    <!--                    <img src="{{ asset('assets/img/client/7.webp') }}" alt="img">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="item">-->
    <!--                <div class="thumb text-center">-->
    <!--                    <img src="{{ asset('assets/img/client/8.webp') }}" alt="img">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="item">-->
    <!--                <div class="thumb text-center">-->
    <!--                    <img src="{{ asset('assets/img/client/5.webp') }}" alt="img">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
    <section class="container">
        <div class="section-title text-center mb-5">
            <div class="text text-center">
                <h5 class="sub-title double-line">Prakhar Softwares Client's</h5>
                <h2 class="title">Below are some of our buisness partners</h2>
            </div>
        </div>

<div id="carouselExampleDark" class="carousel carousel-dark slide mb-10" data-bs-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
           <div class="row">
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/log-122x76.png') }}" class="d-block " alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo10.png') }}" class="d-block" alt="...">
                </div>
            </div> 
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo11.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo12.png') }}" class="d-block"  alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo13.png') }}" class="d-block"  alt="...">
                </div>
            </div>
            
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo14.png') }}" class="d-block" alt="...">
                </div>
            </div>
        </div>
    </div>m
    <div class="carousel-item" data-bs-interval="2000">
        <div class="row">
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo15.png') }}" class="d-block " alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo16.png') }}" class="d-block" alt="...">
                </div>
            </div> 
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo17.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo18.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo19.png') }}" class="d-block" alt="...">
                </div>
            </div>
            
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo2.png') }}" class="d-block" alt="...">
                </div>
            </div>
        </div>
   
    </div>
    <div class="carousel-item" data-bs-interval="2000">
       <div class="row">
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo20.png') }}" class="d-block " alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo21.png') }}" class="d-block" alt="...">
                </div>
            </div> 
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo22.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo23.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo24.png') }}" class="d-block" alt="...">
                </div>
            </div>
            
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo25.png') }}" class="d-block" alt="...">
                </div>
            </div>
        </div>
      
    </div>
     <div class="carousel-item" data-bs-interval="2000">
       <div class="row">
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo26.png') }}" class="d-block " alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo27.png') }}" class="d-block" alt="...">
                </div>
            </div> 
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo28.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo29.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo3.png') }}" class="d-block" alt="...">
                </div>
            </div>
            
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo30.png') }}" class="d-block" alt="...">
                </div>
            </div>
        </div>
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
       <div class="row">
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo31.png') }}" class="d-block " alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo32.png') }}" class="d-block" alt="...">
                </div>
            </div> 
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo33.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo34.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo35.png') }}" class="d-block" alt="...">
                </div>
            </div>
            
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo36.png') }}" class="d-block" alt="...">
                </div>
            </div>
        </div>
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
       <div class="row">
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo37.png') }}" class="d-block " alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo38.png') }}" class="d-block" alt="...">
                </div>
            </div> 
           
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo40.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo41.png') }}" class="d-block" alt="...">
                </div>
            </div>
            
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo42.png') }}" class="d-block" alt="...">
                </div>
            </div>
        </div>
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
       <div class="row">
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo43.png') }}" class="d-block " alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo44.png') }}" class="d-block" alt="...">
                </div>
            </div> 
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo45.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo46.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo47.png') }}" class="d-block" alt="...">
                </div>
            </div>
            
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo48.png') }}" class="d-block" alt="...">
                </div>
            </div>
        </div>
      
    </div>
     <div class="carousel-item" data-bs-interval="2000">
       <div class="row">
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo49.png') }}" class="d-block " alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo5.png') }}" class="d-block" alt="...">
                </div>
            </div> 
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo51.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo52.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo53.png') }}" class="d-block" alt="...">
                </div>
            </div>
            
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo54.png') }}" class="d-block"  alt="...">
                </div>
            </div>
        </div>
      
    </div>
     <div class="carousel-item" data-bs-interval="2000">
       <div class="row">
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo55.png') }}" class="d-block " alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo56.png') }}" class="d-block" alt="...">
                </div>
            </div> 
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo57.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo58.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo59.png') }}" class="d-block" alt="...">
                </div>
            </div>
            
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo6.png') }}" class="d-block" alt="...">
                </div>
            </div>
        </div>
      
    </div>
      <div class="carousel-item" data-bs-interval="2000">
       <div class="row">
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo60.png') }}" class="d-block"  alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo7.png') }}" class="d-block" alt="...">
                </div>
            </div> 
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo8.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo9.png') }}" class="d-block" alt="...">
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/logo_naukriyan.png') }}" class="d-block" alt="...">
                </div>
            </div>
            
            <div class="col-md-2 p-2">
                <div class="card">
                    <img src="{{asset('assets/images/ourclientlogo/prakhar_updated_logo.png') }}" class="d-block" alt="...">
                </div>
            </div>
        </div>
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>
    
    
    <!-- client-area area end -->
@endsection