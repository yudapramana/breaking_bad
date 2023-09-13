@extends('layouts.landing.v2.master')

@section('title', 'Web - Buat Permohonan')

@section('_styles')

{{-- Primary Meta Tags --}}
<meta name="title" content="{{$title}}">
<meta name="description" content="{{$title}}" />
<meta name="keywords" content="PPID, PPID Kementerian Agama, Web Kemenag Kanwil Prov Sumbar, Komisi Informasi" />
<meta name="author" content="Web Kemenag Kanwil Prov Sumbar" />
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name="revisit-after" content="1 Days" />

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="{{$title}}">
<meta property="og:title" content="{{$title}}">
<meta property="og:locale" content="id_ID">
<meta property="og:description" content="Web - {{$title}}">
<meta property="og:image" content="{{ asset('sailor/img/logo.png') }}" />

<meta property="og:type" content=website />
<meta property="og:url" content="{{ URL::current() }}" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="{{$title}}" />
<meta name="twitter:title" content="{{$title}}" />
<meta name="twitter:description" content="Web - {{$title}}">
<meta name="twitter:image" content="{{ asset('sailor/img/logo.png') }}" />
<meta property="twitter:url" content="{{ URL::current() }}">


<link rel="canonical" href="{{ URL::current() }}" />
<link rel="alternate" hreflang="en-US" href="{{ URL::current() }}" />
<link rel="shortcut icon" type="image/png" href="{{ URL::current() }}" />

<style>
    .greenext {
        color: #29b477;
        font-weight: 600;
        letter-spacing: 1px;
    }
</style>
@endsection

@section('content')

<hr class="pt-0 mt-0">

<!-- START SECTION CONTACT -->

<div class="container">

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="heading_s3 text-center animation animated fadeInUp" data-animation="fadeInUp"
                        data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
                        <h2 class="greenext">Galeri Foto dan Video</h2>
                    </div>
                    {{-- <p class="text-center animation animated fadeInUp" data-animation="fadeInUp"
                        data-animation-delay="0.3s" style="animation-delay: 0.3s; opacity: 1;">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius
                        nunc.</p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cleafix small_divider"></div>
                </div>
            </div>
            <div class="row mb-3 mb-sm-5">
                <div class="col-md-12 text-center">
                    <ul class="list_none portfolio_filter filter_tab6 animation animated fadeInUp"
                        data-animation="fadeInUp" data-animation-delay="0.4s"
                        style="animation-delay: 0.4s; opacity: 1;">
                        <li><a href="#" class="" data-filter="*">all</a></li>
                        <li><a href="#" data-filter=".brands" class="">Brands</a></li>
                        <li><a href="#" data-filter=".design" class="">Design</a></li>
                        <li><a href="#" data-filter=".web" class="">Web</a></li>
                        <li><a href="#" data-filter=".adv" class="current">Advertising</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="portfolio_container gutter_small work_col3 portfolio_gallery portfolio_style3 animation animated fadeInUp"
                        data-animation="fadeInUp" data-animation-delay="0.4s"
                        style="animation-delay: 0.4s; opacity: 1; position: relative; height: 660.906px;">
                        <li class="grid-sizer"></li>
                        <!-- START PORTFOLIO ITEM -->
                        <li class="portfolio-item design web"
                            style="position: absolute; left: 0%; top: 0px; animation: auto ease 0s 1 normal none running none; display: none;">
                            <div class="portfolio_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('images/portfolio_item15.jpg') }}" alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/images/portfolio_item15.jpg') }}"
                                            class="image_popup"><i class="ion-image"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>It's a long established fact that a reader will be readable content of a page.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="portfolio-item brands web adv"
                            style="position: absolute; left: 0%; top: 0px; animation: auto ease 0s 1 normal none running none;">
                            <div class="portfolio_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('images/portfolio_item12.jpg') }}" alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="http://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup"><i
                                                class="ion-ios-play"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>There are many variations of available, but the majority have suffered alteration
                                    </p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="portfolio-item brands design"
                            style="position: absolute; left: 33.3292%; top: 0px; animation: auto ease 0s 1 normal none running none; display: none;">
                            <div class="portfolio_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('images/portfolio_item_small1.jpg') }}" alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/images/portfolio_item1.jpg') }}"
                                            class="image_popup"><i class="ion-image"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>making this the first true generator on the Internet. It uses a dictionary</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="portfolio-item brands design web adv"
                            style="position: absolute; left: 33.3292%; top: 0px; animation: auto ease 0s 1 normal none running none;">
                            <div class="portfolio_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('images/portfolio_item13.jpg') }}" alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/images/portfolio_item13.jpg') }}"
                                            class="image_popup"><i class="ion-image"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of
                                        itself</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="portfolio-item brands design"
                            style="position: absolute; left: 33.3292%; top: 254.969px; animation: auto ease 0s 1 normal none running none; display: none;">
                            <div class="portfolio_item">
                                <div class="portfolio_slider owl-carousel owl-theme dots_white owl-loaded owl-drag owl-hidden"
                                    data-autoplay="true" data-loop="true" data-animate-in="fadeIn"
                                    data-animate-out="fadeOut" data-autoplay-timeout="3000">


                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-1080px, 0px, 0px); transition: all 0s ease 0s; width: 2160px;">
                                            <div class="owl-item cloned" style="width: 360px;"><a href="#"
                                                    class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small3.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                            <div class="owl-item cloned" style="width: 360px;"><a href="#"
                                                    class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small23.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                            <div class="owl-item" style="width: 360px;"><a href="#" class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small3.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                            <div class="owl-item active" style="width: 360px;"><a href="#"
                                                    class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small23.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                            <div class="owl-item cloned" style="width: 360px;"><a href="#"
                                                    class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small3.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                            <div class="owl-item cloned" style="width: 360px;"><a href="#"
                                                    class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small23.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <div class="owl-prev"><i class="ion-ios-arrow-back"></i></div>
                                        <div class="owl-next"><i class="ion-ios-arrow-forward"></i></div>
                                    </div>
                                    <div class="owl-dots">
                                        <div class="owl-dot"><span></span></div>
                                        <div class="owl-dot active"><span></span></div>
                                    </div>
                                </div>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/images/portfolio_item3.jpg') }}"
                                            class="image_popup"><i class="ion-images"></i></a>
                                        <a href="{{ asset('assets/images/portfolio_item23.jpg') }}"
                                            class="image_popup d-none"></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>making this the first true generator on the Internet. It uses a dictionary</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="portfolio-item brands adv"
                            style="position: absolute; left: 66.6583%; top: 0px; animation: auto ease 0s 1 normal none running none;">
                            <div class="portfolio_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('images/portfolio_item14.jpg') }}" alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="http://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup"><i
                                                class="ion-ios-play"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>Nam libero tempore cum soluta nobis eligendi optio nihil impedit quo minus</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="portfolio-item brands design"
                            style="position: absolute; left: 0%; top: 284.953px; animation: auto ease 0s 1 normal none running none; display: none;">
                            <div class="portfolio_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('images/portfolio_item16.jpg') }}" alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/images/portfolio_item16.jpg') }}"
                                            class="image_popup"><i class="ion-image"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>making this the first true generator on the Internet. It uses a dictionary</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="portfolio-item brands design web adv"
                            style="position: absolute; left: 0%; top: 330.953px; animation: auto ease 0s 1 normal none running none;">
                            <div class="portfolio_item">
                                <a href="#" class="image_link">
                                    <img src="{{ asset('images/portfolio_item17.jpg') }}" alt="image">
                                </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/images/portfolio_item17.jpg') }}"
                                            class="image_popup"><i class="ion-image"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>which is the same as saying through shrinking from toil and pain.</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                        <!-- START PORTFOLIO ITEM -->
                        <li class="portfolio-item brands web"
                            style="position: absolute; left: 0%; top: 823.891px; animation: auto ease 0s 1 normal none running none; display: none;">
                            <div class="portfolio_item">
                                <div class="portfolio_slider owl-carousel owl-theme dots_white owl-loaded owl-drag owl-hidden"
                                    data-autoplay="true" data-loop="true" data-animate-in="fadeIn"
                                    data-animate-out="fadeOut" data-autoplay-timeout="3500">


                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-720px, 0px, 0px); transition: all 0s ease 0s; width: 2160px;">
                                            <div class="owl-item cloned" style="width: 360px;"><a href="#"
                                                    class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small7.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                            <div class="owl-item cloned" style="width: 360px;"><a href="#"
                                                    class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small24.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                            <div class="owl-item active" style="width: 360px;"><a href="#"
                                                    class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small7.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                            <div class="owl-item" style="width: 360px;"><a href="#" class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small24.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                            <div class="owl-item cloned" style="width: 360px;"><a href="#"
                                                    class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small7.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                            <div class="owl-item cloned" style="width: 360px;"><a href="#"
                                                    class="image_link">
                                                    <img src="{{ asset('images/portfolio_item_small24.jpg') }}"
                                                        alt="image">
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <div class="owl-prev"><i class="ion-ios-arrow-back"></i></div>
                                        <div class="owl-next"><i class="ion-ios-arrow-forward"></i></div>
                                    </div>
                                    <div class="owl-dots">
                                        <div class="owl-dot active"><span></span></div>
                                        <div class="owl-dot"><span></span></div>
                                    </div>
                                </div>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ asset('assets/images/portfolio_item7.jpg') }}"
                                            class="image_popup"><i class="ion-images"></i></a>
                                        <a href="{{ asset('assets/images/portfolio_item24.jpg') }}"
                                            class="image_popup d-none"><i class="ion-image"></i></a>
                                        <a href="#"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">Website Design</a></h5>
                                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum saepe eveniet</p>
                                </div>
                            </div>
                        </li>
                        <!-- END PORTFOLIO ITEM -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- END SECTION CONTACT -->


@endsection


@section('_scripts')
{{-- No Data --}}

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
    // Cloudinary Widget
        var myWidget = cloudinary.createUploadWidget({
            cloudName: 'kominfo-sb',
            uploadPreset: 'zwco5rur',
            theme: 'minimal',
            multiple: false,
            max_file_size: 10048576,
            background: "white",
            height: 600,
            width: 400,
            crop: "pad"

        }, (error, result) => {
            if (!error && result && result.event === "success") {
                console.log('Done! Here is the image info: ', result.info);
                var secure_url = result.info.secure_url;
                console.log('secure_url');
                console.log(secure_url);
                $('input[name=identity_url]').val(secure_url);
                $('#foto-produk-box').css("display", "block");
                $('#upload_widget_opener').css("display", "none");
                $('#tu-upload-box').hide();
                $('#foto-produk-src').attr("src", secure_url);
                // $('#foto-produk-url').attr("href", secure_url);
                $("#defModal").css('overflow-y', 'auto');
            }
        });

        document.getElementById("upload_widget_opener").addEventListener("click", function() {
            myWidget.open();
        }, false);

        $('#reload').click(function() {
            reloadCaptcha();
        });

        function reloadCaptcha() {
            $.ajax({
                type: 'GET',
                url: "{{ route('reload.captcha') }}",
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        }

        $('#savePermohonanBtn').click(function(e) {

            var formData = $('#permohonanForm').serializeArray();
            console.log(formData);

            if ($("#permohonanForm").valid()) {
                $('#savePermohonanBtn').attr("disabled", "disabled");
                e.preventDefault();

                var url = $('#permohonanForm').attr('action');

                var formdata = $("#permohonanForm").serialize(); // here $(this) refere to the form its submitting
                console.log(formdata);

                Swal.fire({
                    title: "Checking...",
                    text: "Please wait",
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    timer: 1000,
                });

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData, // here $(this) refers to the ajax object not form
                    dataType: 'json', // let's set the expected response format
                    success: function(data) {
                        console.log(data);

                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Permohonan berhasil disimpan!.',
                                confirmButtonText: "OK",
                                allowOutsideClick: false
                                    // , timer: 1000
                                    ,
                            }).then(function() {
                                window.location.href = "/";
                            });
                        } else {
                            $('#savePermohonanBtn').attr("disabled", false);
                            Swal.fire({
                                title: "Permohonan Gagal!",
                                text: data.message,
                                type: "error",
                                confirmButtonText: "OK",
                                allowOutsideClick: false,
                            });
                            reloadCaptcha();
                        }

                        // Swal.fire({
                        //     icon: 'success'
                        //     , title: 'Permohonan berhasil disimpan!.'
                        //     , html: 'Page will be redirected in <b></b> milliseconds.'
                        //     , timer: 2000
                        //     , showCancelButton: false
                        //     , showConfirmButton: false
                        //     , timerProgressBar: true
                        //     , allowOutsideClick: false
                        //     , willOpen: () => {
                        //         Swal.showLoading()
                        //         timerInterval = setInterval(() => {
                        //             const content = Swal.getContent()
                        //             if (content) {
                        //                 const b = content.querySelector('b')
                        //                 if (b) {
                        //                     b.textContent = Swal.getTimerLeft()
                        //                 }
                        //             }
                        //         }, 100)
                        //     }
                        //     , willClose: () => {
                        //         clearInterval(timerInterval)
                        //     }
                        // }).then((result) => {
                        //     /* Read more about handling dismissals below */
                        //     if (result.dismiss === Swal.DismissReason.timer) {
                        //         // location.reload('/');
                        //         window.location.href = "/";
                        //     }
                        // })

                    },
                    error: function(err) {



                        if (err.status == 422) { // when status code is 422, it's a validation issue
                            console.log(err.responseJSON);
                            // you can loop through the errors object and show it to the user
                            console.warn(err.responseJSON.errors);
                            // display errors on each form field
                            $('.ajax-invalid').remove();
                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $(document).find('[name="' + i + '"]');
                                el.addClass('is-invalid');
                                el.after($('<span class="error invalid-feedback" >' + error[0] + '</span>'));
                            });

                            Swal.fire({
                                title: "Pengecekan Selesai!",
                                showConfirmButton: false,
                                timer: 700
                            });
                            $('#savePermohonanBtn').attr("disabled", false);
                            reloadCaptcha();
                        } else if (err.status == 403) {
                            Swal.fire(
                                'Unauthorized!', 'You are unauthorized to do the action', 'warning'
                            );

                        }

                    }
                });


            } else {
                Swal.fire(
                    'Error!', 'Perhatian! Perbaiki isian Formulir', 'error'
                );
            }

        });

        $("#permohonanForm").validate({
            ignore: [],
            rules: {
                jenis_pemohon: {
                    required: true
                },
                jenis_identitas: {
                    required: true
                },
                nomor_identitas: {
                    required: true
                },
                nama_pemohon: {
                    required: true
                },
                email: {
                    required: true
                },
                no_telp: {
                    required: true
                },
                alamat: {
                    required: true
                },
                pekerjaan: {
                    required: true
                },
                identity_url: {
                    required: true
                },
                rincian_informasi: {
                    required: true
                },
                tujuan_penggunaan_informasi: {
                    required: true
                },
                cara_pemakaian_informasi: {
                    required: true
                },
                cara_memperoleh_informasi: {
                    required: true
                },
                bentuk_informasi: {
                    required: true
                },
                cara_mendapatkan_salinan: {
                    required: true
                },
                captcha: {
                    required: true
                },

            },
            messages: {

            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
</script>


@endsection