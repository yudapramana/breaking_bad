@extends('layouts.landing.v2.master')

@section('title', $title)

@section('_styles')

<style>
    .blog-box {
        background-color: #f9f9f9 !important;
        min-height: 60px !important;
        max-width: 170px !important;
        padding: 30px 10px !important;
        line-height: 15px !important;
        -webkit-box-shadow: 0px 3px 7px 0px rgba(28, 31, 33, 0.15) !important;
        -moz-box-shadow: 0px 3px 7px 0px rgba(28, 31, 33, 0.15) !important;
        box-shadow: 0px 3px 7px 0px rgba(28, 31, 33, 0.15) !important;
        margin: 10px !important;
    }

    .alink {
        font-weight: 600;
        color: #29b477;
        text-decoration: none;
        letter-spacing: 1px;
        position: relative;
    }


    .greenext {
        color: #29b477;
        font-weight: 600;
        letter-spacing: 1px;
    }



    section {
        padding: 30px 0;
    }
</style>
@endsection

@section('content')

{{--
<hr class="pt-0 mt-0" style="border-bottom:1px solid rgba(0,0,0,0.2)"> --}}


<!-- START SECTION BANNER -->
<section class="banner_section p-0 pb-2 mb-2">
    <div id="carouselExampleControls" class="banner_content_wrap carousel slide slide_height_700" data-ride="carousel">
        <div class="carousel-inner">

            @foreach($carousels as $key => $carousel)

            <div class="carousel-item @if($key == 0) active @endif background_bg overlay_bg2"
                data-img-src="{{$carousel->smaller_image}}">
                <div class="banner_slide_content">
                    <div class="container">
                        <!-- STRART CONTAINER -->

                        <div class="row justify-content-end">
                            <div class="col-lg-7 col-md-12 col-sm-12 text-right">
                                <div class="banner_content2 text_white pb-5">
                                    <img class="logo_default col-3 animation animated fadeInDown"
                                        data-animation="fadeInDown" data-animation-delay="1s"
                                        style="animation-delay: 1s; opacity: 1;"
                                        src="{{ asset('assets/images/logo/logo-kemenag.png') }}" alt="logo" />
                                    {{-- src="{{ asset('assets/images/kakanwilbarufinal.png') }}" alt="logo" /> --}}
                                    <h1 class="animation animated fadeInDown" data-animation="fadeInDown"
                                        data-animation-delay="1s" style="animation-delay: 1s; opacity: 1;">
                                        KANTOR WILAYAH KEMENTERIAN AGAMA PROVINSI SUMATERA BARAT
                                    </h1>
                                    {{-- <p class="animation my-4 animated fadeInUp" data-animation="fadeInUp"
                                        data-animation-delay="1.5s" style="animation-delay: 1.5s; opacity: 1;">Ipsum
                                        generators on the Internet tend to repeat predefined</p> --}}

                                    <br>

                                </div>

                                {{-- <div class="banner_content2 text_white pt-5">
                                    <p>
                                        &nbsp;
                                        <br>
                                    <h5 class="animation animated fadeInDown" data-animation="fadeInDown"
                                        data-animation-delay="1s" style="animation-delay: 1s; opacity: 1;">{{
                                        $carousel->title }}</h5>
                                    </p>
                                </div> --}}
                            </div>
                        </div>

                    </div><!-- END CONTAINER-->
                </div>
            </div>

            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i
                class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i
                class="ion-chevron-right"></i></a>
    </div>
</section>

<!-- START SECTION ABOUT US -->
<section class="overflow_hide">
    <div class="container">
        <div class="row">
            {{-- <div class="col-md-6 col-sm-12 animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                <div class="mb-4 mb-lg-0 ">
                    <img src="{{$services[0]->square_cover_image}}" alt="about_img" />
                </div>
            </div> --}}
            <div class="col-lg-6 col-sm-12 animation align-items-center" data-animation="fadeInLeft"
                data-animation-delay="0.2s">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($recent_posts as $key => $act)
                            <li data-target="#carouselExampleCaptions" data-slide-to="{{$key}}"
                                class="@if($key == 1) active @endif"></li>
                            @endforeach
                            {{-- <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li> --}}
                        </ol>
                        <div class="carousel-inner">
                            @foreach($recent_posts as $key => $act)

                            <div class="carousel-item  @if($key == 0) active @endif">
                                <img src="{{$act->cover}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <small style="color:#ffffff;">{{ \Carbon\Carbon::parse($act->created_at)->format('d
                                        F Y')
                                        }}</small><br>
                                    <a style="color:#ffffff;"
                                        href="{{config('isec.base_url')}}/post/{{$act->slug}}">{{\Illuminate\Support\Str::limit($act->title,
                                        100,
                                        $end='...')}}&nbsp;</a>

                                </div>
                            </div>
                            @endforeach


                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>



            </div>
            <div class="col-lg-6 mt-lg-0 mt-4 pt-3 pt-lg-0 animation" data-animation="fadeInRight"
                data-animation-delay="0.2s">
                <div class="sidebar">

                    <div class="widget">
                        <h5 class="widget_title">Berita Terkini</h5>
                        <ul class="recent_post border_bottom_dash list_none">

                            @foreach($recent_posts as $key => $post)
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="{{config('isec.base_url')}}/post/{{$post->slug}}">
                                            @if($post->cover)
                                            <img src="{{$post->square_cover_image}}" alt="letest_post1" width="77"
                                                style="border-radius: 5px;">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="post_content">
                                        <h5><a href="{{config('isec.base_url')}}/post/{{$post->slug}}">{{\Illuminate\Support\Str::limit($post->title,
                                                70, $end='...')}}</a>
                                        </h5>
                                        <p class="small m-0">{{ $post->tanggal }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT US -->






<!-- START SECTION BLOG -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s3 mb-md-3 text-center">
                    <h2><a href="{{ route('blog.list', 'category=utama') }}">Berita Utama Kanwil</a></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="clearfix small_divider"></div>
            </div>
        </div>
        <div class="row blog_wrap justify-content-center animation" data-animation="fadeInUp"
            data-animation-delay="0.4s">
            @foreach($recent_posts as $key => $post)
            <div class="col-lg-4 col-md-6 mb-md-4 mb-2 pb-2">
                <div class="blog_post blog_style1">
                    <div class="blog_img">
                        <a href="#">
                            <img src="{{$post->cover_small}}" alt="blog_small_img1">
                        </a>
                        <span class="post_date bg_blue text-light"> {{ Str::ucfirst($post->category->slug) }}</span>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h6 class="blog_title"><a
                                    href="{{config('isec.base_url')}}/post/{{$post->slug}}">{{$post->title}}</a></h6>
                            <ul class="list_none blog_meta">
                                <li><a href="#">{{$post->tanggal}}</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->

<!-- START SECTION BLOG -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s3 mb-md-3 text-center">
                    <h2><a href="{{ route('blog.list', 'category=daerah') }}">Berita dari Daerah</a></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="clearfix small_divider"></div>
            </div>
        </div>
        <div class="row blog_wrap justify-content-center animation" data-animation="fadeInUp"
            data-animation-delay="0.4s">
            @foreach($daerah_posts as $key => $post)
            <div class="col-lg-4 col-md-6 mb-md-4 mb-2 pb-2">
                <div class="blog_post blog_style1">
                    <div class="blog_img">
                        <a href="#">
                            <img src="{{$post->cover_small}}" alt="blog_small_img1">
                        </a>
                        <span class="post_date bg_blue text-light"> {{ ucwords(strtolower($post->kabkota->name))
                            }}</span>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h6 class="blog_title"><a
                                    href="{{config('isec.base_url')}}/post/{{$post->slug}}">{{$post->title}}</a></h6>
                            <ul class="list_none blog_meta">
                                <li><a href="#">{{$post->tanggal}}</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->

@endsection


@section('_scripts')
{{-- No Data --}}
@endsection