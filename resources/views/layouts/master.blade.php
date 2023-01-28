<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords"
        content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}" />
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">
</head>

<!-- Body-->

<body class="handheld-toolbar-enabled">
    <!-- Navbar Marketplace-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="bg-light shadow-sm navbar-sticky">
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand w-100 text-center me-0" href="{{ route('kelas-mahasiswa.index') }}">
                    Pendataan Kelas Mahasiswa Teknologi Informasi
                </a>
                <a class="navbar-brand d-sm-none me-2 order-lg-1" href="{{ route('kelas-mahasiswa.index') }}">
                    Pendataan Kelas Mahasiswa TI
                </a>
            </div>
        </div>
    </header>

    <!-- Dashboard header-->
    <div class="page-title-overlap bg-info pt-4">
        <div class="container">
            <div class="row gx-5">
                <div class="col-12 pb-1">
                    <h3 class="text-light fs-lg mb-0 text-end">Vidya Chandradev</h3>
                    <span class="d-block text-light fs-ms text-end opacity-85 py-1">1905551067</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
            <div class="row">
                <!-- Sidebar-->
                <aside class="col-lg-4 pe-xl-5">
                    <!-- Account menu toggler (hidden on screens larger 992px)-->
                    <div class="d-block d-lg-none p-4">
                        <a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse">
                            <i class="ci-menu me-2"></i>Dashboard menu
                        </a>
                    </div>
                    <!-- Actual menu-->
                    <div class="h-100 border-end mb-2">
                        <div class="d-lg-block collapse" id="account-menu">
                            <div class="bg-secondary p-4">
                                <h3 class="fs-sm mb-0 text-muted">Dashboard</h3>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="border-bottom mb-0">
                                    <a class="nav-link-style d-flex align-items-center px-4 py-3"
                                        href="{{ route('kelas-mahasiswa.index' )}}">
                                        <i class="ci-help opacity-60 me-2"></i>Data Kelas
                                    </a>
                                </li>
                                <li class="border-bottom mb-0">
                                    <a class="nav-link-style d-flex align-items-center px-4 py-3"
                                        href="{{ route('kelas.index' )}}">
                                        <i class="ci-loudspeaker opacity-60 me-2"></i>Kelas
                                    </a>
                                </li>
                                <li class="mb-0">
                                    <a class="nav-link-style d-flex align-items-center px-4 py-3"
                                        href="{{ route('mahasiswas.index') }}">
                                        <i class="ci-user opacity-60 me-2"></i>Mahasiswa
                                    </a>
                                </li>
                            </ul>
                            <hr>
                        </div>
                    </div>
                </aside>
                <!-- Content-->
                <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
                    <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                        @yield('content')
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer>
        <div class="container pt-4 bg-dark">
            <div class="widget w-100 mb-4 text-center mx-auto" style="max-width: 28rem;">
                <h3 class="widget-title text-light">Kelompok I</h3>
                <span class="d-block text-light fs-ms">Midtest Praktikum Pemrograman Internet</span>
            </div>
            <hr class="hr-light mb-3">
            <div class="d-md-flex justify-content-between pt-0">
                <div class="py-2 fs-xs text-light opacity-60 text-center text-md-start">© Vidya Chandradev</div>
            </div>
        </div>
    </footer>

    <!-- Back To Top Button-->
    <a class="btn-scroll-top" href="#top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon ci-arrow-up"></i>
    </a>

    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/jquery/jquery-3.6.0.slim.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>

    @yield('delete-scripts')
</body>

</html>
