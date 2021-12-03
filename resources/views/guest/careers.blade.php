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
@if(count($careers) > 0)
<section class="text-block with-bg pt-115 pb-115" style="background-image: url('{{ asset("assets/img/backgrounds/2.jpg") }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 wow fadeInUp">
                <h3 class="mb-5 text-center">Careers and Opportunities in Landco</h3>
            </div>
            @foreach ($careers as $key => $value)
                <div class="col-md-10 wow fadeInUp" data-wow-delay=".2s">
                    <div class="card card-career">                         
                        <div class="card-body">
                            <div class="card-title justify-content-between">
                                <h4 class="mb-2"><a href="{{ route('career_details', [$value->date_posted, $value->slug]) }}">{{ $value->title }}</a></h4>
                                <p class="mt-1"><i class="fal fa-calendar-alt mr-2"></i>{{ $value->created_at->format('M d, Y') }}</p>
                            </div>
                            <p><strong>Job Qualifications:</strong> {{ $value->excerpt }}</p>
                            <a href="{{ route('career_details', [$value->date_posted, $value->slug]) }}" class="card-link"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- /.text-block -->
@endsection