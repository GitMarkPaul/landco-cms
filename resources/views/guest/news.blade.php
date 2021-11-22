@extends('layouts.guest')

@section('content')
 <!-- .breadcrumb-area -->
 <section class="breadcrumb-area" style="background-image: url('{{ asset("assets/img/banners/banner-about.jpg") }}');">
    <div class="container">
        <div class="breadcrumb-text">
            <span class="wow fadeInLeft">Latest Updates</span>
            <h2 class="page-title wow fadeInLeft" data-wow-delay="0.2s">Blog</h2>

            <!-- .breadcrumb-nav -->
            <ul class="breadcrumb-nav wow fadeInRight">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">Publications</li>
            </ul>
        </div>
    </div>
</section>
<!-- /.breadcrumb-area -->

<!-- .text-block -->
<section class="section-publications pt-115 pb-115">
    <div class="container" data-js="publications">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h3 class="page-title wow fadeInUp text-center">News about landco</h3>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="grid">
                    @foreach ($publications as $key => $value)
                        @if ($value->category->category_name == 'News')
                            <div class="grid-item grid-blog wow fadeInUp" data-wow-delay=".3s">
                                <div class="card">
                                    @php
                                        if (!is_null($value->meta_link)) {
                                            $link = $value->meta_link;
                                        } else {
                                            $link = route('details', [Str::of($value->created_at->format('Y d m s'))->studly(), $value->slug_url]);
                                        }
                                    @endphp
                                    <a href="{{ $link }}" class="card-img-top">
                                        @php
                                            if(is_null($value->file_id)) {
                                                $file = asset('img/default-thumbnail.jpg');
                                            } else {
                                                $file = asset('storage/files/'.$value->file->file_name);
                                            }
                                        @endphp
                                        <img src="{{ $file }}" alt="Image">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="mb-0"><a href="{{ $link }}">{{ $value->title }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.text-block -->
@endsection