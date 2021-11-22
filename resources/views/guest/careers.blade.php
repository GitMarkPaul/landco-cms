@extends('layouts.guest')

@section('content')
<!-- .breadcrumb-area -->
<section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-vision.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <span class="wow fadeInLeft">Job Opportunities</span>
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Careers</h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">Careers</li>
            </ul>
        </div>
    </div>
</section>
<!-- /.breadcrumb-area -->

<!-- .text-block -->
<section class="text-block pt-115 pb-115">
    <div class="container">
        <div class="row justify-content-around wow fadeInLeft" data-wow-delay=".3s">
            <div class="col-md-5">
                <div class="text-img text-center text-lg-left mb-small">
                    <img src="{{ asset('assets/img/about/3.jpg') }}" alt="Image">
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-delay=".5s">
                <div class="block-text">
                    <h5>With imagination and a highly evolved vision translated into creative concepts and methods, Landco has consistently created innovative and original lifestyle products that revolutionize the way Filipinos live.</h5>
                    <p>Our trailblazing projects such as Peninsula de Punta Fuego, Terrazas de Punta Fuego, Leisure Farms, Ponderosa Leisure Farms, Hacienda Escudero, and the Playa Series-Playa Calatagan, Playa Laiya and Playa Azalea have radically transformed the Philippine real estate industry and created distinct leisure lifestyles.</p>
                    <p>As a result, we uplift the standards of living of our customers and the communities we serve, enhance the professional and personal growth of our employees, and maximize shareholders’ returns.</p>
                    <p>We are looking for highly trained professionals who share our core values of Excellence, Integrity, Teamwork, Loyalty, and Love of God; who possess a high level of creativity and innovation; and are passionate about delighting and enhancing the lifestyle of our customers.</p>
                    <p>If you believe that you qualify for any of the available positions below, join us and discover what leisure living truly means! Please submit your updated resumê to careers@landco.ph. We look forward to working with you!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->

<!-- .text-block -->
<section class="text-block with-bg pt-115 pb-115" style="background-image: url('{{ asset("assets/img/backgrounds/2.jpg") }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 wow fadeInUp">
                <h3 class="mb-5 text-center">Careers and Opportunities in Landco</h3>
                
                <div class="card card-career">                         
                    <div class="card-body">
                        <div class="card-title justify-content-between">
                            <h4 class="mb-2"><a href="title-transfer-specialist.html">Title Transfer Specialist</a></h4>
                            <p class="mt-1"><i class="fal fa-calendar-alt mr-2"></i>Apr 27, 2021</p>
                        </div>
                        <p><strong>Job Qualifications:</strong> Responsible in all aspects of Title Transfer Documentation and updating the status of accounts in the monitoring and submission of daily report updates to keep the Team Leader on track of the work being assigned.</p>
                        <a href="title-transfer-specialist.html" class="card-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 wow fadeInUp" data-wow-delay=".2s">
                <div class="card card-career">                         
                    <div class="card-body">
                        <div class="card-title justify-content-between">
                            <h4 class="mb-2"><a href="title-transfer-liaison.html">Title Transfer Liaison</a></h4>
                            <p class="mt-1"><i class="fal fa-calendar-alt mr-2"></i>Apr 27, 2021</p>
                        </div>
                        <p><strong>Job Qualifications:</strong> Performs liaison / fieldwork related to processing of documents in real estate such as title transfer, registration, realty tax, BIR, registry of deeds and assessor's office.</p>
                        <a href="title-transfer-liaison.html" class="card-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 wow fadeInUp">
                <div class="card card-career">                         
                    <div class="card-body">
                        <div class="card-title justify-content-between">
                            <h4 class="mb-2"><a href="filing-specialist.html">Filing Specialist</a></h4>
                            <p class="mt-1"><i class="fal fa-calendar-alt mr-2"></i>Apr 27, 2021</p>
                        </div>
                        <p><strong>Job Qualifications:</strong> To act as liaison and process requirements, transmit documents and payments such as but not limited to tax returns and business permits, to government agencies and other offices.</p>
                        <a href="filing-specialist.html" class="card-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 wow fadeInUp" data-wow-delay=".2s">
                <div class="card card-career">                         
                    <div class="card-body">
                        <div class="card-title justify-content-between">
                            <h4 class="mb-2"><a href="rpt-management-specialist.html">RPT Management Specialist</a></h4>
                            <p class="mt-1"><i class="fal fa-calendar-alt mr-2"></i>Apr 27, 2021</p>
                        </div>
                        <p><strong>Job Qualifications:</strong> Coordinates with TTG / Community Development for request of assessment, tax dec or tax clearance.</p>
                        <a href="rpt-management-specialist.html" class="card-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 wow fadeInUp">
                <div class="card card-career">                         
                    <div class="card-body">
                        <div class="card-title justify-content-between">
                            <h4 class="mb-2"><a href="treasury-specialist-project.html">Treasury Specialist (Project)</a></h4>
                            <p class="mt-1"><i class="fal fa-calendar-alt mr-2"></i>Sep 17, 2019</p>
                        </div>
                        <p><strong>Job Qualifications:</strong> Distribution of collections per project based on JV Agreement. Monitoring of collections for Projects owned solely by Landco.</p>
                        <a href="treasury-specialist-project.html" class="card-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 wow fadeInUp" data-wow-delay=".2s">
                <div class="card card-career">                         
                    <div class="card-body">
                        <div class="card-title justify-content-between">
                            <h4 class="mb-2"><a href="customer-service-specialist.html">Customer Service Specialist</a></h4>
                            <p class="mt-1"><i class="fal fa-calendar-alt mr-2"></i>Sep 17, 2019</p>
                        </div>
                        <p><strong>Job Qualifications:</strong> Assists internal and external clients regarding inquiries, requests and complaints raised across all channels (hotline, e-mail, chat, walk-in, website, social media).</p>
                        <a href="customer-service-specialist.html" class="card-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 wow fadeInUp">
                <div class="card card-career">                         
                    <div class="card-body">
                        <div class="card-title justify-content-between">
                            <h4 class="mb-2"><a href="sales-assistant.html">Sales Assistant</a></h4>
                            <p class="mt-1"><i class="fal fa-calendar-alt mr-2"></i>Sep 17, 2019</p>
                        </div>
                        <p><strong>Job Qualifications:</strong> College Graduate Preferably with related work experience Computer literate, Patient &amp; with happiness disposition, Good communication skills.</p>
                        <a href="sales-assistant.html" class="card-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 wow fadeInUp" data-wow-delay=".2s">
                <div class="card card-career">                         
                    <div class="card-body">
                        <div class="card-title justify-content-between">
                            <h4 class="mb-2"><a href="title-transfer-supervisor.html">Title Transfer Supervisor</a></h4>
                            <p class="mt-1"><i class="fal fa-calendar-alt mr-2"></i>Sep 17, 2019</p>
                        </div>
                        <p><strong>Job Qualifications:</strong> General knowledge of standard office methods and procedures, business English, spelling and arithmetic. Ability to make decisions relating to assigned operations in conformance with applicable laws and policies.</p>
                        <a href="title-transfer-supervisor.html" class="card-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 wow fadeInUp">
                <div class="card card-career">                         
                    <div class="card-body">
                        <div class="card-title justify-content-between">
                            <h4 class="mb-2"><a href="account-management-specialists.html">Account Management Specialists</a></h4>
                            <p class="mt-1"><i class="fal fa-calendar-alt mr-2"></i>Sep 17, 2019</p>
                        </div>
                        <p><strong>Job Qualifications:</strong> Processing of client’s request, research and verify accounts needed. College Graduate Good Communication Skills Fast Learner Flexible Analytic and...</p>
                        <a href="account-management-specialists.html" class="card-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 wow fadeInUp" data-wow-delay=".2s">
                <div class="card card-career">                         
                    <div class="card-body">
                        <div class="card-title justify-content-between">
                            <h4 class="mb-2"><a href="project-engineer.html">Project Engineer</a></h4>
                            <p class="mt-1"><i class="fal fa-calendar-alt mr-2"></i>Jul 17, 2019</p>
                        </div>
                        <p><strong>Job Qualifications:</strong> Conducts liaison, coordination or consultation with statutory authorities for the appropriate permit and licenses required to implement the construction of the projects.</p>
                        <a href="project-engineer.html" class="card-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->
@endsection