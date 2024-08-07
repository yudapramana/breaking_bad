@extends('layouts.admin.master')
@section('title', $title)


@section('_styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">

    <style>
        .profile .profile-edit img {
            max-width: 120px;
        }

        #profile_photo_src {
            max-width: 120px;
        }

        .profile-edit {
            max-width: 120px;
        }

        .preserveLines {
            white-space: pre-wrap;
        }
    </style>
@endsection





@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">{{ $br1 }}</a></li>
                    <li class="breadcrumb-item active">{{ $br2 }}</li>
                </ol>
            </nav>
        </div>
        <section class="section">


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $title }} List</h5>

                            {{-- @if (!Auth::user()->hasRole('editor_utama'))
                                <div class="alert alert-warning  alert-dismissible fade show" role="alert">
                                    <h4 class="alert-heading m-0 p-0">Penting!</h4>
                                    <p class="m-0 p-0">Status <span class="badge bg-warning " id="btnGroupDrop1" type="button" data-bs-original-title="" title="">draft</span> berita akan berubah menjadi <span class="badge bg-success " id="btnGroupDrop1" type="button" data-bs-original-title="" title="">published</span>
                                        jika Editor Utama telah melakukan verval berita yang telah diinput.
                                    </p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif --}}
                            @if (!Auth::user()->hasRole('kontributor_daerah'))
                                <div class="alert alert-primary">
                                    <div class="row" id="filter_wrapper">

                                    </div>
                                </div>
                            @endif


                            <table class='table table-bordered display' id="example" style="width:100%; font-size:11pt!important;">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">date_add</th>
                                        <th scope="col">cover</th>
                                        <th scope="col">title</th>
                                        <th scope="col">author</th>
                                        <th scope="col">category</th>
                                        <th scope="col">highlights</th>
                                        <th scope="col">status</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('admin.posts._modal')


    </main>




@endsection


@section('_scripts')

    <!-- Styles -->
    {{--
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

    <!-- Scripts -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>





    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>

    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <!-- Sweet Alert -->
    <script src="{{ asset('assets/js/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success px-3 mx-3',
                cancelButton: 'btn btn-danger px-3 mx-3'
            },
            buttonsStyling: false
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Cover
        var coverWidget = cloudinary.createUploadWidget({
            cloudName: 'dezj1x6xp',
            uploadPreset: 'pandanviewmandeh',
            theme: 'minimal',
            multiple: false,
            max_file_size: 10048576,
            background: "white",
            quality: 20
        }, (error, result) => {
            if (!error && result && result.event === "success") {
                console.log('Info Arsip Masuk: ', result.info);
                var linklogo = result.info.secure_url;
                $('#new-cover_image_url').val(linklogo);

                $('#cover_image_url_btn').hide();

                $('.show-cover-box').show();
                $('#preview-cover').attr("src", linklogo);

            }
        });

        // document.getElementById("cover_image_url_btn").addEventListener("click", function() {
        //     coverWidget.open();
        // }, false);

        $('.select2').select2({
            theme: 'bootstrap-5',
            dropdownParent: $("#tambahGroup"),
        });

        $("#select2insidemodal").select2({
            dropdownParent: $("#myModal")
        });


        var id_kabkota_filter = 0;
        var id_status_filter = 'draft';

        var table = $('#example').DataTable({
            ajax: '{{ route('posts.index', ['category' => $category]) }}',
            // ajax: {
            //     "url": '{{ route('posts.index', ['category' => $category]) }}',
            //     "type": "GET",
            //     "data": function(d) {
            //         d.id_kabkota_filter = id_kabkota_filter;
            //         d.id_status_filter = id_status_filter;
            //     }
            // },
            processing: true,
            serverSide: true,
            orderable: false,
            searching: false,
            deferRender: true,
            sort: false,
            order: false,
            lengthChange: true,
            responsive: true,
            scrollX: true,
            autoWidth: true,
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            iDisplayLength: 10,
            dom: 'Bfrtip',
            buttons: [
                'pageLength', {
                    text: '<i class="fa fa-plus-circle"></i> Tambah',
                    attr: {
                        'title': 'Import Data'
                            // , 'data-bs-original-title': 'Import Data'
                            // , 'data-bs-target': '#tambahGroup'
                            // , 'data-bs-toggle': 'modal'
                            // , 'data-bs-backdrop': 'static'
                            // , 'data-bs-keyboard': 'false'
                            // , 'data-bs-title': 'Tambah Baru'
                            // , 'data-title': 'Tambah Baru'
                            ,
                        'type': 'button',
                        'id': 'addBtn',
                        'class': 'btn btn-primary',
                        'href': "{{ route('posts.create') }}",
                        'onclick': "window.location.href='{{ route('posts.create', ['category' => $category]) }}';"
                    },
                    action: function(e, dt, node, config) {
                        // alert('Button activated');
                    }
                }, {
                    text: '<i class="fa fa-refresh"></i>  Reload',
                    attr: {
                        'title': 'Refresh Table',
                        'class': 'btn btn-warning'
                    },
                    action: function(e, dt, node, config) {
                        dt.ajax.reload(null, false);
                        $('#example').block({
                            message: `Loading...`
                        });
                        setTimeout(function() {
                            $('#example').unblock();
                        }, 1500);
                    }
                }
            ],
            initComplete: function(settings, json) {
                console.log(json)

                table.buttons().container()
                    .appendTo('#example_wrapper .col-md-6:eq(0)');

                // $(json.html_filter).appendTo('#example_wrapper .col-md-6:eq(0) .dt-buttons');
                $(json.html_filter).appendTo('#filter_wrapper');

                $('.select2-filter').select2({
                    theme: 'bootstrap-5',
                });

                // $(document).on('change', '#id_unit_pengolah_filter', function(e) {
                $(document).on('select2:select', '.id_kabkota_filter', function(e) {
                    console.log('data filter')

                    id_kabkota_filter = $(this).val();
                    id_status_filter = $('.id_status_filter').val();


                    console.log('id_kabkota_filter')
                    console.log(id_kabkota_filter);
                    table.ajax.reload();

                });

                $(document).on('select2:select', '.id_status_filter', function(e) {
                    console.log('data filter')

                    id_unit_pengolah_filter = $('.id_unit_pengolah_filter').val();
                    id_status_filter = $(this).val();
                    table.ajax.reload();
                });

                //     console.log('json')
                //     console.log(json)
                // $(json.html_filter).appendTo(".dt-buttons"); //example is our table id
                // $(".dataTables_filter label").addClass("pull-right");
                // $(document).on('change', '#usulan-status', function(e) {
                //     status = $(this).val();
                //     console.log('status');

                // });
            },
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                className: 'text-center'
            }, {
                data: 'date_add',
                name: 'date_add'
            }, {
                data: 'image_url_can',
                name: 'image_url_can'
            }, {
                data: 'title_can',
                name: 'title_can'
            }, {
                data: 'author',
                name: 'author',
                className: 'preserveLines'
            }, {
                data: 'category_title',
                name: 'category_title',
                className: 'text-center'
            }, {
                data: 'highlights',
                name: 'highlights',
                className: 'text-center'
            }, {
                data: 'datastatus',
                name: 'datastatus',
                className: 'text-center'
            }, {
                data: 'action',
                name: 'action',
                className: 'text-center'
            }, ]
        });

        // align-middle

        // On Switch
        $(document).on('click', '#switchBtn', function(e) {
            var data = table.row($(this).parents('tr')).data();
            console.log(data);
            swalWithBootstrapButtons.fire({
                title: 'Apakah anda yakin akan mengubah status menjadi ' + $(this).data('status') + '?',
                text: "Status yang sudah diubah akan tercatat!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Ubah!',
                cancelButtonText: 'Tidak, batalkan!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    var formdata = $("#defForm").serialize() + "&switch_status=true&id_post=" + data.id + "&string_status=" + $(this).data('status');
                    console.log(formdata);

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('post.status.switch') }}",
                        data: formdata, // here $(this) refers to the ajax object not form
                        dataType: 'json', // let's set the expected response format
                        success: function(data) {
                            console.log(data);
                            if (data.success) {
                                $('#defModal').modal('hide');
                                table.ajax.reload(null, false);
                                Swal.fire(
                                    'Great!', 'The data has been updated!', 'success'
                                );
                            } else {
                                Swal.fire(
                                    'Error!', data.message, 'error'
                                );
                            }
                        },
                        error: function(err) {
                            if (err.status ==
                                422
                            ) { // when status code is 422, it's a validation issue
                                console.log(err.responseJSON);
                                // you can loop through the errors object and show it to the user
                                console.warn(err.responseJSON.errors);
                                // display errors on each form field
                                $('.ajax-invalid').remove();
                                $.each(err.responseJSON.errors, function(i, error) {
                                    var el = $(document).find('[name="' +
                                        i + '"]');
                                    el.after($('<span class="ajax-invalid" style="color: red;">' +
                                        error[0] + '</span>'));
                                });
                            } else if (err.status == 403) {
                                Swal.fire(
                                    'Unauthorized!', 'You are unauthorized to do the action', 'warning'
                                );
                            }
                        }
                    });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled', 'The {{ $title }} data is safe :)', 'error'
                    )
                }
            });
        });

        $(document).ready(function() {
            table.ajax.url('{{ route('posts.index', ['category' => $category]) }}').load();
            console.log('mana neeee');

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');

            $('.toggle-sidebar-btn').on('click', function() {
                setTimeout(function() {
                    table.columns.adjust();
                }, 500);
            });

            $(document).on("click", "#addBtn", function() {
                var title = $(this).data('title');
                $("#judul-modal").html(title);
                $("#id_gallery").val('');

                // $('#title').val('');
                // $('#deskripsi').val('');
                // $('#alt').val('');
                // $('#filter_tag').val('');

                $('#nama').prop('disabled', false);
                $('#deskripsi').prop('disabled', false);

                $('#cover_image_url_btn').show();
                // $('.show-cover-box-edit').hide();

                $('#content_image_url_btn').show();
                // $('.show-content-box-edit').hide();

                $('#new-cover_image_url_').val('');
                $('#new-content_image_url_').val('');

                $('.show-cover-box').hide();
                $('#preview-cover').attr("src", '');

                $('.show-content-box').hide();
                $('#preview-content').attr("src", '');


            });

            $(document).on("click", "#editBtn", function() {
                $("#judul-modal").html('Edit Data Group');
                var data = table.row($(this).parents('tr')).data();
                console.log(data);
                $("#id_post").val(data.id);

                $('#name').val(data.name);
                $('#slug').val(data.slug);
                $('#keywords').val(data.keywords);
                $('#meta_desc').val(data.meta_desc);

                $('#nama').prop('disabled', false);
                $('#deskripsi').prop('disabled', false);


                $('#new-cover_image_url').val(data.image_url);
                $('#cover_image_url_btn').hide();
                $('.show-cover-box').show();
                $('#preview-cover').attr("src", data.image_url);

                $('#new-content_image_url').val(data.content_image_url);
                $('#content_image_url_btn').hide();
                $('.show-content-box').show();
                $('#preview-content').attr("src", data.content_image_url);

            });


        });

        $("#submitGroupBtn").on("click", function(event) {
            event.preventDefault();

            $('.modalBox').block({
                message: null
            });

            $('#submitGroupBtn').prop("disabled", true);

            var formdata = $("#groupForm").serialize(); // here $(this) refere to the form its submitting
            console.log(formdata);

            url = $('#groupForm').attr('action');
            $.ajax({
                type: 'POST',
                url: url,
                data: formdata, // here $(this) refers to the ajax object not form
                dataType: 'json', // let's set the expected response format
                success: function(data) {
                    setTimeout(function() {
                        $('#submitGroupBtn').prop("disabled", false);
                        $('.modalBox').unblock();
                        console.log(data);
                        if (data.success == 'yeah') {
                            $('#tambahGroup').modal('hide');
                            table.ajax.reload(null, false);
                            Swal.fire(
                                'Great!', 'Data sukses di update!', 'success'
                            );
                        } else {
                            Swal.fire(
                                'Error!', data.message, 'error'
                            );
                        }


                    }, 1500);

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
                            el.after($('<span class="ajax-invalid" style="color: red;">' +
                                error[0] + '</span>'));
                        });
                    } else if (err.status == 403) {
                        Swal.fire(
                            'Unauthorized!', 'You are unauthorized to do the action', 'warning'
                        );

                    }
                }
            });



        });



        $(document).on('click', '#retry-cover-btn', function(e) {
            $('#cover_image_url_btn').show();
            $('.show-cover-box').hide();
        });

        $(document).on('click', '#retry-cover-btn-edit', function(e) {
            $('#cover_image_url_btn-edit').show();
            $('.show-cover-box-edit').hide();
        });

        $(document).on('click', '#retry-content-btn', function(e) {
            $('#content_image_url_btn').show();
            $('.show-content-box').hide();
        });

        $(document).on('click', '#retry-content-btn-edit', function(e) {
            $('#content_image_url_btn-edit').show();
            $('.show-content-box-edit').hide();
        });

        $(document).on("click", "#destroyBtn", function() {
            event.preventDefault();
            var idItem = $(this).data('id_item');

            swalWithBootstrapButtons.fire({
                title: 'Apakah anda yakin akan melakukan penghapusan data?',
                text: "Anda tidak dapat mengembalikan file yang sudah dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak, batalkan!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "{{ route('posts.delete', ':id') }}";
                    url = url.replace(':id', idItem);
                    $.ajax({
                        type: 'DELETE',
                        url: url,
                        dataType: 'json', // let's set the expected response format
                        success: function(data) {
                            console.log(data);
                            if (data.success) {
                                $('#tambahGroup').modal('hide');
                                swalWithBootstrapButtons.fire(
                                    'Dihapus!', 'Data berhasil dihapus', 'success'
                                )
                            } else {
                                Swal.fire(
                                    'Error!', data.message, 'error'
                                );
                            }
                            table.ajax.reload(null, false);
                        },
                        error: function(err) {
                            if (err.status ==
                                422
                            ) { // when status code is 422, it's a validation issue
                                console.log(err.responseJSON);
                                // you can loop through the errors object and show it to the user
                                console.warn(err.responseJSON.errors);
                                // display errors on each form field
                                $('.ajax-invalid').remove();
                                $.each(err.responseJSON.errors, function(i, error) {
                                    var el = $(document).find('[name="' +
                                        i + '"]');
                                    el.after($('<span class="ajax-invalid" style="color: red;">' +
                                        error[0] + '</span>'));
                                });
                            } else if (err.status == 403) {
                                Swal.fire(
                                    'Unauthorized!', 'You are unauthorized to do the action', 'warning'
                                );
                            }
                        }
                    });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Dibatalkan!', 'Data Aman', 'error'
                    )
                }
            });

        });
    </script>
@endsection
