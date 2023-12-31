@extends('layouts.landing.master')
@section('title', $title)

@section('_styles')

{{-- Primary Meta Tags --}}
<meta name="title" content="{{$title}}">
<meta name="description" content="Pandan View Mandeh - Villa Cafe dan Cottage Resort untuk Liburan Keluarga.  terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah" />
<meta name="keywords" content="Pandan View Mandeh, Mandeh, Pesisir Selatan, Puncak Mandeh" />
<meta name="author" content="Pandan View Mandeh" />
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name="revisit-after" content="1 Days" />

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="PANDAN VIEW MANDEH">
<meta property="og:title" content="{{$title}}">
<meta property="og:locale" content="id_ID">
<meta property="og:description" content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">
<meta property="og:image" content="{{ asset('sailor/img/logo.png') }}" />
<meta property="og:type" content=website />
<meta property="og:url" content="{{ URL::current() }}" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="Pandan View Mandeh" />
<meta name="twitter:title" content="{{$title}}" />
<meta name="twitter:description" content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">
<meta name="twitter:image" content="{{ asset('sailor/img/logo.png') }}" />
<meta property="twitter:url" content="{{ URL::current() }}">


<link rel="canonical" href="{{ URL::current() }}" />
<link rel="alternate" hreflang="en-US" href="{{ URL::current() }}" />
<link rel="shortcut icon" type="image/png" href="{{ URL::current() }}" />

<style>
    #hero h1 {
        color: #fff;
        font-size: 48px;
        font-weight: 700;
    }

    .position-relative {
        position: relative !important;
    }

    .bg-white {
        background-color: #fafafa !important;
    }

</style>
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            @foreach($carousels as $key => $carousel)
            <div class="carousel-item  @if($key == 0) active @endif" style="background-image: url({{$carousel->smaller_image}})">
                <div class="carousel-container">
                    <div class="container">

                        <h1 class=" @if($key == 0) animate__animated animate__fadeInDown @endif">{{ __('messages.carousel.welcome') }} Pandan View <span>Mandeh</span></h1>
                        <p class=" @if($key == 0) animate__animated animate__fadeInUp @endif">{{ __('messages.carousel.description') }}</p>
                        <a href="#about" class="btn-get-started  @if($key == 0) animate__animated animate__fadeInUp @endif scrollto">{{ __('messages.carousel.more') }}</a>

                        <div class="carousel-caption text-end  @if($key == 0) animate__animated animate__fadeInRight @endif">
                            <div class="s_share text-end">

                                <a href="https://twitter.com/{{$account}}" class="s_share_twitter" target="_blank">
                                    <i class="fa fa-1x fa-brands fa-twitter rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip560917"></i>
                                </a>&nbsp;
                                <a href="https://www.instagram.com/{{$account}}" class="s_share_linkedin" target="_blank">
                                    <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color: rgb(255, 0, 0);" data-original-title="" title="" aria-describedby="tooltip780758"></span>
                                </a>&nbsp;
                                <a href="https://www.youtube.com/channel/{{$channel}}" class="s_share_google" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm" style="" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>&nbsp;
                                <a href="https://www.tiktok.com/@pandan_view_mandeh" style="color:black !important;" class="s_share_tiktok" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:black !important;" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>
                            </div>

                            <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                                <a href="https://api.whatsapp.com/send?phone=62811660358&text=Halo%20saya%20mengetahui%20anda%20dari%20web%20https%3A%2F%2Fpandanviewandeh.com.%0A%0ASaya%20mau%20memesan%20Kamar.%20Mohon%20info%20kamarnya" class="flat btn btn-secondary flat" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:small!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                                <a href="/contact" class="btn btn-success flat flat pandanview" data-original-title="" title="" aria-describedby="tooltip296367" style="font-size:small!important;">{{ __('messages.carousel.contact') }}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            {{-- <!-- Slide 1 -->
            <div class="carousel-item  active" style="background-image: url(sailor/img/slide/pv-1.jpg)">
                <div class="carousel-container">
                    <div class="container">

                        <h2 class="animate__animated animate__fadeInDown">Pandan View <span>Mandeh</span></h2>
                        <p class="animate__animated animate__fadeInUp">{{ __('messages.carousel.description') }}</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">{{ __('messages.carousel.more') }}</a>

            <div class="carousel-caption text-end animate__animated animate__fadeInRight">
                <div class="s_share text-end">

                    <a href="https://twitter.com/{{$account}}" class="s_share_twitter" target="_blank">
                        <i class="fa fa-1x fa-brands fa-twitter rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip560917"></i>
                    </a>&nbsp;
                    <a href="https://www.instagram.com/{{$account}}" class="s_share_linkedin" target="_blank">
                        <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color: rgb(255, 0, 0);" data-original-title="" title="" aria-describedby="tooltip780758"></span>
                    </a>&nbsp;
                    <a href="https://www.youtube.com/channel/{{$channel}}" class="s_share_google" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                        <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm" style="" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                    </a>&nbsp;
                    <a href="https://www.tiktok.com/@pandan_view_mandeh" style="color:black !important;" class="s_share_tiktok" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                        <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:black !important;" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                    </a>
                </div>

                <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                    <a href="https://wa.me/6281210003536" class="flat btn btn-secondary flat" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:small!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                    <a href="/contact" class="btn btn-success flat flat pandanview" data-original-title="" title="" aria-describedby="tooltip296367" style="font-size:small!important;">{{ __('messages.carousel.contact') }}</a>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item " style="background-image: url(sailor/img/slide/pv-3.jpg)">
        <div class="carousel-container">
            <div class="container">

                <h2>Pandan View <span>Mandeh</span></h2>
                <p>{{ __('messages.carousel.description') }}</p>
                <a href="#about" class="btn-get-started scrollto">{{ __('messages.carousel.more') }}</a>

                <div class="carousel-caption text-end">
                    <div class="s_share text-end">

                        <a href="https://twitter.com/{{$account}}" class="s_share_twitter" target="_blank">
                            <i class="fa fa-1x fa-brands fa-twitter rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip560917"></i>
                        </a>&nbsp;
                        <a href="https://www.instagram.com/{{$account}}" class="s_share_linkedin" target="_blank">
                            <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color: rgb(255, 0, 0);" data-original-title="" title="" aria-describedby="tooltip780758"></span>
                        </a>&nbsp;
                        <a href="https://www.youtube.com/channel/{{$channel}}" class="s_share_google" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                            <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm" style="" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                        </a>&nbsp;
                        <a href="https://www.tiktok.com/@pandan_view_mandeh" style="color:black !important;" class="s_share_tiktok" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                            <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:black !important;" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                        </a>
                    </div>

                    <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                        <a href="https://wa.me/6281210003536" class="flat btn btn-secondary flat" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:small!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                        <a href="/contact" class="btn btn-success flat flat pandanview" data-original-title="" title="" aria-describedby="tooltip296367" style="font-size:small!important;">{{ __('messages.carousel.contact') }}</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item " style="background-image: url(sailor/img/slide/pv-4.jpg)">
        <div class="carousel-container">
            <div class="container">

                <h2>Pandan View <span>Mandeh</span></h2>
                <p>{{ __('messages.carousel.description') }}</p>
                <a href="#about" class="btn-get-started scrollto">{{ __('messages.carousel.more') }}</a>

                <div class="carousel-caption text-end">
                    <div class="s_share text-end">

                        <a href="https://twitter.com/{{$account}}" class="s_share_twitter" target="_blank">
                            <i class="fa fa-1x fa-brands fa-twitter rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip560917"></i>
                        </a>&nbsp;
                        <a href="https://www.instagram.com/{{$account}}" class="s_share_linkedin" target="_blank">
                            <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color: rgb(255, 0, 0);" data-original-title="" title="" aria-describedby="tooltip780758"></span>
                        </a>&nbsp;
                        <a href="https://www.youtube.com/channel/{{$channel}}" class="s_share_google" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                            <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm" style="" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                        </a>&nbsp;
                        <a href="https://www.tiktok.com/@pandan_view_mandeh" style="color:black !important;" class="s_share_tiktok" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                            <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:black !important;" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                        </a>
                    </div>

                    <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                        <a href="https://wa.me/6281210003536" class="flat btn btn-secondary flat" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:small!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                        <a href="/contact" class="btn btn-success flat flat pandanview" data-original-title="" title="" aria-describedby="tooltip296367" style="font-size:small!important;">{{ __('messages.carousel.contact') }}</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Slide 4 -->
    <div class="carousel-item " style="background-image: url(sailor/img/slide/pv-6.jpg)">
        <div class="carousel-container">
            <div class="container">

                <h2>Pandan View <span>Mandeh</span></h2>
                <p>{{ __('messages.carousel.description') }}</p>
                <a href="#about" class="btn-get-started scrollto">{{ __('messages.carousel.more') }}</a>

                <div class="carousel-caption text-end">
                    <div class="s_share text-end">

                        <a href="https://twitter.com/{{$account}}" class="s_share_twitter" target="_blank">
                            <i class="fa fa-1x fa-brands fa-twitter rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip560917"></i>
                        </a>&nbsp;
                        <a href="https://www.instagram.com/{{$account}}" class="s_share_linkedin" target="_blank">
                            <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color: rgb(255, 0, 0);" data-original-title="" title="" aria-describedby="tooltip780758"></span>
                        </a>&nbsp;
                        <a href="https://www.youtube.com/channel/{{$channel}}" class="s_share_google" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                            <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm" style="" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                        </a>&nbsp;
                        <a href="https://www.tiktok.com/@pandan_view_mandeh" style="color:black !important;" class="s_share_tiktok" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                            <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:black !important;" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                        </a>
                    </div>

                    <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                        <a href="https://wa.me/6281210003536" class="flat btn btn-secondary flat" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:small!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                        <a href="/contact" class="btn btn-success flat flat pandanview" data-original-title="" title="" aria-describedby="tooltip296367" style="font-size:small!important;">{{ __('messages.carousel.contact') }}</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Slide 5 -->
    <div class="carousel-item " style="background-image: url(sailor/img/slide/pv-7.jpg)">
        <div class="carousel-container">
            <div class="container">

                <h2>Pandan View <span>Mandeh</span></h2>
                <p>{{ __('messages.carousel.description') }}</p>
                <a href="#about" class="btn-get-started scrollto">{{ __('messages.carousel.more') }}</a>

                <div class="carousel-caption text-end">
                    <div class="s_share text-end">

                        <a href="https://twitter.com/{{$account}}" class="s_share_twitter" target="_blank">
                            <i class="fa fa-1x fa-brands fa-twitter rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip560917"></i>
                        </a>&nbsp;
                        <a href="https://www.instagram.com/{{$account}}" class="s_share_linkedin" target="_blank">
                            <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color: rgb(255, 0, 0);" data-original-title="" title="" aria-describedby="tooltip780758"></span>
                        </a>&nbsp;
                        <a href="https://www.youtube.com/channel/{{$channel}}" class="s_share_google" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                            <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm" style="" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                        </a>&nbsp;
                        <a href="https://www.tiktok.com/@pandan_view_mandeh" style="color:black !important;" class="s_share_tiktok" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                            <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:black !important;" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                        </a>
                    </div>

                    <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                        <a href="https://wa.me/6281210003536" class="flat btn btn-secondary flat" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:small!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                        <a href="/contact" class="btn btn-success flat flat pandanview" data-original-title="" title="" aria-describedby="tooltip296367" style="font-size:small!important;">{{ __('messages.carousel.contact') }}</a>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->


    @foreach($services as $key => $service)
    <section id="about" class="about  @if($key+1 == 1) pb-4 pt-5 @else pb-4 pt-0 @endif">
        <div class="container">
            <div class="row content align-item-center align-middle" style="align-items: center">
                @if( ($key+1) % 2 == 0)
                <div class="col-lg-6 pt-4 pt-lg-0 position-relative">
                    <img width="100%" class="" src="{{$service->square_cover_image}}" class="img img-fluid mx-auto" alt="Odoo • Text and Image" data-original-title="" title="" aria-describedby="tooltip617481" style="">
                    <div class="tobe_animated bg-white position-absolute top-100 start-0 w-100 h-100" data-id="1"></div>
                </div>
                <div class="col-lg-6 pb-0 pt-0">
                    <h3>{{$service->{$titleLocale} }}</h3>
                    <p style="font-size: small; text-align:justify;">{!! nl2br($service->description) !!}</p>
                    <a style="font-size:smaller;" href="{!! '/' .isset($service->next_url) ? $service->next_url : '' !!}" class="btn btn-success" data-original-title="" title="" aria-describedby="tooltip362623">Selengkapnya</a>
                </div>
                @else
                <div class="col-lg-6 pb-0 pt-0">
                    <h3>{{$service->{$titleLocale} }}</h3>
                    <p style="font-size: small; text-align:justify;">{!! nl2br($service->description) !!}</p>
                    <a style="font-size:smaller;" href="{!! '/' .isset($service->next_url) ? $service->next_url : '' !!}" class="btn btn-success" data-original-title="" title="" aria-describedby="tooltip362623">Selengkapnya</a>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 position-relative">
                    <img width="100%" class="" src="{{$service->square_cover_image}}" class="img img-fluid mx-auto" alt="Odoo • Text and Image" data-original-title="" title="" aria-describedby="tooltip617481" style="">
                    <div class="tobe_animated bg-white position-absolute top-100 start-0 w-100 h-100" data-id="1"></div>
                </div>
                @endif
            </div>
        </div>
    </section><!-- End About Section -->
    @endforeach

    <section id="about" class="about pb-4 pt-5">
        <div class="container">
            <div class="row content align-item-center align-middle" style="align-items: center">
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/bdv1XyiLFW8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    {{-- <iframe class="img img-fluid mx-auto" style="width: 100%; height:380px;" src="//www.youtube.com/embed/gzJEYkoWHro?autoplay=0&amp;rel=0&amp;controls=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe> --}}
                </div>
                <div class="col-lg-6 pb-0 pt-0">
                    <h4>
                        <i>Gugusan Pulau yang enak dipandang mata...</i>
                    </h4>

                    <p>
                        <span style="background-color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 0.875rem; text-align: center;">Gugusan Mandeh,</span>
                        <br>
                        <span style="background-color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 0.875rem; text-align: center;">Tepian Pantai, </span>
                        <br>
                        <span style="background-color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 0.875rem; text-align: center;">Jalan Mendaki, </span>
                        <br>
                        <span style="background-color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 0.875rem; text-align: center;">View yang mempesona, </span>
                        <br>
                        <span style="background-color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 0.875rem; text-align: center;">Bersantai dengan Keluarga dan Teman,<br></span>
                        <span style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: center; font-size: 0.875rem;">sungguh bagai karya seni instalasi karya Ilahi dengan keindahan yang sempurna.</span>
                    </p>
                </div>

            </div>
        </div>
    </section><!-- End About Section -->

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">
                    {{-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                    <div class="elfsight-app-2596a9b0-d20d-47f8-b3cb-18372280a49a"></div> --}}
                    <div class='sk-ww-google-reviews' data-embed-id='169339'></div>
                    <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">

                            @foreach($recent_posts as $key => $post)
                            <div class="post-item clearfix">
                                <img src="{{$post->cover_small}}" alt="">
                                <h4><a href="/post/{{$post->slug}}">{{\Illuminate\Support\Str::limit($post->title, 20, $end='...')}}</a></h4>
                                <time datetime="2020-01-01"> {{ $post->created_at->format('d F Y') }}</time>
                            </div>
                            @endforeach


                        </div><!-- End sidebar recent posts-->
                    </div>
                </div>
            </div>
        </div>
    </section>





    {{-- <div class="row content">
                <div class="col-lg-6">
                    <h2>Eum ipsam laborum deleniti velitena</h2>
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                    </ul>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                </div>
            </div> --}}



    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('sailor/img/clients/client-1.png')}}" class="img-fluid" alt="">
    </div>

    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('sailor/img/clients/client-2.png')}}" class="img-fluid" alt="">
    </div>

    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('sailor/img/clients/client-3.png')}}" class="img-fluid" alt="">
    </div>

    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('sailor/img/clients/client-4.png')}}" class="img-fluid" alt="">
    </div>

    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('sailor/img/clients/client-5.png')}}" class="img-fluid" alt="">
    </div>

    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('sailor/img/clients/client-6.png')}}" class="img-fluid" alt="">
    </div>

    </div>

    </div>
    </section> --}}
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="#">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-card-checklist"></i>
                        <h4><a href="#">Dolor Sitema</a></h4>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-bar-chart"></i>
                        <h4><a href="#">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-binoculars"></i>
                        <h4><a href="#">Nemo Enim</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-brightness-high"></i>
                        <h4><a href="#">Magni Dolore</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-calendar4-week"></i>
                        <h4><a href="#">Eiusmod Tempor</a></h4>
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
    <!-- End Services Section -->

</main><!-- End #main -->
@endsection


@section('_scripts')

<script>
    const animateList = [].slice.call(document.querySelectorAll('.tobe_animated'))
    animateList.map(function(animateEl) {
        new Waypoint({
            element: animateEl
            , offset: '130%'
            , handler: function(direction) {
                //https://stackoverflow.com/a/56914528/3929620
                animateEl.classList.add('animate__animated', 'animate__slideInDown');

                animateEl.addEventListener('animationend', () => {
                    // do something
                    animateEl.style.opacity = 0;
                });

                // this.destroy()
            }
        , })
    })

</script>

@endsection
