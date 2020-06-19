<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>GameINA | Store</title>
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

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="<?=base_url('assets/')?>assets/media/logos/favicon.ico" />
    <script>

    </script>
</head>

<!-- end::Head -->

<!-- begin::Body -->


<body
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
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span
                                                class="kt-menu__link-text">Dashboard</span></i></a>

                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                            class="kt-menu__link kt-menu__toggle"><span
                                                class="kt-menu__link-text">Kategori</span><i
                                                class="kt-menu__hor-arrow la la-angle-down"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " aria-haspopup="true"><a
                                                        href="<?=base_url('user/action')?>" class="kt-menu__link "><i
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
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
                <div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
                    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

                        <!-- begin:: Subheader -->
                        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                            <div class="kt-subheader__main">
                                <h3 class="kt-subheader__title">
                                    Dashboard </h3>
                                <span class="kt-subheader__separator kt-hidden"></span>

                            </div>
                            <div class="kt-subheader__toolbar">
                                <div class="kt-subheader__wrapper">
                                    <a href="#" class="btn kt-subheader__btn-daterange"
                                        id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip"
                                        title="Select dashboard daterange" data-placement="left">
                                        <span class="kt-subheader__btn-daterange-title"
                                            id="kt_dashboard_daterangepicker_title">Tanggal</span>&nbsp;
                                        <span class="kt-subheader__btn-daterange-date"
                                            id="kt_dashboard_daterangepicker_date"><?php echo date('d / M / y'); ?></span>

                                        <!--<i class="flaticon2-calendar-1"></i>-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--sm">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z"
                                                    id="check" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z"
                                                    id="Combined-Shape" fill="#000000" />
                                            </g>
                                        </svg> </a>
                                </div>
                            </div>
                        </div>

                        <!-- end:: Subheader -->

                        <!-- begin:: Content -->
                        <div class="kt-content kt-grid__item kt-grid__item--fluid">

                            <!--Begin::Dashboard 1-->

                            <!--Begin::Section-->
                            <div class="row">
                                <div class="col-xl-4">

                                    <!--begin:: Widgets/Activity-->
                                    <div
                                        class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
                                        <div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Event terbaru
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__body">
                                            <div class="kt-widget17">
                                                <div class="kt-widget17__visual  kt-portlet-fit--top kt-portlet-fit--sides"
                                                    style="background-color: #d6011d">
                                                    <div class="">
                                                        <img class="img-fluid"
                                                            src="<?=base_url('assets/')?>img/user.png" alt="" srcset="">
                                                    </div>
                                                </div>
                                                <div class="kt-widget17__stats">
                                                    <div class="kt-widget17__items">
                                                        <div class="kt-widget17__item">
                                                            <span class="kt-widget17__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1"
                                                                    class="kt-svg-icon kt-svg-icon--brand">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect id="bound" x="0" y="0" width="24"
                                                                            height="24" />
                                                                        <path
                                                                            d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                                            id="Combined-Shape" fill="#000000" />
                                                                        <rect id="Rectangle-Copy-2" fill="#000000"
                                                                            opacity="0.3"
                                                                            transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                                            x="16.3255682" y="2.94551858" width="3"
                                                                            height="18" rx="1" />
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="kt-widget17__subtitle">
                                                                Game dimiliki
                                                            </span>
                                                            <span class="kt-widget17__desc">
                                                                Kamu tidak mempunyai game.
                                                            </span>
                                                        </div>
                                                        <div class="kt-widget17__item">
                                                            <span class="kt-widget17__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1"
                                                                    class="kt-svg-icon kt-svg-icon--success">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <polygon id="Bound"
                                                                            points="0 0 24 0 24 24 0 24" />
                                                                        <path
                                                                            d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                                            id="Shape" fill="#000000"
                                                                            fill-rule="nonzero" />
                                                                        <path
                                                                            d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                                            id="Path" fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="kt-widget17__subtitle">
                                                                Top up dilakukan
                                                            </span>
                                                            <span class="kt-widget17__desc">
                                                                Kamu belum melakukan top-up
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="kt-widget17__items">
                                                        <div class="kt-widget17__item">
                                                            <span class="kt-widget17__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1"
                                                                    class="kt-svg-icon kt-svg-icon--warning">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect id="bound" x="0" y="0" width="24"
                                                                            height="24" />
                                                                        <path
                                                                            d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                                            id="Combined-Shape" fill="#000000"
                                                                            opacity="0.3" />
                                                                        <path
                                                                            d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                                            id="Combined-Shape" fill="#000000" />
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="kt-widget17__subtitle">
                                                                Pesan
                                                            </span>
                                                            <span class="kt-widget17__desc">
                                                                Tidak ada pesan.
                                                            </span>
                                                        </div>
                                                        <div class="kt-widget17__item">
                                                            <span class="kt-widget17__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1"
                                                                    class="kt-svg-icon kt-svg-icon--danger">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect id="bound" x="0" y="0" width="24"
                                                                            height="24" />
                                                                        <path
                                                                            d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                                            id="Combined-Shape" fill="#000000"
                                                                            opacity="0.3" />
                                                                        <path
                                                                            d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                                            id="Rectangle-102-Copy" fill="#000000" />
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="kt-widget17__subtitle">
                                                                Wishlist
                                                            </span>
                                                            <span class="kt-widget17__desc">
                                                                Wishlist kamu kosong.
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!--end:: Widgets/Activity-->
                                    </div>

                                </div>

                                <!--End::Section-->

                                <!--Begin::Section-->
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
                                            <div
                                                class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                                                <div class="kt-portlet__head-label">
                                                    <h1 class="kt-portlet__head-title">
                                                        Riwayat Pembelian.
                                                    </h1>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="dropdown dropdown-inline">
                                                        <button type="button"
                                                            class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="flaticon-more-1"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i
                                                                            class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                        <span class="kt-nav__link-text">Reports</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                        <span class="kt-nav__link-text">Messages</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i
                                                                            class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                        <span class="kt-nav__link-text">Charts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i
                                                                            class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                        <span class="kt-nav__link-text">Members</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i
                                                                            class="kt-nav__link-icon flaticon2-settings"></i>
                                                                        <span class="kt-nav__link-text">Settings</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body kt-portlet__body--fit">

                                                <!--begin: Datatable -->
                                                <div class="kt-datatable" id="kt_datatable_latest_orders"></div>

                                                <!--end: Datatable -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">

                                        <!--begin:: Widgets/Blog-->
                                        <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                            <div class="kt-portlet__body kt-portlet__body--fit">
                                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides">
                                                    <img src="<?=base_url('assets/')?>img/user.png" class=" img-fluid"
                                                        alt="" srcset="">
                                                    <h1 class="kt-widget19__title kt-font-light">
                                                        Valentine's event madness.
                                                    </h1>
                                                    <div class="kt-widget19__shadow"></div>
                                                    <div class="kt-widget19__labels">
                                                        <a href="#"
                                                            class="btn btn-label-light-o2 btn-bold btn-sm ">Event</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">
                                                <div class="kt-widget19__wrapper">
                                                    <div class="kt-widget19__content">
                                                        <div class="kt-widget19__userpic">
                                                            <img src="<?=base_url('assets/')?>assets/media/users/user9.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="kt-widget19__info">
                                                            <a href="#" class="kt-widget19__username">
                                                                Syauqi Zaidan Khairan Khalaf
                                                            </a>
                                                            <span class="kt-widget19__time">
                                                                Admin , UX/UI Designer and Leader @ Descienfy
                                                            </span>
                                                        </div>
                                                        <div class="kt-widget19__stats">
                                                            <span class="kt-widget19__number kt-font-brand">
                                                                18
                                                            </span>
                                                            <a href="#" class="kt-widget19__comment">
                                                                Likes
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="kt-widget19__text">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        scrambled a type specimen book text of the dummy text of the
                                                        printing printing and typesetting industry scrambled dummy
                                                        text
                                                        of the printing.
                                                    </div>
                                                </div>
                                                <div class="kt-widget19__action">
                                                    <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read
                                                        More...</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!--end:: Widgets/Blog-->
                                    </div>
                                </div>

                                <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                    <div class="kt-portlet__body kt-portlet__body--fit">
                                        <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides">
                                            <img src="<?=base_url('assets/')?>img/user2.png" class=" img-fluid" alt=""
                                                srcset="">
                                            <h1 class="kt-widget19__title kt-font-light">
                                                New year event madness.
                                            </h1>
                                            <div class="kt-widget19__shadow"></div>
                                            <div class="kt-widget19__labels">
                                                <a href="#" class="btn btn-label-light-o2 btn-bold btn-sm ">Event</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="kt-widget19__wrapper">
                                            <div class="kt-widget19__content">
                                                <div class="kt-widget19__userpic">
                                                    <img src="<?=base_url('assets/')?>assets/media/users/user6.jpg"
                                                        alt="">
                                                </div>
                                                <div class="kt-widget19__info">
                                                    <a href="#" class="kt-widget19__username">
                                                        Askal Drajat Fachrezi
                                                    </a>
                                                    <span class="kt-widget19__time">
                                                        UX Designer @ Descienfy
                                                    </span>
                                                </div>
                                                <div class="kt-widget19__stats">
                                                    <span class="kt-widget19__number kt-font-brand">
                                                        5
                                                    </span>
                                                    <a href="#" class="kt-widget19__comment">
                                                        Likes
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="kt-widget19__text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                scrambled a type specimen book text of the dummy text of the
                                                printing printing and typesetting industry scrambled dummy text
                                                of the printing.
                                            </div>
                                        </div>
                                        <div class="kt-widget19__action">
                                            <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read
                                                More...</a>
                                        </div>
                                    </div>
                                </div>

                                <!--end:: Widgets/Blog-->


                                <!--begin:: Widgets/Blog-->
                                <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                    <div class="kt-portlet__body kt-portlet__body--fit">
                                        <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides">
                                            <img src="<?=base_url('assets/')?>img/user3.png" class=" img-fluid" alt=""
                                                srcset="">
                                            <h1 class="kt-widget19__title kt-font-light">
                                                Login steak event madness.
                                            </h1>
                                            <div class="kt-widget19__shadow"></div>
                                            <div class="kt-widget19__labels">
                                                <a href="#" class="btn btn-label-light-o2 btn-bold btn-sm ">Event</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="kt-widget19__wrapper">
                                            <div class="kt-widget19__content">
                                                <div class="kt-widget19__userpic">
                                                    <img src="<?=base_url('assets/')?>assets/media/users/user7.jpg"
                                                        alt="">
                                                </div>
                                                <div class="kt-widget19__info">
                                                    <a href="#" class="kt-widget19__username">
                                                        Luthfi Ramdhan Faddilah
                                                    </a>
                                                    <span class="kt-widget19__time">
                                                        Tester @ Descienfy
                                                    </span>
                                                </div>
                                                <div class="kt-widget19__stats">
                                                    <span class="kt-widget19__number kt-font-brand">
                                                        18
                                                    </span>
                                                    <a href="#" class="kt-widget19__comment">
                                                        Likes
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="kt-widget19__text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                scrambled a type specimen book text of the dummy text of the
                                                printing printing and typesetting industry scrambled dummy text
                                                of the printing.
                                            </div>
                                        </div>
                                        <div class="kt-widget19__action">
                                            <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read
                                                More...</a>
                                        </div>
                                    </div>
                                </div>

                                <!--end:: Widgets/Blog-->
                            </div>

                            <!--begin:: Widgets/Blog-->
                            <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                <div class="kt-portlet__body kt-portlet__body--fit">
                                    <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides">
                                        <img src="<?=base_url('assets/')?>img/user4.png" class=" img-fluid" alt=""
                                            srcset="">
                                        <h1 class="kt-widget19__title kt-font-light">
                                            New Hero X-Borg!
                                        </h1>
                                        <div class="kt-widget19__shadow"></div>
                                        <div class="kt-widget19__labels">
                                            <a href="#" class="btn btn-label-light-o2 btn-bold btn-sm ">Event</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__body">
                                    <div class="kt-widget19__wrapper">
                                        <div class="kt-widget19__content">
                                            <div class="kt-widget19__userpic">
                                                <img src="<?=base_url('assets/')?>assets/media/users/user8.jpg" alt="">
                                            </div>
                                            <div class="kt-widget19__info">
                                                <a href="#" class="kt-widget19__username">
                                                    Nurul Annisa
                                                </a>
                                                <span class="kt-widget19__time">
                                                    Front end developer @ Descienfy
                                                </span>
                                            </div>
                                            <div class="kt-widget19__stats">
                                                <span class="kt-widget19__number kt-font-brand">
                                                    18
                                                </span>
                                                <a href="#" class="kt-widget19__comment">
                                                    Likes
                                                </a>
                                            </div>
                                        </div>
                                        <div class="kt-widget19__text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            scrambled a type specimen book text of the dummy text of the
                                            printing printing and typesetting industry scrambled dummy text
                                            of the printing.
                                        </div>
                                    </div>
                                    <div class="kt-widget19__action">
                                        <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read
                                            More...</a>
                                    </div>
                                </div>
                            </div>

                            <!--end:: Widgets/Blog-->
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!--End::Section-->

    </div>

    </div>
    </div>

    <!--End::Section-->

    <!--End::Dashboard 1-->
    </div>

    <!-- end:: Content -->
    </div>
    </div>
    </div>

    <!-- begin:: Footer -->
    <div class="kt-footer kt-grid__item" id="kt_footer">
        <div class="kt-container">
            <div class="kt-footer__bottom">
                <div class="kt-footer__copyright">
                    2020&nbsp;&copy;&nbsp;<a href="syauqizaidan.github.io target=" _blank" class="kt-link">Descienfy /
                        Syaauqi</a>
                </div>
                <div class="kt-footer__menu">
                    <a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Tentang</a>
                    <a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Team</a>
                    <a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Kontak</a>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Footer -->
    </div>
    </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Quick Panel -->
    <div id="kt_quick_panel" class="kt-quick-panel">
        <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
        <div class="kt-quick-panel__nav">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x"
                role="tablist">
                <li class="nav-item active">
                    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications"
                        role="tab">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
                </li>
            </ul>
        </div>
        <div class="kt-quick-panel__content">
            <div class="tab-content">
                <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                    <div class="kt-notification">
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-line-chart kt-font-success"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New order has been received
                                </div>
                                <div class="kt-notification__item-time">
                                    2 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-box-1 kt-font-brand"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New customer is registered
                                </div>
                                <div class="kt-notification__item-time">
                                    3 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-chart2 kt-font-danger"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    Application has been approved
                                </div>
                                <div class="kt-notification__item-time">
                                    3 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-image-file kt-font-warning"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New file has been uploaded
                                </div>
                                <div class="kt-notification__item-time">
                                    5 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-bar-chart kt-font-info"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New user feedback received
                                </div>
                                <div class="kt-notification__item-time">
                                    8 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    System reboot has been successfully completed
                                </div>
                                <div class="kt-notification__item-time">
                                    12 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-favourite kt-font-danger"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New order has been placed
                                </div>
                                <div class="kt-notification__item-time">
                                    15 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item kt-notification__item--read">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-safe kt-font-primary"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    Company meeting canceled
                                </div>
                                <div class="kt-notification__item-time">
                                    19 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-psd kt-font-success"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New report has been received
                                </div>
                                <div class="kt-notification__item-time">
                                    23 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon-download-1 kt-font-danger"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    Finance report has been generated
                                </div>
                                <div class="kt-notification__item-time">
                                    25 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon-security kt-font-warning"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New customer comment recieved
                                </div>
                                <div class="kt-notification__item-time">
                                    2 days ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-pie-chart kt-font-warning"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New customer is registered
                                </div>
                                <div class="kt-notification__item-time">
                                    3 days ago
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
                    <div class="kt-notification-v2">
                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon-bell kt-font-brand"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    5 new user generated report
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Reports based on sales
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon2-box kt-font-danger"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    2 new items submited
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    by Grog John
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon-psd kt-font-brand"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    79 PSD files generated
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Reports based on sales
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon2-supermarket kt-font-warning"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    $2900 worth producucts sold
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Total 234 items
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon-paper-plane-1 kt-font-success"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    4.5h-avarage response time
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Fostest is Barry
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon2-information kt-font-danger"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    Database server is down
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    10 mins ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon2-mail-1 kt-font-brand"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    System report has been generated
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Fostest is Barry
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon2-hangouts-logo kt-font-warning"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    4.5h-avarage response time
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Fostest is Barry
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings"
                    role="tabpanel">
                    <form class="kt-form">
                        <div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Enable Notifications:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--success kt-switch--sm">
                                    <label>
                                        <input type="checkbox" checked="checked" name="quick_panel_notifications_1">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Enable Case Tracking:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--success kt-switch--sm">
                                    <label>
                                        <input type="checkbox" name="quick_panel_notifications_2">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-last form-group-xs row">
                            <label class="col-8 col-form-label">Support Portal:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--success kt-switch--sm">
                                    <label>
                                        <input type="checkbox" checked="checked" name="quick_panel_notifications_2">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
                        <div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Generate Reports:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--danger">
                                    <label>
                                        <input type="checkbox" checked="checked" name="quick_panel_notifications_3">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Enable Report Export:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--danger">
                                    <label>
                                        <input type="checkbox" name="quick_panel_notifications_3">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-last form-group-xs row">
                            <label class="col-8 col-form-label">Allow Data Collection:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--danger">
                                    <label>
                                        <input type="checkbox" checked="checked" name="quick_panel_notifications_4">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
                        <div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Enable Member singup:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--brand">
                                    <label>
                                        <input type="checkbox" checked="checked" name="quick_panel_notifications_5">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--brand">
                                    <label>
                                        <input type="checkbox" name="quick_panel_notifications_5">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-last form-group-xs row">
                            <label class="col-8 col-form-label">Enable Customer Portal:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--brand">
                                    <label>
                                        <input type="checkbox" checked="checked" name="quick_panel_notifications_6">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- end::Quick Panel -->

    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>

    <!-- end::Scrolltop -->



    <!-- begin::Demo Panel -->
    <div id="kt_demo_panel" class="kt-demo-panel">
        <div class="kt-demo-panel__head">
            <h3 class="kt-demo-panel__title">
                Select A Demo

                <!--<small>5</small>-->
            </h3>
            <a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
        </div>
        <div class="kt-demo-panel__body">
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Default
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>/assets/media/demos/Demo-_Default.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="../default/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 2
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>/assets/media/demos/Demo-2.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="../demo2/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 3
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>/assets/media/demos/Demo-3.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="../demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 4
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>/assets/media/demos/Demo-4.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="../demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 5
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>/assets/media/demos/Demo-5.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="../demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 6
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>/assets/media/demos/Demo-6.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="../demo6/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 7
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>/assets/media/demos/Demo-7.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="../demo7/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 8
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>/assets/media/demos/Demo-8.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="../demo8/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item kt-demo-panel__item--active">
                <div class="kt-demo-panel__item-title">
                    Demo 9
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="../assets/media/demos/Demo-9.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="../demo9/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 10
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>/assets/media/demos/Demo-10.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="../demo10/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 11
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>/assets/media/demos/Demo-11.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="../demo11/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 12
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>assets/media/demos/Demo-12.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="<?=base_url('assets/')?>demo12/index.html" class="btn btn-brand btn-elevate "
                            target="_blank">Preview</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 13
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>assets/media/demos/Demo-13.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                    </div>
                </div>
            </div>
            <div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 14
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="<?=base_url('assets/')?>assets/media/demos/Demo-14.jpg" alt="" />
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                    </div>
                </div>
            </div>
            <a href="" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
                Buy Metronic Now!
            </a>
        </div>
    </div>

    <!-- end::Demo Panel -->

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
    <script src="<?=base_url('assets/')?>assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/bootstrap/dist/js/bootstrap.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/moment/min/moment.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="<?=base_url('assets/')?>assets/vendors/general/jquery-form/dist/jquery.form.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript">
    </script>
    <script
        src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js"
        type="text/javascript"></script>
    <script
        src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"
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
    <script src="<?=base_url('assets/')?>assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/typeahead.js/dist/typeahead.bundle.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js"
        type="text/javascript"></script>
    <script
        src="<?=base_url('assets/')?>assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/nouislider/distribute/nouislider.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/owl.carousel/dist/owl.carousel.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/autosize/dist/autosize.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/summernote/dist/summernote.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/markdown/lib/markdown.js" type="text/javascript">
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
    <script src="<?=base_url('assets/')?>assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript">
    </script>
    <script
        src="<?=base_url('assets/')?>assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/waypoints/lib/jquery.waypoints.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/es6-promise-polyfill/promise.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/sweetalert2/dist/sweetalert2.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/custom/components/vendors/sweetalert2/init.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/jquery.repeater/src/jquery.input.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/general/dompurify/dist/purify.js" type="text/javascript">
    </script>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="<?=base_url('assets/')?>assets/demo/demo9/base/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors(used by this page) -->
    <script src="<?=base_url('assets/')?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.js"
        type="text/javascript"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript">
    </script>
    <script src="<?=base_url('assets/')?>assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="<?=base_url('assets/')?>assets/app/custom/general/dashboard.js" type="text/javascript"></script>

    <!--end::Page Scripts -->

    <!--begin::Global App Bundle(used by all pages) -->
    <script src="<?=base_url('assets/')?>assets/app/bundle/app.bundle.js" type="text/javascript"></script>

    <!--end::Global App Bundle -->
</body>

<!-- end::Body -->

</html>