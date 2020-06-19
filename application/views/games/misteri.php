<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/57635d64f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/styling.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.1/dist/sweetalert2.all.min.js"></script>
    <title>GameINA | Games</title>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid misteri-jumbotron rellax">
                <div class="container " data-aos="fade-right" data-aos-duration="1500">
                    <h1 class="display-4 font-weight-bold header-jumbotron">Kategori Misteri</h1>
                    <p class="lead text-jumbotron">Mainkan game bergenre Misteri dan jadilah detektif! <br> mainkan di
                        page
                        ini! dan rasakan keseruannya!</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container ">
        <div class="row mt--5" style="margin-top: -160px;">

            <?php foreach ($user as $u) {?>

            <div class="col-md-3 mt-4 " data-aos="fade-right" data-aos-duration="1500">
                <div class="card card-game" style="width:16rem; border:none">
                    <img src="<?=base_url() . 'assets/img/' . $u->gambar_game;?>" width=""
                        class="card-img-top img-responsive" alt="...">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <p class="nama_game text-center font-weight-bold"><?=$u->nama_game;?></p>
                                <!-- <p class="card-text font-weight-bold"><?=base_url() . 'assets/games/' . $u->link_game;?>
                                    <br>
                                </p> -->
                            </div>
                            <div class="col-md-12 mx-auto">
                                <br>
                                <p class="deskripsi_game text-center" style="height:70px;"><?=$u->deskripsi_game;?></p>
                                <!-- <p class="card-text font-weight-bold"><?=base_url() . 'assets/games/' . $u->link_game;?>
                                    <br>
                                </p> -->

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 mx-auto container-fluid">
                                <a href="<?=base_url() . 'assets/games/' . $u->link_game;?>" class=" btn btn-danger
                                    btn-block btn-games font-weight-bold">Mainkan!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php }?>

        </div>
    </div>

    <!-- <div class="row mt-3" style="background-color: #d6011d; color:white;">
        <div class="container">
            <h1 class="font-weight-bold mt-4" style="color:white;font-size:47px !important;" data-aos="fade-right"
                data-aos-duration="1200">Jelajahi Kategori Menarik
                Lainnya! </h1>
        </div>
    </div>

    <div class="row " style="background-color: #d6011d; ">
        <div class="owl-carousel mt-3 container owl-theme category mb-5">
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1200">
                <a href="<?=base_url('games/fps')?>">
                    <div class="b-game-card__cover" style="background-image: url(../assets/img/fps.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1400">
                <a href="<?=base_url('games/action')?>">
                    <div class="b-game-card__cover" style="background-image: url(../assets/img/action.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1600">
                <a href="games/petualangan">
                    <div class="b-game-card__cover" style="background-image: url(../assets/img/adventure.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1800">
                <a href="games/olahraga">
                    <div class="b-game-card__cover" style="background-image: url(../assets/img/sport.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="2000">
                <a href="games/balapan">
                    <div class="b-game-card__cover" style="background-image: url(../assets/img/Racinf.png);"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row mt-3 ">
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="1300">
                <img src="<?=base_url('assets/')?>img/hayabusa.png" class="img-fluid" alt="" srcset="">
            </div>
            <div class="col-md-6 my-auto" data-aos="fade-left" data-aos-duration="1300">
                <h1 class="text-center title mt-5">Tertarik bergabung bersama kami?</h1>
                <p class="text-center text-section">Mari bersama mendukung produk indonesia! sebagai millenial kita
                    harus
                    senantiasa mendukung program ataupun games yang dibuat oleh anak bangsa!. mari bergabung dengan kami
                    untuk mendukung karya karya yang dibuat oleh millenial indonesia! jadikan hobby sebagai titik maju
                    bangsa mulai dari sekarang!</p>
                <a href="<?=base_url('welcome/registration')?>"><button class="btn btn-section btn-block">Daftar
                        Sekarang!</button></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="end-section row mt-5" data-aos-duration="1500" data-aos="zoom-out">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="font-weight-bold">Punya game? yuk promosikan dan publish sekarang!</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?=base_url('welcome/publisher')?>">
                            <h5 class="btn btn-light font-weight-bold">Daftar sebagai publisher.</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

 -->

    <!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>

    <script>
    var rellax = new Rellax('.rellax');
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>


</html>