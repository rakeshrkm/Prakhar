@extends('layouts.front.master')
@section('content')

    <!-- page title start -->
    <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url('assets/img/bg/1.webp');"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="breadcrumb-inner text-center">
                            <h2 class="page-title">Career</h2>
                            <ul class="page-list">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Career</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- page title end -->

    <!-- project area start -->
    <section class="project-area pd-top-50 pd-bottom-90">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="isotope-filters project-isotope-btn text-center mb-5">    
                        <h2 class="text-center mb-5">Current openings</h2>
                    </div>
                </div>
            </div>  -->
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="isotope-filters project-isotope-btn text-center mb-5">
                        <ul class="nav nav-tabs tab-button-style mt-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Products</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Achievement</button>
                            </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="event-tab" data-bs-toggle="tab" data-bs-target="#event"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">E-Governance/Corporate</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class="content mt-4"></p>
                                <div class="list-wrap mt-4">
                                <div class="container">
                                        <div class="section-title text text-center">
                                            <h5 class="sub-title left-border">Our Products</h5>
                                            <h3>Range of our products includes, but not limited to:
                                            </h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-service-inner text-center">
                                                    <div class="icon-box-bg">
                                                        <i class="icomoon-layer"></i>
                                                    </div>
                                                    <div class="details">
                                                        <h3>Wrap My Gift</h3>
                                                        <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>
                                                    </div>
                                                    <div class="details-hover-wrap">
                                                        <div class="details-hover">
                                                        <h3>Wrap My Gift</h3>
                                                        <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>
                                                            <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-service-inner text-center">
                                                
                                                        <img src="{{ asset('assets/img/service/naukriyana1.png') }}" alt="img">
                                                    
                                                    <div class="details">
                                                        <h3>Naukriyan</h3>
                                                        <p>Naukriyan.com is our owned and one of the finest job portal that carries most of e-governance jobs from various government Departments, Ministries and public sector Units across India</p>
                                                    </div>
                                                    <div class="details-hover-wrap">
                                                        <div class="details-hover">
                                                        <h3>Naukriyan</h3>
                                                        <p>Naukriyan.com is our owned and one of the finest job portal that carries most of e-governance jobs from various government Departments, Ministries and public sector Units across India</p>
                                                            <a class="btn btn-base btn-small" href="https://naukriyan.com/" target="_blank">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-service-inner text-center">
                                                    <div class="icon-box-bg">
                                                        <i class="icomoon-layer"></i>
                                                    </div>
                                                    <div class="details">
                                                        <h3>Wrap My Gift</h3>
                                                        <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>
                                                    </div>
                                                    <div class="details-hover-wrap">
                                                        <div class="details-hover">
                                                        <h3>Wrap My Gift</h3>
                                                        <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>
                                                            <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-service-inner text-center">
                                                    <div class="icon-box-bg">
                                                        <i class="icomoon-layer"></i>
                                                    </div>
                                                    <div class="details">
                                                        <h3>Wrap My Gift</h3>
                                                        <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>
                                                    </div>
                                                    <div class="details-hover-wrap">
                                                        <div class="details-hover">
                                                        <h3>Wrap My Gift</h3>
                                                        <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>
                                                            <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-service-inner text-center">
                                                    <div class="icon-box-bg">
                                                        <i class="icomoon-layer"></i>
                                                    </div>
                                                    <div class="details">
                                                        <h3>Wrap My Gift</h3>
                                                        <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>
                                                    </div>
                                                    <div class="details-hover-wrap">
                                                        <div class="details-hover">
                                                        <h3>Wrap My Gift</h3>
                                                        <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>
                                                            <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <p class="content mt-4"></p>
                                <div class="list-wrap mt-4">
                                    <section class="counters2 counters visible">
                                        <div class="container pt-4 mt-2">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="section-title text-cener">
                                                        <h5 class="sub-title left-border">Our Achievements</h5>
                                                        <h2>We thank you for giving us chance to present the following facts about our achievements:</h2>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="text">
                                                        <p class="pt-3">Our growth has taken place very rapidly in each and every field where we started to work. At the moment when our business was just an idea, we kept a clear approach to stay transparent, trustworthy and tenacious to achieve more.
                                                            We started delivering the best services just after taking the first step. Today we have business spread all over India with not only the corporate clients, but also with various state/union government undertaking departments,
                                                            Public Sector Units (PSU) and ministries. With our trend setting approach towards our fundamental scope of work, we have acquired sufficient and of course the relevant space in the industry. Due to which we are proud to have:
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <img src="{{ asset('assets/images/yelling-clipart-employment-law-6.png') }}" alt="achievements" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </section>   
                                    <section class="px-5">
                                    <div class="container mb-4 ">
                                        <div class="section-title text-center">
                                            <h5 class="sub-title left-border">Prakhar Softwares Certificates</h5>
                                            <h2>Below are the latest certificates achieved by Prakhar
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center"></div>
                                </section>                          
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab">
                                <div class="list-wrap mt-4" id="career_id">
                                


                                  
                        </div>
                    </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
          
        </div>        
    </section>
    <!-- project area end -->


    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
    <!-- all plugins here -->
@section('scripts')
<script>
    //     var app = new Vue({
    //       el: '#app',
    //       data() {
    //         return {
    //             sectors: [],
    //             jobs: [],
    //             users: {},
    //             sec: []
    //         }
    //       },

    //       created() {
    //         this.getSector();
    //         this.getJobsBySectorId(1);
    //       },

    //       methods: {
    //        getSector() {
    //           let self = this;
    //           axios.get('https://naukriyan.com/getjobscategory/prakharsoftwares').then((response) => {
    //             this.sectors = response.data;
    //             $.each(response.data, function(key, value) {
    //               self.sec.push(value.job_sector);
    //             });
    //           });
    //         },

    // getJobsBySectorId(id) {
    //           axios
    //             .get("https://naukriyan.com/getjobs/prakharsoftwares", { params: { sector_id: +id } })
    //             .then((response) => {
    //                 console.log(response);
    //               this.jobs = response.data;
    //             });
    //         },

    //       }
    //     })

    $("#event-tab").click(function(){


        $.ajax({
    type: 'GET',
    url: "https://naukriyan.com/getjobs/prakharsoftwares?sector_id=1",
    success: function(response) {
        console.log(response);

        var html = ``;
        $.each(response, function(index, job) {
            var exp = '';
            if(job.job_sector_id !== 3){
                var exp = job.job_exp;
            }
            if(job.job_sector_id === 3){
                var date = 'Last Apply date';
            }
            else{
                exp = 'Experience';
            }

            if(job.main_exp==='0' && job.max_exp==='0'){
                exp = 'Fresher';
            }

            if(job.job_sector_id === 3){
                exp = job.last_apply_date;
            }else{
                exp = job.main_exp +' Yr' ;
            }
            var cardHtml =`<div class="accordion-item single-accordion-inner style-2 single-acc">
                            <h2 class="accordion-header" id="headingThree${index}">
                                <button class="accordion-button collapsed career" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree${index}" aria-expanded="false" aria-controls="collapseThree${index}">
                                    ${job.title}
                                </button>
                            </h2>
                            <div id="collapseThree${index}" class="accordion-collapse collapse career-collapse" aria-labelledby="headingThree${index}"
                                data-bs-parent="#collapseThree${index}">
                                <div class="accordion-body">
                                <table class="table table-bordered table-hover dt-responsive table-striped user-table">
                                    <thead>
                                        <tr>
                                        <th>Location</th>
                                        <td></td> 
                                        <th>Experience</th>
                                        <td>${exp}</td>
                                        </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td colspan="3">${job.description}</td>
                                    </tr>
                                    </thead>
                                </table>
                                <a href="https://naukriyan.com/#/edit-viewjobs/${job.id}" target="_blank" class="btn btn-block btn-primary ml-0">Apply for this job&nbsp; <i aria-hidden="true" class="far fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>`;
            html += cardHtml; 
        });
        $("#career_id").append(html);
    }
});

    });

    </script>

@endsection
@endsection
