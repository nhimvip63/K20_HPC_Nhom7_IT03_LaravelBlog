@include('layout.head')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('layout.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('layout.navbar')
                <!-- / Navbar -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <!-- Content wrapper -->
                        @yield('content')
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="demo-inline-spacing">
                                        <!-- Basic Pagination -->
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li class="page-item first">
                                                    <a class="page-link" href="javascript:void(0);"><i
                                                            class="tf-icon bx bx-chevrons-left"></i></a>
                                                </li>
                                                <li class="page-item prev">
                                                    <a class="page-link" href="javascript:void(0);"><i
                                                            class="tf-icon bx bx-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0);">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0);">2</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="javascript:void(0);">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0);">4</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0);">5</a>
                                                </li>
                                                <li class="page-item next">
                                                    <a class="page-link" href="javascript:void(0);"><i
                                                            class="tf-icon bx bx-chevron-right"></i></a>
                                                </li>
                                                <li class="page-item last">
                                                    <a class="page-link" href="javascript:void(0);"><i
                                                            class="tf-icon bx bx-chevrons-right"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!--/ Basic Pagination -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    @include('layout.footer')
</body>
