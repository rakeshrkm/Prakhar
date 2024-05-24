@extends('layouts.front.master')
@section('content')
<style>
   
    .td-service-sidebar {
        width: 300px; /* Set the width of the container */
        height: 500px; /* Set the height of the container */
      
    }
    .td-service-sidebar .widget .widget_catagory{
        position: sticky; 
        top: 20px; 
        background-color: #f1f1f1; 
        padding: 10px; 
    }
</style>
    <!-- navbar end -->

    <!-- page title start -->
    <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url('assets/img/bg/1.webp');"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">Service Details</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Anti Drone Technology</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- project details page start -->
    <div class="project-area pd-top-120 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-page-content">
                        <div class="single-blog-inner">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/service/3d-drone-flying-sunset-sea.jpg') }}" alt="img" class="w-100">
                            </div>
                            <div class="details">
                                <h2>Elevate Your Operations with Prakhar Software's Premier Drone Technology Services</h2>
                                <p>In the ever-evolving landscape of technology, Prakhar Software emerges as a leader in providing top-tier drone technology services. Our commitment to excellence in drone solutions propels industries forward, offering unparalleled efficiency, precision, and adaptability.</p>
                                <h2>Unravelling the Potential of Prakhar Best in Drone Technology</h2>
                                <p>Prakhar Software stands at the forefront of revolutionizing industries through its cutting-edge drone technology. Explore the power-packed features and benefits that set our drone services apart from the rest.</p>
                                <h2>Tailored Drone Solutions for Every Industry Need</h2>
                                <p>Prakhar Software drone technology services are meticulously crafted to cater to diverse industry requirements. From precision agriculture, infrastructure inspection, logistics, to environmental monitoring, our drones seamlessly integrate into various sectors, ensuring optimal performance and transformative results.</p>
                                <h4 class="pt-4 mb-4">Key Benefits of Choosing Our Drone Technology Services</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="media single-choose-inner">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="icomoon-gear"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>Enhanced Efficiency</h4>
                                                <p>Our drone services streamline operations, reducing time and cost.</p>
                                            </div>
                                        </div>
                                        <div class="media single-choose-inner">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="icomoon-time"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>Advanced Data Collection</h4>
                                                <p>Gather comprehensive and precise data with ease.</p>
                                            </div>
                                        </div>
                                        <div class="media single-choose-inner">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="icomoon-profile"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>Eco-Friendly</h4>
                                                <p>Reduce your carbon footprint with our sustainable technology.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media single-choose-inner">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="icomoon-team"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>Safety and Risk Reduction</h4>
                                                <p>Minimize risks in hazardous environments. </p>
                                            </div>
                                        </div>
                                        <div class="media single-choose-inner">
                                            <div class="media-left">
                                                <div class="icon">
                                                    <i class="icomoon-profile"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4>Scalability</h4>
                                                <p>Solutions tailored to fit the scale of any project.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>Why Choose Prakhar Software for Drone Technology Services?</h2>
                                <h4 class="mt-2">Innovation Redefined</h4>
                                <ul>
                                    <li>Stay ahead of the curve with our unwavering commitment to continuous research and development. </li>
                                    <li>Partner with a team dedicated to bringing you the latest advancements in drone technology.</li>
                                </ul>
                                <h4>Global Reach, Local Understanding</h4>
                                <ul>
                                    <li>Expand your operational horizons with our global outreach.</li>
                                    <li>Trust a partner who comprehends the nuances of different industries and adapts solutions to local markets.</li>
                                </ul>
                                 <h4>Community-Centric Approach</h4>
                                <ul>
                                    <li>Engage with local communities through educational initiatives highlighting the benefits and safety measures of drone technology.</li>
                                    <li>Participate in pilot programs designed in collaboration with local authorities, ensuring widespread community support.</li>
                                </ul>
                                <br/>
                                <h4>Frequently Asked Questions (FAQs)</h4>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="accordion mt-2" id="accordionExample">
                                            <div class="accordion-item single-accordion-inner style-2">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        What makes Prakhar Software's drone technology services stand out?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                       Our integration of advanced technology with customer-focused solutions makes us a leader in the field.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item single-accordion-inner style-2">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                       How can drone technology benefit my business?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        From improving operational efficiency to providing valuable data insights, drone technology can significantly enhance various aspects of your business.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item single-accordion-inner style-2">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Are your drone services eco-friendly?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Yes, our drone solutions are designed to be sustainable, aligning with environmental conservation efforts.
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="accordion-item single-accordion-inner style-2">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Can your services be tailored to specific industry needs?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Absolutely! We specialize in customizing solutions to fit the unique requirements of different industries.
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="accordion-item single-accordion-inner style-2">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                                        What safety measures are in place for your drone operations?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Safety is paramount. We adhere to stringent safety protocols and regulations to ensure secure operations.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item single-accordion-inner style-2">
                                                <h2 class="accordion-header" id="headingSix">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                        How does Prakhar Software ensure the quality of its drone services?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Quality is at the heart of our services, backed by rigorous testing, expert teams, and customer feedback.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 align-self-center mt-4 mt-lg-0">
                                        <div class="thumb image-hover-animate border-radius-5">
                                            <!--<img src="assets/img/service/01.webp" alt="img">-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="td-service-sidebar">
                        <div class="widget widget_catagory">
                            <h4 class="widget-title">Other Services</h4>                                
                            <ul class="catagory-items">
                            <li><a href="{{ url('sitdrone') }}">SITC in Drone</a></li>
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
                        </div> 
                        <div class="widget widget_archive">
                            <h4 class="widget-title">Our Related Blog</h4>                                
                            <ul class="catagory-items">
                                <li><a href="#">Blogs</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project details page end -->
    <!-- footer area start -->
    <!-- footer area end -->
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
    <!-- all plugins here -->
@endsection