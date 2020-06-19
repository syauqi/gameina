<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>Action - Category</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">

    <!--begin::Fonts -->
    <script src="https://kit.fontawesome.com/57635d64f6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Poppins:300,400,500,600,700"]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="<?=base_url('assets/')?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="<?=base_url('assets/')?>assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css"
        rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="<?=base_url('assets/')?>assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"
        rel="stylesheet" type="text/css" />
    <link
        href="<?=base_url('assets/')?>assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css"
        rel="stylesheet" type="text/css" />
    <link
        href="<?=base_url('assets/')?>assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/animate.css/animate.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/toastr/build/toastr.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/general/socicon/css/socicon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/custom/vendors/line-awesome/css/line-awesome.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets/')?>assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet"
        type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="<?=base_url('assets/')?>assets/demo/demo9/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->
    <link href="<?=base_url('assets/')?>css/storestyle.css" rel="stylesheet" type="text/css" />
    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="<?=base_url('assets/')?>assets/media/logos/favicon.ico" />
    <script>

    </script>
</head>

<!-- end::Head -->

<!-- begin::Body -->


<body style="overflow-x: hidden!important;"
    class="kt-page--loading-enabled kt-page--loading kt-page--fluid kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

    <!-- begin::Page loader -->

    <!-- end::Page Loader -->

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="<?=base_url('user')?>">
                <img alt="Logo" src="<?=base_url('assets/')?>assets/media/logos/logo-9-sm.png" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more-1"></i></button>
        </div>
    </div>

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
                    <div class="kt-container kt-container--fluid">

                        <!-- begin: Header Menu -->
                        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                                class="la la-close"></i></button>
                        <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid"
                            id="kt_header_menu_wrapper">
                            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                                <ul class="kt-menu__nav ">
                                    <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here"
                                        aria-haspopup="true"><a href="<?=base_url('user')?>" class="kt-menu__link"><span
                                                class="kt-menu__link-text">Dashboard</span></i></a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span
                                                class="kt-menu__link-text">Kategori</span><i
                                                class="kt-menu__hor-arrow la la-angle-down"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item kt-menu__item--active " aria-haspopup="true"><a
                                                        href="<?=base_url('store/action')?>" class="kt-menu__link "><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">Action</span></a></li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                        class="kt-menu__link "><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">Adventure</span></a>
                                                </li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                        class="kt-menu__link "><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">FPS</span></a>
                                                </li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                        class="kt-menu__link "><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">Strategy</span></a>
                                                </li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                        class="kt-menu__link "><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">Mystery</span></a>
                                                </li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                        class="kt-menu__link "><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">Multiplayer</span></a>
                                                </li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                        class="kt-menu__link "><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">Battle Royale</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#"
                                                        class="kt-menu__link kt-menu__toggle"><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">Paling Populer</span><i
                                                            class="kt-menu__hor-arrow la la-angle-right"></i></a>
                                                    <div
                                                        class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><span
                                                                        class="kt-menu__link-text">DOTA 2
                                                                    </span></a></li>
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><span
                                                                        class="kt-menu__link-text">CSGO
                                                                    </span></a></li>
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><span
                                                                        class="kt-menu__link-text">Paladins
                                                                    </span></a></li>
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><span
                                                                        class="kt-menu__link-text">Fortnite
                                                                    </span></a></li>
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><span
                                                                        class="kt-menu__link-text">Underlords</span></a>
                                                            </li>
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><span
                                                                        class="kt-menu__link-text">PUBG</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span
                                                class="kt-menu__link-text">Topup</span><i
                                                class="kt-menu__hor-arrow la la-angle-down"></i></a>
                                        <div class="kt-menu__submenu  kt-menu__submenu--fixed kt-menu__submenu--left"
                                            style="width:250px">
                                            <div class="kt-menu__subnav">
                                                <ul class="kt-menu__content">
                                                    <li class="kt-menu__item ">
                                                        <h3 class="kt-menu__heading kt-menu__toggle"><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                class="kt-menu__link-text">Game yang tersedia.</span><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                        <ul class="kt-menu__inner">
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><i
                                                                        class="kt-menu__link-icon flaticon-map"></i><span
                                                                        class="kt-menu__link-text">Mobile Legends
                                                                    </span></a></li>
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><i
                                                                        class="kt-menu__link-icon flaticon-user"></i><span
                                                                        class="kt-menu__link-text">Free Fire</span></a>
                                                            </li>
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><i
                                                                        class="kt-menu__link-icon flaticon-clipboard"></i><span
                                                                        class="kt-menu__link-text">Arena of valor
                                                                    </span></a></li>
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><i
                                                                        class="kt-menu__link-icon flaticon-graphic-1"></i><span
                                                                        class="kt-menu__link-text">PUBG
                                                                    </span></a></li>
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><i
                                                                        class="kt-menu__link-icon flaticon-graphic-2"></i><span
                                                                        class="kt-menu__link-text">Marvel : Super war
                                                                    </span></a></li>
                                                        </ul>
                                                    </li>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span
                                                class="kt-menu__link-text">Event</span><i
                                                class="kt-menu__hor-arrow la la-angle-down"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                        class="kt-menu__link "><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">Login event</span></a></li>
                                                <li class="kt-menu__item  kt-menu__item--submenu"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#"
                                                        class="kt-menu__link kt-menu__toggle"><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">New year event</span><i
                                                            class="kt-menu__hor-arrow la la-angle-right"></i></a>
                                                    <div
                                                        class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><i
                                                                        class="kt-menu__link-icon flaticon-users"></i><span
                                                                        class="kt-menu__link-text">Tentang Event
                                                                        Ini</span></a></li>
                                                            <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                                    class="kt-menu__link "><i
                                                                        class="kt-menu__link-icon flaticon-interface-1"></i><span
                                                                        class="kt-menu__link-text">Bantuan</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                        class="kt-menu__link "><i
                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                            class="kt-menu__link-text">Customer Service</span></a>
                                                </li>
                                    </li>
                                </ul>
                            </div>
                            </li>
                            </ul>
                        </div>
                    </div>

                    <!-- end: Header Menu -->

                    <!-- begin:: Brand -->
                    <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                        <a class="kt-header__brand-logo" href="<?=base_url('user')?>">
                            <p class="logo-tengah mt-3">Gameindonesia.</p>
                        </a>
                    </div>

                    <!-- end:: Brand -->

                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar kt-grid__item">

                        <!--begin: Search -->
                        <!-- <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"
                            id="kt_quick_search_toggle">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                <span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                <div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
                                    <form method="get" class="kt-quick-search__form">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="flaticon2-search-1"></i></span></div>
                                            <input type="text" class="form-control kt-quick-search__input"
                                                placeholder="Search...">
                                            <div class="input-group-append"><span class="input-group-text"><i
                                                        class="la la-close kt-quick-search__close"></i></span></div>
                                        </div>
                                    </form>
                                    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300"
                                        data-mobile-height="200">
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!--end: Search -->



                        <!--end: Cart -->

                        <!--begin: User bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">

                                <span class="kt-header__topbar-welcome kt-visible-desktop">Hai,</span>
                                <span class="kt-header__topbar-username kt-visible-desktop">
                                    <?php
$data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama'];
?>

                                </span>
                                <img alt="Pic" src="<?=base_url('assets/')?>profile_picture/default.jpg" />

                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span
                                    class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                                <!--begin: Head -->
                                <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                                    <div class="kt-user-card__avatar">
                                        <img class="kt-hidden-" alt="Pic"
                                            src="<?=base_url('assets/')?>profile_picture/default.jpg"" />

                                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                        <span class=" kt-badge kt-badge--username kt-badge--unified-success
                                            kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                                    </div>
                                    <div class="kt-user-card__name">
                                        <?php
$data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama'];
?>
                                    </div>
                                </div>

                                <!--end: Head -->

                                <!--begin: Navigation -->
                                <div class="kt-notification">
                                    <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                Profil saya
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Pengaturan Akun dan lainnya
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-mail kt-font-warning"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                Pesan saya
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Kotak masuk dan tugas
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                Aktivitas saya
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Log dan notifikasi
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-hourglass kt-font-brand"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                Wishlist saya
                                            </div>
                                            <div class="kt-notification__item-time">
                                                As you wish!
                                            </div>
                                        </div>
                                    </a>
                                    <div class="kt-notification__custom">
                                        <a href="<?=base_url('welcome/logout')?>" target=" _blank"
                                            class="btn btn-label-brand btn-sm btn-bold">Log Out</a>
                                    </div>
                                </div>

                                <!--end: Navigation -->
                            </div>
                        </div>

                        <!--end: User bar -->

                        <!--begin: Quick panel toggler -->
                        <div class="kt-header__topbar-item" data-toggle="kt-tooltip" title="Quick panel"
                            data-placement="top">
                            <div class="kt-header__topbar-wrapper">
                                <span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn"><i
                                        class="flaticon2-cube-1"></i></span>
                            </div>
                        </div>

                        <!--end: Quick panel toggler -->
                    </div>

                    <!-- end:: Header Topbar -->
                </div>
            </div>

            <!-- end:: Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron jumbotron-fluid aksi-jumbotron">
                        <div class="container" style="margin-left:100px !important;margin-top:60px;">
                            <h1 class="display-4 header-jumbotron">Kategori Action</h1>
                            <p class="lead text-jumbotron">Ketegangan, Keseruan dan Adrenaline menjadi satu jika
                                kamu
                                memainkan game action! <br> beli sekarang gamenya!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p class="text-center font-weight-bold" style="font-size:40px!important;">Jelajahi dan beli
                        game
                        action dibawah!</p>
                </div>
            </div>

            <div class="container ">
                <div class="row mt-5">



                    <div class="col-md-3 mt-4 " data-aos="fade-right" data-aos-duration="1500">
                        <div class="card card-game" style="width:16rem; border:none">
                            <img src="<?=base_url('assets/img/do.jpg')?>" class="card-img-top img-responsive" alt="...">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                        <p class="nama_game text-center font-weight-bold">Dreadout</p>
                                        <!-- <p class="card-text font-weight-bold"><?=base_url() . 'assets/games/' . $u->link_game;?>
                                    <br>
                                </p> -->
                                    </div>
                                    <div class="col-md-12 mx-auto">
                                        <br>
                                        <p class="deskripsi_game text-center" style="height:70px;">
                                            Game Horror Seru!</p>
                                        <!-- <p class="card-text font-weight-bold"><?=base_url() . 'assets/games/' . $u->link_game;?>
                                    <br>
                                </p> -->

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 mx-auto container-fluid">
                                        <a href="<?=base_url('user/dreadout')?>" class=" btn btn-danger
                                    btn-block btn-games font-weight-bold">Mainkan!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>




            <br>
            <br>
            <br>











            <!-- begin::Global Config(global config for global JS sciprts) -->
            <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#591df1",
                        "light": "#ffffff",
                        "dark": "#282a3c",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                        "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                    }
                }
            };
            </script>

            <!-- end::Global Config -->

            <!--begin:: Global Mandatory Vendors -->
            <script src="<?=base_url('assets/')?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/popper.js/dist/umd/popper.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/bootstrap/dist/js/bootstrap.min.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/js-cookie/src/js.cookie.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/moment/min/moment.min.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/sticky-js/dist/sticky.min.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/wnumb/wNumb.js" type="text/javascript">
            </script>

            <!--end:: Global Mandatory Vendors -->

            <!--begin:: Global Optional Vendors -->
            <script src="<?=base_url('assets/')?>assets/vendors/general/jquery-form/dist/jquery.form.min.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/block-ui/jquery.blockUI.js"
                type="text/javascript">
            </script>
            <script
                src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js"
                type="text/javascript"></script>
            <script
                src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js"
                type="text/javascript"></script>
            <script
                src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js"
                type="text/javascript"></script>
            <script
                src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js"
                type="text/javascript"></script>
            <script
                src="<?=base_url('assets/')?>assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/custom/components/vendors/bootstrap-switch/init.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/select2/dist/js/select2.full.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/typeahead.js/dist/typeahead.bundle.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/handlebars/dist/handlebars.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js"
                type="text/javascript"></script>
            <script
                src="<?=base_url('assets/')?>assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js"
                type="text/javascript"></script>
            <script
                src="<?=base_url('assets/')?>assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/nouislider/distribute/nouislider.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/owl.carousel/dist/owl.carousel.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/autosize/dist/autosize.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/clipboard/dist/clipboard.min.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/dropzone/dist/dropzone.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/summernote/dist/summernote.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/markdown/lib/markdown.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/custom/components/vendors/bootstrap-markdown/init.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/custom/components/vendors/bootstrap-notify/init.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/jquery-validation/dist/jquery.validate.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/jquery-validation/dist/additional-methods.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/custom/components/vendors/jquery-validation/init.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/toastr/build/toastr.min.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/raphael/raphael.js" type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/morris.js/morris.js" type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/chart.js/dist/Chart.bundle.js"
                type="text/javascript">
            </script>
            <script
                src="<?=base_url('assets/')?>assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/waypoints/lib/jquery.waypoints.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/counterup/jquery.counterup.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/es6-promise-polyfill/promise.min.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/sweetalert2/dist/sweetalert2.min.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/custom/components/vendors/sweetalert2/init.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/jquery.repeater/src/lib.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/jquery.repeater/src/jquery.input.js"
                type="text/javascript"></script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/jquery.repeater/src/repeater.js"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/general/dompurify/dist/purify.js"
                type="text/javascript">
            </script>

            <!--end:: Global Optional Vendors -->

            <!--begin::Global Theme Bundle(used by all pages) -->
            <script src="<?=base_url('assets/')?>assets/demo/demo9/base/scripts.bundle.js" type="text/javascript">
            </script>

            <!--end::Global Theme Bundle -->

            <!--begin::Page Vendors(used by this page) -->
            <script src="<?=base_url('assets/')?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.js"
                type="text/javascript"></script>
            <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"
                type="text/javascript">
            </script>
            <script src="<?=base_url('assets/')?>assets/vendors/custom/gmaps/gmaps.js" type="text/javascript">
            </script>

            <!--end::Page Vendors -->

            <!--begin::Page Scripts(used by this page) -->
            <script src="<?=base_url('assets/')?>assets/app/custom/general/dashboard.js" type="text/javascript">
            </script>

            <!--end::Page Scripts -->

            <!--begin::Global App Bundle(used by all pages) -->
            <script src="<?=base_url('assets/')?>assets/app/bundle/app.bundle.js" type="text/javascript">
            </script>

            <!--end::Global App Bundle -->
</body>

<!-- end::Body -->

</html>