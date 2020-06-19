<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin Dashboard - GameINA</title>

    <!-- General CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class=" navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?php
$data['user'] = $this->db->get_where('admin', ['email_admin' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama_admin'];
?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Admin - GameINA</div>

                            <a href="<?=base_url('welcome/logout')?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand text-danger">
                        <a href="<?=base_url('admin')?>" style="font-size: 24px; font-weight:700"
                            class="text-danger">Gameindonesia</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?=base_url('admin')?>">GM</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header ">Dashboard</li>
                        <li class="nav-item dropdown ">
                            <a href="<?=base_url('admin')?>" class="nav-link"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">User Management</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown " data-toggle="dropdown"><i
                                    class="fas fa-user"></i>
                                <span>User</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link " href="<?=base_url('admin/user_data')?>">User Data</a></li>
                                <li><a class="nav-link" href="<?=base_url('admin/purchase_history')?>">Purchase
                                        History</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Publisher Management</li>
                        <li class="nav-item dropdown ">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-astronaut"></i>
                                <span>Publisher</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/publisher_data')?>">Publisher Data</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-header">Games Management</li>
                        <li class="nav-item dropdown ">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-headset"></i>
                                <span>Store</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url('admin/game_data')?>">Games Data</a></li>
                                <li><a href="<?=base_url('admin/add_game')?>">Add Games</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-gamepad"></i>
                                <span>Free Games</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/free_games')?>">Free Games Data</a>
                                </li>
                                <li><a class="nav-link" href="<?=base_url('admin/add_free_games')?>">Add Free Games</a>
                                </li>
                            </ul>
                        </li>
                        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                            <a href="<?=base_url('welcome/logout')?>" class=" btn btn-danger btn-lg btn-block
                                btn-icon-split">
                                <i class="fas fa-rocket"></i> Keluar dari admin
                            </a>
                        </div>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>User Management - Publisher Detail </h1>
                    </div>
                    <div class="row container">
                        <div class="col-md-7 bg-white p-3"
                            style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                            <h3 class="font-weight-bold" style="color: #34395e!important">Publisher Detail</h3>
                            <hr>
                            <p style="font-weight:500px!important;font-size:18px;text-align:justify;" class="">Publisher
                                - ID
                                :
                                <?=$detail->id_publisher?>
                                <br>Nama : <?=$detail->nama_publisher?>
                                <br>Email :
                                <?=$detail->email_publisher?><br>Password : Encrypted<br>Is Active :
                                <?=$detail->is_active?><br>Date Created :
                                <?=$detail->date_created?></p>



                            <a href="<?=base_url('admin/publisher_data')?>" class="btn btn-danger btn-block">Kembali</a>
                        </div>

                        <div class="col-md-4 bg-white p-3 ml-3"
                            style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                            <img src="<?=base_url() . 'assets/profile_picture/' . $detail->image;?>"
                                class="card-img-top img-responsive" alt="...">
                        </div>


                    </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2020 <div class="bullet"></div> Program & Design by <a
                href="syauqizaidan.github.io">Syaauqi</a> and Nauval Azhar - Stisla Developer
        </div>
        <div class="footer-right">
            Made with <span class="text-danger"> &#10084;</span> by syaauqi
        </div>
    </footer>
    </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?=base_url('assets/')?>stisla-assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>

    <!-- Template JS File -->
    <script src="<?=base_url('assets/')?>stisla-assets/js/scripts.js"></script>
    <script src="<?=base_url('assets/')?>stisla-assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>