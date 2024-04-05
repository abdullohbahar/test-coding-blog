<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('./dashboard-assets/library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./dashboard-assets/library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('./dashboard-assets/library/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('./dashboard-assets/library/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('./dashboard-assets/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./dashboard-assets/assets/css/components.css') }}">
    @stack('addons-css')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="#" class="rounded-circle mr-1">

                            <div class="d-sm-none d-lg-inline-block">
                                {{ auth()->user()->display_name ?? '' }}
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt mt-2"></i> Logout
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand mb-4">
                        <a href="#">
                        </a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#">
                            <img src="{{ asset('./assets/img/icon-eastvara.png') }}" alt="logo" class="w-75">
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="nav-item {{ $active == 'dashboard' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-chart-pie"></i>
                                <span>Beranda</span></a>
                        </li>
                        <li class="nav-item {{ $active == 'post' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.post') }}"><i class="fas fa-chart-pie"></i>
                                <span>Post</span></a>
                        </li>
                    </ul>
                </aside>
            </div>

            @yield('content')

            <footer class="main-footer">
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('./dashboard-assets/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('./dashboard-assets/library/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('./dashboard-assets/library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('./dashboard-assets/library/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('./dashboard-assets/library/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('./dashboard-assets/library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <!-- Template JS File -->
    <script src="{{ asset('./dashboard-assets/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('./dashboard-assets/assets/js/custom.js') }}"></script>
    <script src="{{ asset('./alert.js') }}"></script>

    <!-- Page Specific JS File -->
    @stack('addons-js')

    {{-- Notifiaction --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('./dashboard-assets/assets/js/page/index.js') }}"></script>
    @if (session()->has('message'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{ session('message') }}'
            })
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: '{{ session('error') }}'
            })
        </script>
    @endif
</body>

</html>
