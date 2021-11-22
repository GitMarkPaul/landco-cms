@extends('layouts.guest')

@section('content')
<!-- .breadcrumb-area -->
<section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-about.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <span class="wow fadeInLeft">Landco</span>
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Beachtowns</h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">Beachtowns</li>
            </ul>
        </div>
    </div>
</section>
    <!-- /.breadcrumb-area -->

<!-- .text-block -->
<section class="text-block pt-115 pb-115">
    <div class="container">
        <div class="row align-items-center justify-content-around wow fadeInLeft" data-wow-delay=".3s">
            <div class="col-lg-6">
                <div class="text-img text-center text-lg-left mb-small">
                    <iframe src="https://www.youtube.com/embed/zzdDcHtt-gM" title="Landco Corporate Video" style="width: 100%; height: 400px;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInRight" data-wow-delay=".5s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <h3>Conveniently close to city centers.</h3>
                    </div>
                    <p>As a subsidiary of Metro Pacific, Landco is poised to expand its place in leisure developments from high-end gated residential communities like Punta Fuego to master-planned tourism communities in Calatagan, Laiya and Samal, Davao.</p>
                    <ul class="list-check mb-4">
                        <li>Landco BeachTowns are rising over hundreds of hectares of prime real estate,</li>
                        <li>With residential communities,</li>
                        <li>Leisure Tourism Estates,</li>
                        <li>World-class hotels and serviced condominiums,</li>
                        <li>And branded resort facilities.</li>
                    </ul>
                    <p>It’s a confluence of breath taking sights with the immediacy of technology - a partnership of nature with world-class infrastructure and modernity.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->

<!-- .text-block -->
<section class="text-block with-bg pt-115 pb-115" style="background-image: url('{{ asset("assets/img/backgrounds/2.jpg") }}');">
    <div class="container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay=".3s">
                <div class="block-text mb-small">
                    <div class="section-title mb-20">
                        <h4>A feast for your eyes are beautiful promenades, inviting cocoons and lush gardens</h4>
                    </div>
                    <p>Home to trendsetters and trailblazers and a lure to investors. Inviting weekend warriors to find that second home in a beachfront community.</p>
                    <p>From big business investors who see the infinite possibilities of an integrated resort community to entrepreneurs who are dreaming the dream.</p>
                    <p>Landco Beachtowns in beautiful, historic Calatagan, Sun kissed windswept Laiya and Wonderully rustic Samal, Davao are prime residential, tourism and business hubs, where living and working are brought together in a new improved norm.</p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".5s">
                <div class="text-img text-center text-lg-left mb-small">
                    <img src="{{ asset('assets/img/about/3.jpg') }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->

<!-- .about-section -->
<section class="about-section pt-115 pb-115 bg-black mb-0">
    <div class="container">
        <div class="row align-items-center justify-content-around">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="about-img">
                    <img src="{{ asset('assets/img/about/5.jpg') }}" alt="images">
                </div>
            </div>
            <div class="col-lg-5 wow fadeInRight">
                <div class="about-text">
                    <h3>Sharing space<br />Sharing ideas<br />Sharing dreams.</h3>
                    <p>Living, Working and Thriving together in a special beach setting.</p>
                    <p>Landco BeachTowns... creating the new standard in luxury beachside living.</p>
                    <p>It’s life as it should be.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.about-section -->
@endsection