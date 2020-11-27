<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Base Url -->
    <meta name="base-url" content="{{ url('/') }}">
    <!-- Title -->
    <title>{{ get_option('site_title') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('public/backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/vendors/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/vendors/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/vendors/bootstrap-datepicker/css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/videopopup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap-tagsinput.css') }}">
    @yield('css-stylesheet')
    <!-- icon -->
    <link rel="icon" type="image/png" href="{{ get_icon() }}" />

    <script>
        var _url = '{{ url('/') }}'
    </script>

</head>

<body>
    <div class="container-scroller">
        <div id="preloader">
            <div class="loader__spin"></div>
        </div>
        <div id="main_modal" class="modal fade" role="dialog" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="col-md-12">
                        <div class="alert alert-danger" style="display:none; margin: 15px;"></div>
                        <div class="alert alert-success" style="display:none; margin: 15px;"></div>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                            {{ _lang('Close') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ url('dashboard') }}">
                    <img src="{{ get_logo() }}" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="{{ url('dashboard') }}">
                    <img src="{{ get_logo() }}" alt="logo" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">{{ _lang('Notifications') }}</h6>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">{{ _lang('See all notifications') }}</h6>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="{{ asset('public/uploads/images/' . Auth::user()->profile) }}" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">{{ _lang('Hi') }},
                                    {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">

                            <a class="dropdown-item ajax-modal" href="{{ url('profile/show') }}"
                                title="{{ _lang('Profile Details') }}">
                                <i class="mdi mdi-account mr-2 text-success"></i>
                                {{ _lang('Profile') }}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item ajax-modal" href="{{ url('profile/edit') }}"
                                title="{{ _lang('Edit Profile') }}">
                                <i class="mdi mdi-settings mr-2 text-primary"></i>
                                {{ _lang('Edit Profile') }}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item ajax-modal" href="{{ url('password/change') }}"
                                title="{{ _lang('Change Password') }}">
                                <i class="mdi mdi-lock mr-2 text-warning"></i>
                                {{ _lang('Change Password') }}
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}">
                                <i class="mdi mdi-logout mr-2 text-danger"></i>
                                {{ _lang('Logout') }}
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('dashboard') }}">
                            <span class="menu-title">{{ _lang('Dashboard') }}</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#Posts" aria-expanded="false"
                            aria-controls="settings">
                            <span class="menu-title">{{ _lang('Posts') }}</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-newspaper menu-icon"></i>
                        </a>
                        <div class="collapse" id="Posts">
                            <ul class="nav flex-column sub-menu">
                                @usertype('admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('categories') }}">
                                        {{ _lang('Categories') }}
                                    </a>
                                </li>
                                @endusertype
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('posts') }}">
                                        {{ _lang('Posts') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @usertype('admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('users') }}">
                            <span class="menu-title">{{ _lang('Users') }}</span>
                            <i class="mdi mdi-account menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#webiste" aria-expanded="false"
                            aria-controls="settings">
                            <span class="menu-title">{{ _lang('Website Settings') }}</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-newspaper menu-icon"></i>
                        </a>
                        <div class="collapse" id="webiste">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('theme_option') }}">
                                        {{ _lang('Theme Option') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>@endusertype
                      @usertype('editor')
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#webiste" aria-expanded="false"
                            aria-controls="settings">
                            <span class="menu-title">{{ _lang('Website Settings') }}</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-newspaper menu-icon"></i>
                        </a>
                        <div class="collapse" id="webiste">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('theme_option') }}">
                                        {{ _lang('Theme Option') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>@endusertype

                     @usertype('admin')
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#administration" aria-expanded="false"
                            aria-controls="settings">
                            <span class="menu-title">{{ _lang('Administration') }}</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-settings menu-icon"></i>
                        </a>
                        <div class="collapse" id="administration">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('general_settings') }}">
                                        {{ _lang('General Settings') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('languages') }}">
                                        {{ _lang('Languages') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('database_backup') }}">
                                        {{ _lang('Database Backup') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endusertype
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}" target="_blank">
                            <span class="menu-title">{{ _lang('Website View') }}</span>
                            <i class="mdi mdi-cellphone-link menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <a class="page-title-icon bg-gradient-primary text-white mr-2"
                                href="{{ url('dashboard') }}">
                                <i class="mdi mdi-home"></i>
                            </a>
                            <span></span>
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('dashboard') }}">{{ _lang('Dashboard') }}</a>
                                </li>
                                @if( ! Request::is('dashboard'))
                                @php
                                $count = count(Request::segments());
                                $segments = '';
                                @endphp
                                @foreach(Request::segments() as $key => $segment)
                                @php
                                if (is_numeric($segment)){
                                continue;
                                $count --;
                                }
                                $segments .= '/' . $segment;
                                @endphp
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="{{ url($segments) }}" {{ ($count == $key + 1) ? ' class=disabled' : '' }}>
                                        {{ ucwords(str_replace('_', ' ', $segment)) }}
                                    </a>
                                </li>
                                @endforeach
                                @endif
                            </ol>
                        </nav>
                    </div>
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                            Copyright © 2020.
                            All rights reserved.
                        </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                            Hand-crafted & made with
                            <i class="mdi mdi-heart text-danger"></i>
                        </span>
                    </div>
                </footer>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script type="text/javascript" src="{{ asset('public/backend/vendors/js/vendor.bundle.base.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/vendors/select2/select2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/vendors/summernote/summernote-bs4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/off-canvas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/videopopup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/hoverable-collapse.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/misc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/dropify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/print.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/sweetalert2.all.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/clipboard.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/jquery-sortable-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/bootstrap-tagsinput.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/vendors/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/ckeditor.js') }}"></script>
    {{-- js for dashboard only --}}
    @if( ! Request::is('dashboard'))
    <script type="text/javascript" src="{{ asset('public/backend/js/dashboard.js') }}"></script>
    @endif
    {{-- app --}}
    <script type="text/javascript" src="{{ asset('public/backend/js/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend/js/app.js') }}"></script>
    {{-- extra js --}}
    @yield('js-script')
    <script type="text/javascript">
        $(document).ready(function () {
            @if(!Request::is('dashboard'))
            $(".page-title span").text($(".card-title").first().text());
            $('title').append(' | ' + $(".card-title").first().text());
            @else
            $('title').append(' | {{ _lang('Home') }}');
            @endif
            $(".data-table").DataTable({
                responsive: true,
                "bAutoWidth": false,
                "ordering": false,
                "language": {
                    "decimal": "",
                    "emptyTable": "{{ _lang('No Data Found') }}",
                    "info": "{{ _lang('Showing') }} _START_ {{ _lang('to') }} _END_ {{ _lang('of') }} _TOTAL_ {{ _lang('Entries') }}",
                    "infoEmpty": "{{ _lang('Showing 0 To 0 Of 0 Entries') }}",
                    "infoFiltered": "(filtered from _MAX_ total entries)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "{{ _lang('Show') }} _MENU_ {{ _lang('Entries') }}",
                    "loadingRecords": "{{ _lang('Loading...') }}",
                    "processing": "{{ _lang('Processing...') }}",
                    "search": "{{ _lang('Search') }}",
                    "zeroRecords": "{{ _lang('No matching records found') }}",
                    "paginate": {
                        "first": "{{ _lang('First') }}",
                        "last": "{{ _lang('Last') }}",
                        "next": "{{ _lang('Next') }}",
                        "previous": "{{ _lang('Previous') }}"
                    },
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                },
                lengthChange: false,
                dom: 'Blfrtip',
                buttons: [{
                        extend: 'copy',
                        exportOptions: {
                            columns: "thead th:not(.no-export)"
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: "thead th:not(.no-export)"
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: "thead th:not(.no-export)"
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: "thead th:not(.no-export)"
                        }
                    }
                ],
            });
            @if(Session::has('success'))
                toast('success', '{{ session('success') }}');
            @endif
            @if(Session::has('error'))
                toast('error', '{{ session('error') }}');
            @endif
            @foreach($errors->all() as $error)
                toast('error', '{{ $error }}');
            @endforeach
        });

    </script>
</body>

</html>
