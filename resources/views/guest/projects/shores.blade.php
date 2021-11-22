@extends('layouts.guest')

@section('content')
<!-- .breadcrumb-area -->
<section class="breadcrumb-area" style="background-image: url(img/banners/banner-vision.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <span class="wow fadeInLeft">Explore Luxury Living</span>
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Our Projects</h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="index.html">Home</a></li>
                <li class="active">Projects</li>
            </ul>
        </div>
    </div>
</section>
<!-- /.breadcrumb-area -->

<!-- .text-block -->
<section class="room-type-section pt-115 pb-115" style="background-image: url(img/bg/01.jpg") }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class="page-title wow fadeInUp text-center">Explore Landco</h3>

                <ul class="room-filter nav nav-pills justify-content-center wow fadeInUp" id="tabs_projects"
                    role="tablist">
                    <li class="nav-item"><a class="nav-link" id="tab_1" data-toggle="pill" href="#all">All</a></li>
                    <li class="nav-item"><a class="nav-link" id="tab_2" data-toggle="pill" href="#parks">Parks</a></li>
                    <li class="nav-item"><a class="nav-link" id="tab_3" data-toggle="pill" href="#peaks">Peaks</a></li>
                    <li class="nav-item"><a class="nav-link active" id="tab_4" data-toggle="pill" href="#shores">Shores</a></li>
                    <li class="nav-item"><a class="nav-link" id="tab_5" data-toggle="pill" href="#beach">Beachtowns</a></li>
                </ul>
            </div>
        </div>
        <div class="tab-content mt-65" id="tab_content_projects">
            <!-- All -->
            <div class="tab-pane fade" id="all" role="tabpanel">
                <div class="room-items">
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/casobe/project-img.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('casobe') }}">CaSoBē</a></h4>
                                </div>
                                <a href="{{ route('casobe') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>	
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/club-laiya/featured.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('club_laiya') }}">Club Laiya</a></h4>
                                </div>
                                <a href="{{ route('club_laiya') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/costa-azalea/project-img.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('costa_azalea') }}">Costa Azalea</a></h4>
                                </div>
                                <a href="{{ route('costa_azalea') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/playa-calatagan/featured.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('playa_calatagan') }}">Playa Calatagan</a></h4>
                                </div>
                                <a href="{{ route('playa_calatagan') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/playa-laiya/featured.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('playa_laiya') }}">Playa Laiya</a></h4>
                                </div>
                                <a href="{{ route('playa_laiya') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/9.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('playa_azalea') }}">Playa Azalea</a></h4>
                                </div>
                                <a href="{{ route('playa_azalea') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/3.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('hacienda_escudero') }}">Hacienda Escudero</a></h4>
                                </div>
                                <a href="{{ route('hacienda_escudero') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/4.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('tribeca') }}">Tribeca Private Residences</a></h4>
                                </div>
                                <a href="{{ route('tribeca') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/5.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('waterwood_park') }}">Waterwood Park</a></h4>
                                </div>
                                <a href="{{ route('waterwood_park') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/6.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('courtyard') }}">The Courtyard</a></h4>
                                </div>
                                <a href="{{ route('courtyard') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/7.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('terrazas_de_punta_fuego') }}">Terrazas de Punta Fuego</a></h4>
                                </div>
                                <a href="{{ route('terrazas_de_punta_fuego') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/8.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('peninsula_de_punta_fuego') }}">Peninsula de Punta Fuego</a></h4>
                                </div>
                                <a href="{{ route('peninsula_de_punta_fuego') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/10.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('ponderosa_leisure_farms') }}">Ponderosa Leisure Farms</a></h4>
                                </div>
                                <a href="{{ route('ponderosa_leisure_farms') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/11.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('leisure_farms') }}">Leisure Farms</a></h4>
                                </div>
                                <a href="{{ route('leisure_farms') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/12.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('stonecrest') }}">Stonecrest</a></h4>
                                </div>
                                <a href="{{ route('stonecrest') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/13.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('montelago') }}">Montelago Nature Estates</a></h4>
                                </div>
                                <a href="{{ route('montelago') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/14.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('woodgrove_park') }}">Woodgrove Park</a></h4>
                                </div>
                                <a href="{{ route('woodgrove_park') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 hidden">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/15.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="#">Aquaria Waterpark</a></h4>
                                </div>
                                <a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 hidden">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/16.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="#">Crusoe Cabins</a></h4>
                                </div>
                                <a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Parks -->
            <div class="tab-pane fade" id="parks" role="tabpanel">
                <div class="room-items">
                    <div class="row">							
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/6.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('courtyard') }}">The Courtyard</a></h4>
                                </div>
                                <a href="{{ route('courtyard') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/10.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('ponderosa_leisure_farms') }}">Ponderosa Leisure Farms</a></h4>
                                </div>
                                <a href="{{ route('ponderosa_leisure_farms') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/11.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('leisure_farms') }}">Leisure Farms</a></h4>
                                </div>
                                <a href="{{ route('leisure_farms') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/5.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('waterwood_park') }}">Waterwood Park</a></h4>
                                </div>
                                <a href="{{ route('waterwood_park') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/14.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('woodgrove_park') }}">Woodgrove Park</a></h4>
                                </div>
                                <a href="{{ route('woodgrove_park') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/3.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('hacienda_escudero') }}">Hacienda Escudero</a></h4>
                                </div>
                                <a href="{{ route('hacienda_escudero') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/13.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('montelago') }}">Montelago Nature Estates</a></h4>
                                </div>
                                <a href="{{ route('montelago') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/4.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('tribeca') }}">Tribeca Private Residences</a></h4>
                                </div>
                                <a href="{{ route('tribeca') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>							
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/12.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('stonecrest') }}">Stonecrest</a></h4>
                                </div>
                                <a href="{{ route('stonecrest') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Peaks -->
            <div class="tab-pane fade" id="peaks" role="tabpanel">
                <div class="room-items">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Soon to Rise</h2>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Peaks -->
            <div class="tab-pane fade show active" id="shores" role="tabpanel">
                <div class="room-items">
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/7.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('terrazas_de_punta_fuego') }}">Terrazas de Punta Fuego</a></h4>
                                </div>
                                <a href="{{ route('terrazas_de_punta_fuego') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/8.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('peninsula_de_punta_fuego') }}">Peninsula de Punta Fuego</a></h4>
                                </div>
                                <a href="{{ route('peninsula_de_punta_fuego') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Beachtowns -->
            <div class="tab-pane fade" id="beach" role="tabpanel">
                <div class="room-items">
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/casobe/project-img.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('casobe') }}">CaSoBē</a></h4>
                                </div>
                                <a href="{{ route('casobe') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>	
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/club-laiya/featured.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('club_laiya') }}">Club Laiya</a></h4>
                                </div>
                                <a href="{{ route('club_laiya') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/costa-azalea/project-img.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('costa_azalea') }}">Costa Azalea</a></h4>
                                </div>
                                <a href="{{ route('costa_azalea') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/playa-calatagan/featured.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('playa_calatagan') }}">Playa Calatagan</a></h4>
                                </div>
                                <a href="{{ route('playa_calatagan') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/playa-laiya/featured.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('playa_laiya') }}">Playa Laiya</a></h4>
                                </div>
                                <a href="{{ route('playa_laiya') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="room-box">
                                <div class="room-bg" style="background-image: url('{{ asset("assets/img/projects/9.jpg") }}');"></div>
                                <div class="room-content">
                                    <h4><a href="{{ route('playa_azalea') }}">Playa Azalea</a></h4>
                                </div>
                                <a href="{{ route('playa_azalea') }}" class="room-link"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->
@endsection