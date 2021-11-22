@extends('layouts.guest')

@section('content')
<!-- .breadcrumb-area -->
<section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/privilege-club/banner.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <span class="wow fadeInLeft">Be one of the privileged few</span>
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Privilege Club</h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">Privilege Club</li>
            </ul>
        </div>
    </div>
</section>
<!-- /.breadcrumb-area -->

<!-- -->
<section class="section-privilege pt-100">
    <div class="container">
        <div class="row justify-content-around">	
            <div class="col-md-6">
                <img src="{{ asset('assets/img/privilege-club/img-privilege-7.png') }}" class="img-fluid" alt="" />
            </div>
            <div class="col-md-6">
                <div class="info-column inner-column">
                    <h1 class="mb-4">Landco Privilege Club Membership</h1>
                    <p>Landco Privilege Club is an exclusive recognition and appreciation program for our valued clients. These are Landco customers who have successfully bought &amp; completed the full purchase of identified Landco properties.</p>
                    <p>In return, we are providing our valued clients with exclusive discounts &amp; access to our different developments across the Philippines.</p>
                    <div class="accordion" id="accordion_projects">
                        <a class="mb-4 accordion-panel" type="button" data-toggle="collapse" data-target="#collapse_projects" aria-expanded="true" aria-controls="accordion_projects">
                            <h5>List of qualified Landco projects</h5>
                            <i class="fas fa-angle-down fa-2x"></i>
                        </a>
                        <div id="collapse_projects" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_projects">
                            <div class="row">
                                <ol class="list-items list-decimal col-md-6">
                                    <li>Amara</li>
                                    <li>Courtyard</li>
                                    <li>Hacienda Escudero</li>
                                    <li>Lakewood</li>
                                    <li>Leisure Farms</li>
                                    <li>Montelago</li>
                                    <li>Playa Azalea</li>
                                    <li>Playa Calatagan</li>
                                    <li>Playa Laiya</li>
                                    <li>Ponderosa</li>
                                </ol>
                                <ol class="list-items list-decimal col-md-6" start="11">
                                    <li>Ridgewood</li>
                                    <li>Stonecrest</li>
                                    <li>Terrazas de Punta Fuego</li>
                                    <li>Tribeca Private Residences</li>
                                    <li>Waterwood Park</li>
                                    <li>Woodgrove Park</li>
                                    <li>Woodridge Garden Village</li>
                                    <li>CaSoBē</li>
                                    <li>Club Laiya</li>
                                </ol>
                            </div>									
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / -->

<!-- -->
<section class="pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center wow fadeInLeft" data-wow-delay=".3s">
            <div class="col-md-12 wow fadeInRight" data-wow-delay=".5s">
                <div class="block-text">
                    <div class="section-title text-center mb-20">
                        <h2 class="mb-1">Landco Privilege Club’s Perks &amp; Benefits</h2>
                        <h5 class="mb-4">(Effective July 1, 2021)</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center wow pt-4 fadeInLeft" data-wow-delay=".3s">
            <div class="col-md-12 wow fadeInRight" data-wow-delay=".5s">
                <h4 class="mb-3 text-center">Club Accredited Projects</h4>
                <div class="row mb-5 justify-content-center privilege-club-projects">
                    <div class="col-md-5 text-center">
                        <div class="project-card">
                            <div class="project-name">
                                <img src="{{ asset('assets/img/logos/logo-casobe.png') }}" class="img-fluid privilege-club-logo" alt="CaSoBē" />
                            </div>
                            <img src="{{ asset('assets/img/privilege-club/privilege-casobe.png') }}" class="img-fluid" alt="CaSoBē" />
                        </div>
                        <h5 class="mb-2">CaSoBē</h5>
                        <h5 class="mb-5"><a href="https://www.google.com/maps/place/CaSoB%C4%93+(Calatagan+South+Beach)/@13.7945471,120.6384836,17z/data=!3m1!4b1!4m5!3m4!1s0x33bdb1f3987d3c0f:0x4418ada54662f3ff!8m2!3d13.7945471!4d120.6406723" target="_blank">Sta. Ana Calatagan, Batangas</a></h5>
                    </div>
                    <div class="col-md-5 text-center">
                        <div class="project-card">
                            <div class="project-name">
                                <img src="{{ asset('assets/img/logos/logo-club-laiya.png') }}" class="img-fluid privilege-club-logo" alt="Club Laiya" />
                            </div>
                            <img src="{{ asset('assets/img/privilege-club/privilege-club-laiya.png') }}" class="img-fluid" alt="Club Laiya" />
                        </div>
                        <h5 class="mb-2">Club Laiya</h5>
                        <h5 class="mb-5"><a href="https://www.google.com/maps/place/Club+Laiya/@13.6711455,121.3891064,17z/data=!4m9!1m2!2m1!1sclub+laiya!3m5!1s0x33bd25fbe786760d:0x9563e8cbf12b5f30!8m2!3d13.6732654!4d121.3920772!15sCgpjbHViIGxhaXlhkgENbGVpc3VyZWNlbnRyZQ" target="_blank">San Juan Laiya, Batangas</a></h5>
                    </div>
                    <div class="col-md-5 text-center">
                        <div class="project-card">
                            <div class="project-name">
                                <img src="{{ asset('assets/img/logos/logo-costa-azalea.png') }}" class="img-fluid privilege-club-logo" alt="Costa Azalea" />
                            </div>
                            <img src="{{ asset('assets/img/privilege-club/privilege-costa-azalea.png') }}" class="img-fluid" alt="Costa Azalea" />
                        </div>							
                        <h5 class="mb-2">Costa Azalea</h5>
                        <h5 class="mb-5"><a href="https://www.google.com/maps/place/Playa+Azalea/@7.0868709,125.6667759,17z/data=!3m1!4b1!4m5!3m4!1s0x32f96e622afc0d51:0x1b432e8024265b82!8m2!3d7.0868184!4d125.6689904" target="_blank">Samal Island, Davao</a></h5>
                    </div>
                    <div class="col-md-5 text-center">
                        <div class="project-card">
                            <div class="project-name">
                                <img src="{{ asset('assets/img/logos/logo-club-punta-fuego.png') }}" class="img-fluid privilege-club-logo" alt="Club Punta Fuego" />
                            </div>
                            <img src="{{ asset('assets/img/privilege-club/privilege-club-punta-fuego.png') }}" class="img-fluid" alt="Club Punta Fuego" />
                        </div>
                        <h5 class="mb-2">Club Punta Fuego (Access Only)</h5>
                        <h5 class="mb-5"><a href="https://www.google.com/maps/place/Terrazas+De+Punta+Fuego/@14.1081822,120.6221387,17z/data=!3m1!4b1!4m5!3m4!1s0x33bd916167457801:0xe079180c937a4929!8m2!3d14.108177!4d120.6243327" target="_blank">Nasugbu, Batangas</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center wow mb-5 fadeInLeft" data-wow-delay=".3s">
            <div class="col-md-11 wow fadeInRight" data-wow-delay=".5s">
                <h3 class="mb-1 text-center">Discounts on Swimming Fees &amp; Room Accommodations</h3>
                <h5 class="mb-5 text-center">Club accredited destinations</h5>
                <div class="row privilege-club-projects mb-5">	
                    <div class="col-md-12">
                        <h4 class="mb-4 text-center">CaSoBē (Sta. Ana Calatagan, Batangas)</h4>
                    </div>
                    <div class="col-md-12">
                        <section class="slider slick-projects">
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-aquaria-2.png') }}" class="img-fluid" alt="Aquaria Water Park" />
                                <h5 class="text-center mt-3 mb-5">Aquaria Water Park</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-swimming.png') }}" class="img-fluid" alt="Aquaria Water Park" />
                                <h5 class="text-center mt-3 mb-5">Aquaria Water Park</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-crusoe.png') }}" class="img-fluid" alt="Crusoe Cabins" />
                                <h5 class="text-center mt-3 mb-5">Crusoe Cabins</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-cocoons.png') }}" class="img-fluid" alt="Cocoons" />
                                <h5 class="text-center mt-3 mb-5">Cocoons</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-crusoe-2.png') }}" class="img-fluid" alt="Crusoe Cabins" />
                                <h5 class="text-center mt-3 mb-5">Crusoe Cabins</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-crusoe-3.png') }}" class="img-fluid" alt="Crusoe Cabins" />
                                <h5 class="text-center mt-3 mb-5">Crusoe Cabins</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-crusoe-4.png') }}" class="img-fluid" alt="Crusoe Cabins" />
                                <h5 class="text-center mt-3 mb-5">Crusoe Cabins</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-cocoons-4.png') }}" class="img-fluid" alt="Cocoons" />
                                <h5 class="text-center mt-3 mb-5">Cocoons</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-cocoons-5.png') }}" class="img-fluid" alt="Cocoons" />
                                <h5 class="text-center mt-3 mb-5">Cocoons</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-cocoons-6.png') }}" class="img-fluid" alt="Cocoons" />
                                <h5 class="text-center mt-3 mb-5">Cocoons</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-casobe-2.png') }}" class="img-fluid" alt="CaSoBē - Beachfront" />
                                <h5 class="text-center mt-3 mb-5">CaSoBē - Beachfront</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-casobe-3.png') }}" class="img-fluid" alt="CaSoBē - Beachfront" />
                                <h5 class="text-center mt-3 mb-5">CaSoBē - Beachfront</h5>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-striped mt-4">
                            <thead class="thead-dark">
                                <tr>
                                    <th rowspan="2"><h5 class="fc-white mb-3">Discounts available to</h5></th>
                                    <th colspan="3" class="text-center">Discount Rates from Published Rates</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Aquaria Water Park</th>
                                    <th class="text-center">Crusoe Cabins</th>
                                    <th class="text-center">Cocoons</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Calatagan Property Owner (Fully Paid property in CaSoBē / Playa Calatagan)</td>
                                    <td class="text-center">30%</td>
                                    <td class="text-center">45%</td>
                                    <td class="text-center">35%</td>
                                </tr>
                                <tr>
                                    <td>Landco Privilege Club Members</td>
                                    <td class="text-center">25%</td>
                                    <td class="text-center">35%</td>
                                    <td class="text-center">25%</td>
                                </tr>
                                <tr>
                                    <td>Amortizing clients who bought a property in Calatagan (CaSoBē / Playa Calatagan)</td>
                                    <td class="text-center">15%</td>
                                    <td class="text-center">30%</td>
                                    <td class="text-center">20%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row privilege-club-projects mb-5">	
                    <div class="col-md-12">
                        <h4 class="mb-4 text-center">Club Laiya (San Juan Laiya, Batangas)</h4>
                    </div>
                    <div class="col-md-12">
                        <section class="slider slick-projects">
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-laiya.png') }}" class="img-fluid" alt="Club Laiya - Beachfront" />
                                <h5 class="text-center mt-3 mb-5">Club Laiya - Beachfront</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-laiya-2.png') }}" class="img-fluid" alt="Club Laiya - Beachfront" />
                                <h5 class="text-center mt-3 mb-5">Club Laiya - Beachfront</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-cocoons-2.png') }}" class="img-fluid" alt="Cocoons" />
                                <h5 class="text-center mt-3 mb-5">Cocoons</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-cocoons-3.png') }}" class="img-fluid" alt="Cocoons" />
                                <h5 class="text-center mt-3 mb-5">Cocoons</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-cocoons-7.png') }}" class="img-fluid" alt="Cocoons" />
                                <h5 class="text-center mt-3 mb-5">Cocoons</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-cocoons-8.png') }}" class="img-fluid" alt="Cocoons" />
                                <h5 class="text-center mt-3 mb-5">Cocoons</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-cocoons-9.png') }}" class="img-fluid" alt="Cocoons" />
                                <h5 class="text-center mt-3 mb-5">Cocoons</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-laiya-3.png') }}" class="img-fluid" alt="Club Laiya - Beachfront" />
                                <h5 class="text-center mt-3 mb-5">Club Laiya - Beachfront</h5>
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/privilege-club/privilege-laiya-4.png') }}" class="img-fluid" alt="Club Laiya - Beachfront" />
                                <h5 class="text-center mt-3 mb-5">Club Laiya - Beachfront</h5>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-striped mt-4">
                            <thead class="thead-dark">
                                <tr>
                                    <th rowspan="2"><h5 class="fc-white mb-3">Discounts available to</h5></th>
                                    <th colspan="2" class="text-center">Discount Rates from Published Rates</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Club Laiya - Beachfront</th>
                                    <th class="text-center">Cocoons</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Laiya Property Owner (Fully paid property in Club Laiya / Playa Laiya)</td>
                                    <td class="text-center">30%</td>
                                    <td class="text-center">35%</td>
                                </tr>
                                <tr>
                                    <td>Landco Privilege Club Members </td>
                                    <td class="text-center">25%</td>
                                    <td class="text-center">25%</td>
                                </tr>
                                <tr>
                                    <td>Amortizing clients who bought a property in Laiya (Club Laiya / Playa Laiya)</td>
                                    <td class="text-center">15%</td>
                                    <td class="text-center">20%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row privilege-club-projects">	
                    <div class="col-md-12">
                        <div class="accordion" id="accordion_terms">
                            <a class="mb-4 accordion-panel" type="button" data-toggle="collapse" data-target="#collapse_terms" aria-expanded="true" aria-controls="collapse_terms">
                                <h3>Terms and Conditions</h3>
                                <i class="fas fa-angle-up fa-2x"></i>
                            </a>
                            <div id="collapse_terms" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_terms">
                                <ol class="list-items list-decimal">
                                    <li><h5 class="mb-3">Aquaria Water Park | Club Laiya - Beachfront</h5>
                                        <ol class="list-alpha">
                                            <li>
                                                <h6 class="mb-2">For Landco Privilege Club Members, Calatagan / Laiya fully paid lot owners:</h6>
                                                <ol class="list-roman">
                                                    <li>Discount rates are extended to members and accompanied guest/s up to 10 pax.</li>
                                                    <li>15% discount will apply for guests in excess of 10.</li>
                                                </ol>
                                            </li>
                                            <li>
                                                <h6 class="mb-2">For Amortizing Calatagan / Laiya lot owners:</h6>
                                                <ol class="list-roman">
                                                    <li>Extended to the members and accompanied guest/s up to 10 pax.</li>
                                                    <li>Regular rates will apply for guest/s in excess of 10 pax.</li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><h5 class="mb-3">Crusoe Cabins</h5>
                                        <ol class="list-alpha">
                                            <li><h6>Pre-booking is required, subject to room availability.</h6></li>
                                            <li><h6>Maximum of 1 room night on weekends and 3 room nights on weekdays.</h6></li>
                                            <li><h6>Regular rates will apply in excess of allowed number of cabins.</h6></li>
                                        </ol>
                                    </li>
                                    <li><h5 class="mb-3">Cocoons</h5>
                                        <ol class="list-alpha">
                                            <li><h6>Pre-booking is required, subject to room availability.</h6></li>
                                            <li><h6>Maximum of 1 room night on weekends and weekdays.</h6></li>
                                            <li><h6>Regular rates will apply in excess of allowed number of Cocoons.</h6></li>
                                        </ol>
                                    </li>
                                    <li><h5 class="mb-3">Club Punta Fuego</h5>
                                        <ol class="list-alpha">
                                            <li><h6>Pre-booking is required, and is subject for approval.</h6></li>
                                            <li><h6>Regular rates only.</h6></li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center wow pt-4 fadeInLeft" data-wow-delay=".3s">
            <div class="col-md-12 wow fadeInRight" data-wow-delay=".5s">
                <h4 class="mb-4 text-center">5% club member's discount to various concessionaires</h4>
                <div class="row mb-5 privilege-club-projects">	
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="project-name">
                                <h5>The Swing Bar</h5>
                            </div>
                            <img src="{{ asset('assets/img/privilege-club/privilege-swing-bar.png') }}" class="img-fluid" alt="Swing Bar" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="project-name">
                                <h5>The Sands Restaurant</h5>
                            </div>
                            <img src="{{ asset('assets/img/privilege-club/privilege-the-sands.png') }}" class="img-fluid" alt="The Sands" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="project-name">
                                <h5>Marketing Pav. / Captain Barbozza</h5>
                            </div>
                            <img src="{{ asset('assets/img/privilege-club/privilege-captain-barbozza.png') }}" class="img-fluid" alt="Captain Barbozza" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="project-name">
                                <h5>The Coffee Shack</h5>
                            </div>
                            <img src="{{ asset('assets/img/privilege-club/privilege-coffee-shack.png') }}" class="img-fluid" alt="The Coffee Shack" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="project-name">
                                <h5>The Boat Shack</h5>
                            </div>
                            <img src="{{ asset('assets/img/privilege-club/privilege-boat-shack.png') }}" class="img-fluid" alt="The Boat Shack" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="project-name">
                                <h5>Water Sports</h5>
                            </div>
                            <img src="{{ asset('assets/img/privilege-club/privilege-water-sports.png') }}" class="img-fluid" alt="Water Sports" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center wow pt-4 fadeInLeft" data-wow-delay=".3s">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/privilege-club/privilege-birthday.png') }}" class="img-fluid" alt="birthday" />
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-delay=".5s">
                <h5 class="mb-3">50% discount on entrance fees is given to members celebrating their birthday at any of the club accredited destinations <em>(except club Punta Fuego)</em></h5>
                <h6 class="mb-5">1 time use of 50% discount voucher on entrance fees. Extended when the member visits during their birth month.</h6>
                <h5 class="mb-3">25% Discount on entrance fees is given to Calatagan / Laiya amortizing lot owners celebrating their birthday.</h5>
                <h6 class="mb-0">Applicable to Aquaria Water Park / Club Laiya - Beachfront only. 1 time use of 25% discount voucher, extended when the amortizing lot owner visits during their birth month.</h6>
            </div>
        </div>
        <div class="row justify-content-center pt-5 mt-5 wow fadeInLeft" data-wow-delay=".3s">
            <div class="col-md-12 wow fadeInRight" data-wow-delay=".5s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <h3 class="mb-4">What are the requirements to avail these discounts?</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center wow pt-4 fadeInLeft" data-wow-delay=".3s">
            <div class="col-md-4">
                <img src="{{ asset('assets/img/privilege-club/privilege-support.png') }}" class="img-fluid" alt="birthday" />
            </div>
            <div class="col-md-8 wow fadeInRight" data-wow-delay=".5s">
                <ul class="list-check mb-4">
                    <li class="mb-3"><h6>The guest must be a <strong>Landco Privilege Club Member</strong></h6></li>
                    <li class="mb-3"><h6>The guest must be a <strong>Landco amortizing lot owner</strong> in Calatagan (CaSoBē / Playa Calatagan) or Laiya (Club Laiya / Playa Laiya)</h6></li>
                    <li class="mb-3"><h6>The club member or amortizing lot owner must coordinate their booking and reservation through the <strong>Landco Customer Service Hotline</strong>.</h6></li>
                    <li class="mb-3"><h6>The club member must show their <strong>Landco Privilege Club Card</strong> upon check-in</h6></li>
                </ul>
                <a class="main-btn btn-filled" href="contact.html"><span class="txt">Customer Service</span></a>
            </div>
        </div>
        <div class="row justify-content-center wow pt-4 fadeInLeft" data-wow-delay=".3s">
            <div class="col-md-4">
                <img src="{{ asset('assets/img/privilege-club/img-privilege-7.png') }}" class="img-fluid" alt="birthday" />
            </div>
            <div class="col-md-8 wow fadeInRight mb-100" data-wow-delay=".5s">
                <h5 class="mb-4">How to become a club member?</h5>
                <ul class="list-check mb-4">
                    <li class="mb-3">
                        <h6 class="mb-3">Purchase of a property to any of the qualified Landco project is required. The purchaser is required to fully pay the property including the transfer fee charges to be enrolled to the <strong>Landco Privilege Club</strong>.</h6>
                        <div class="accordion" id="accordion_projects_2">
                        <a class="mb-4 accordion-panel" type="button" data-toggle="collapse" data-target="#collapse_projects_2" aria-expanded="true" aria-controls="accordion_projects">
                            <h5 class="mb-1">List of qualified Landco projects</h5>
                            <i class="fas fa-angle-down fa-2x"></i>
                        </a>
                        <div id="collapse_projects_2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_projects_2">
                            <div class="row">
                                <ol class="list-items list-decimal col-md-6">
                                    <li>Amara</li>
                                    <li>Courtyard</li>
                                    <li>Hacienda Escudero</li>
                                    <li>Lakewood</li>
                                    <li>Leisure Farms</li>
                                    <li>Montelago</li>
                                    <li>Playa Azalea</li>
                                    <li>Playa Calatagan</li>
                                    <li>Playa Laiya</li>
                                    <li>Ponderosa</li>
                                </ol>
                                <ol class="list-items list-decimal col-md-6" start="11">
                                    <li>Ridgewood</li>
                                    <li>Stonecrest</li>
                                    <li>Terrazas de Punta Fuego</li>
                                    <li>Tribeca Private Residences</li>
                                    <li>Waterwood Park</li>
                                    <li>Woodgrove Park</li>
                                    <li>Woodridge Garden Village</li>
                                    <li>CaSoBē</li>
                                    <li>Club Laiya</li>
                                </ol>
                            </div>									
                        </div>
                    </div>
                    </li>
                    <li class="mb-3"><h6>For the 2nd Owners/Buyers of Landco Properties, the person must provide a copy of the transferred property title, 2 valid IDs and settle the <strong>P500.00 membership enrollment fee</strong> to join the club.</h6></li>
                </ul>
                <a class="main-btn btn-filled" href="contact.html"><span class="txt">Contact Us</span></a>
            </div>
            <div class="col-md-8 text-center wow fadeInRight" data-wow-delay=".5s">
                <a class="main-btn btn-filled" href="#"><span class="txt">Download The Full Privilege Club Membership Terms and Conditions</span></a>
            </div>
        </div>
    </div>
</section>
<!-- / -->
@endsection