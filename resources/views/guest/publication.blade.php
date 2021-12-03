@extends('layouts.guest')

@section('content')
<!-- .breadcrumb-area -->
<section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-about.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <span class="wow fadeInLeft">Latest Updates</span>
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Publications</h2>
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">Publications</li>
            </ul>
        </div>
    </div>
</section>
<!-- /.breadcrumb-area -->

@if(count($pubs) > 0)
<section class="section-publications pt-115 pb-115">
    <div class="container" data-js="publications">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-5">
                <h3 class="page-title wow fadeInUp text-center">News about Landco Pacific Corporation</h3>
                <p class=" text-center">Read more raving news and articles about Landco Pacific Corporation’s<br />luxury beach developments here.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="button-group filter-button-group wow fadeInUp">
                    <button data-filter="*" class="is-checked">All</button>
                    @foreach ($categories as $key => $value)
                        <button data-filter=".grid-{{ $value->slug_url }}">{{ $value->category_name }}</button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="grid">
                    
                    @foreach ($pubs as $key => $value)
                        <div class="grid-item grid-{{ $value->category->slug_url }} wow fadeInUp">
                            <div class="card">
                                @php
                                    if (!is_null($value->meta_link)) {
                                        $link = $value->meta_link;
                                    } else {
                                        $link = route('details', [$value->date_published, $value->slug_url]);
                                    }
                                @endphp
                                <a href="{{ $link }}" target="_blank" rel="noopener" class="card-img-top">
                                    <img src="{{ asset('storage/files/'.$value->file->file_name) }}" alt="Image">
                                </a>
                                <div class="card-body">
                                    <h5 class="mb-0"><a href="{{ $link }}" @if(!is_null($value->meta_link)) target="_blank" rel="noopener" @endif>{{ Str::limit($value->title, 60) }}</a></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection

@push('scripts')
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script>		
    $('.grid').imagesLoaded()
        .always( function( instance ) {
        console.log('all images loaded');
    })
        .done( function( instance ) {
    console.log('all images successfully loaded');
    })
        .fail( function() {
        console.log('all images loaded, at least one is broken');
    })
        .progress( function( instance, image ) {
    var result = image.isLoaded ? 'loaded' : 'broken';
        console.log( 'image is ' + result + ' for ' + image.img.src );
    });
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });	
    
    $('.filter-button-group').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
    
    $('.filters-button-group').on( 'click', 'button', function() {
        var filterValue = $( this ).attr('data-filter');
        filterValue = filterFns[ filterValue ] || filterValue;
        $grid.isotope({ filter: filterValue });
    });
    $('.button-group').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
        });
    });
</script>
@endpush
