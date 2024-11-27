<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa – Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Noa – Bootstrap 5 Admin & Dashboard Template</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="../assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="../assets/switcher/demo.css" rel="stylesheet" />

</head>

<body class="ltr app sidebar-mini light-mode">
    @yield('content')
    <div class="page">
        <div class="page-main">
            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-xl-block">
                            <input class="form-control" placeholder="Search for results..." type="search">
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                                </svg>
                            </button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-xl-none d-md-block d-none">
                                <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        viewBox="0 0 24 24">
                                        <path fill=""
                                            d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                                    </svg>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="demo-icon nav-link icon fe-spin">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M11.5,7.9c-2.3,0-4,1.9-4,4.2s1.9,4,4.2,4c2.2,0,4-1.9,4-4.1c0,0,0-0.1,0-0.1C15.6,9.7,13.7,7.9,11.5,7.9z M14.6,12.1c0,1.7-1.5,3-3.2,3c-1.7,0-3-1.5-3-3.2c0-1.7,1.5-3,3.2-3C13.3,8.9,14.7,10.3,14.6,12.1C14.6,12,14.6,12.1,14.6,12.1z M20,13.1c-0.5-0.6-0.5-1.5,0-2.1l1.4-1.5c0.1-0.2,0.2-0.4,0.1-0.6l-2.1-3.7c-0.1-0.2-0.3-0.3-0.5-0.2l-2,0.4c-0.8,0.2-1.6-0.3-1.9-1.1l-0.6-1.9C14.2,2.1,14,2,13.8,2H9.5C9.3,2,9.1,2.1,9,2.3L8.4,4.3C8.1,5,7.3,5.5,6.5,5.3l-2-0.4C4.3,4.9,4.1,5,4,5.2L1.9,8.8C1.8,9,1.8,9.2,2,9.4l1.4,1.5c0.5,0.6,0.5,1.5,0,2.1L2,14.6c-0.1,0.2-0.2,0.4-0.1,0.6L4,18.8c0.1,0.2,0.3,0.3,0.5,0.2l2-0.4c0.8-0.2,1.6,0.3,1.9,1.1L9,21.7C9.1,21.9,9.3,22,9.5,22h4.2c0.2,0,0.4-0.1,0.5-0.3l0.6-1.9c0.3-0.8,1.1-1.2,1.9-1.1l2,0.4c0.2,0,0.4-0.1,0.5-0.2l2.1-3.7c0.1-0.2,0.1-0.4-0.1-0.6L20,13.1z M18.6,18l-1.6-0.3c-1.3-0.3-2.6,0.5-3,1.7L13.4,21H9.9l-0.5-1.6c-0.4-1.3-1.7-2-3-1.7L4.7,18l-1.8-3l1.1-1.3c0.9-1,0.9-2.5,0-3.5L2.9,9l1.8-3l1.6,0.3c1.3,0.3,2.6-0.5,3-1.7L9.9,3h3.5l0.5,1.6c0.4,1.3,1.7,2,3,1.7L18.6,6l1.8,3l-1.1,1.3c-0.9,1-0.9,2.5,0,3.5l1.1,1.3L18.6,18z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo"
                                alt="logo">
                            <img src="../assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a><!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg>
                        </div>
                        <ul class="side-menu">
                            <li>
                                <h3>Menu</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide"
                                    href="{{ url('/dashboard')}}">
                                    <i class="fe fe-home" data-bs-toggle="tooltip" title="fe fe-home"></i>
                                    <span class="side-menu__label"> </span>
                                    <span class="side-menu__label">Dashboard</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/sanpham')}}">
                                    <i class="fe fe-package" data-bs-toggle="tooltip" title="fe fe-package"></i>
                                    <span class="side-menu__label"> </span>
                                    <span class="side-menu__label">Sản phẩm</span><i class=""></i>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/danhmuc')}}">
                                    <i class="fe fe-grid" data-bs-toggle="tooltip" title="fe fe-grid"></i>
                                    <span class="side-menu__label"> </span>
                                    <span class="side-menu__label">Danh mục sản phẩm</span><i class=""></i>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/donhang') }}">
                                    <i class="fe fe-file-text" data-bs-toggle="tooltip" title="fe fe-file-text"></i>
                                    <span class="side-menu__label"> </span>
                                    <span class="side-menu__label">Đơn hàng</span><i class=""></i></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/thongke') }}">
                                    <i class="fe fe-trending-up" data-bs-toggle="tooltip" title="fe fe-trending-up"></i>
                                    <span class="side-menu__label"> </span>
                                    <span class="side-menu__label">Thống kê</span><i class=""></i></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('comments.index') }}">
                                    <i class="fe fe-message-square" data-bs-toggle="tooltip"
                                        title="fe fe-message-square"></i>
                                    <span class="side-menu__label"> </span>
                                    <span class="side-menu__label">Bình luận</span><i class=""></i>
                                </a>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('contact.index') }}">
                                    <i class="fe fe-phone" data-bs-toggle="tooltip" title="fe fe-phone"></i>
                                    <span class="side-menu__label"> </span>
                                    <span class="side-menu__label">Liên hệ</span><i class=""></i>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide"
                                    href="{{ route('contact.inquiries')}}">
                                    <i class="fe fe-phone" data-bs-toggle="tooltip" title="fe fe-phone"></i>
                                    <span class="side-menu__label"> </span>
                                    <span class="side-menu__label">Liên hệ khách hàng</span><i class=""></i>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/info') }}">
                                    <i class="fe fe-info" data-bs-toggle="tooltip" title="fe fe-info"></i>
                                    <span class="side-menu__label"> </span>
                                    <span class="side-menu__label">Thông tin website</span><i class=""></i></a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!--/APP-SIDEBAR-->
            <!--app-content open-->
            <div class="app-content main-content mt-0">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <div>
                                <h1 class="page-title">Dashboard</h1>
                            </div>
                            <div class="ms-auto pageheader-btn">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            @yield('main_content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Nhóm 2 © 2024 <a href="#">ShopShoes</a>. Designed with <span
                            class="fa fa-heart text-danger"></span> by <a href="#"> Nhóm 2 </a> All rights reserved
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- APEXCHART JS -->
    <script src="../assets/js/apexcharts.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="../assets/js/circle-progress.min.js"></script>

    <!-- INTERNAL DATA-TABLES JS-->
    <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- INDEX JS -->
    <script src="../assets/js/index1.js"></script>

    <!-- REPLY JS-->
    <script src="../assets/js/reply.js"></script>

    <!-- PERFECT SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll.js"></script>

    <!-- STICKY JS -->
    <script src="../assets/js/sticky.js"></script>

    <!-- COLOR THEME JS -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>