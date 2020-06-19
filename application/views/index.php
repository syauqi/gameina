<?php if ($this->session->flashdata('success-reg')) : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Kamu berhasil daftar!',
            text: 'Silahkan login!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('login-success')) : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Kamu berhasil daftar!',
            text: 'Sekarang login yuk!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('success-verify')) : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Email Telah Diverifikasi!',
            text: 'Sekarang login yuk!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php endif; ?>


<?php if ($this->session->flashdata('success-logout')) : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Kamu berhasil logout!',
            text: 'Selamat tinggal, Sampai jumpa lagi!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('fail-login')) : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal login!',
            text: 'Silahkan Periksa Kembali Email dan Password Kamu!',
            showConfirmButton: false,
            timer: 2500
        });
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('fail-email')) : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Email Belum Diverifikasi!',
            text: 'Silahkan Cek Email Kamu Dahulu!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('fail-pass')) : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Password Salah!',
            text: 'Silahkan Periksa Kembali Password Kamu!',
            showConfirmButton: false,
            timer: 2500
        });
    </script>
<?php endif; ?>


<!-- jumbotron -->

<div class="jumbotron jumbotron-fluid index-jumbotron rellax" data-rellax-speed="-2">
    <div class="container">
        <h1 class="display-2 mt-5 header-jumbotron" data-aos="fade-right" data-aos-duration="1500">Selamat datang!
        </h1>
        <p class="lead text-jumbotron" data-aos="fade-right" data-aos-duration="1700">Di website portal game developer
            di Indonesia. <br>
            Disini terdapat banyak game yang dibuat dari indonesia lho <br>
            Kalian bisa mainkan game buatan developer indonesia ataupun <br> beli gamenya! Penasaran? Klik tombol
            dibawah!
            <br> pastikan kalian login dulu ya! </p>
        <a href="<?= base_url('games') ?>"><button class="btn btn-colour btn-outline-light" data-aos="fade-right" data-aos-duration="1500">Mainkan gamenya !</button></a>
    </div>
</div>
<!-- end jumbotron -->


<!-- container -->
<div class="container">
    <!-- info panel -->
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">
                <div class="col-md">
                    <img src="<?= base_url('assets/'); ?>img/slot-machine.png" alt="" srcset="" class="float-left">
                    <h4>Game seru!</h4>
                    <p>Game seru membuat harimu menyenangkan!</p>
                </div>
                <div class="col-md">
                    <img src="<?= base_url('assets/'); ?>img/gamepad.png" alt="" srcset="" class="float-left">
                    <h4>Santai!</h4>
                    <p>Santai dan relax! silahkan enjoy gamenya!</p>
                </div>
                <div class="col-md">
                    <img src="<?= base_url('assets/'); ?>img/nintendo-switch.png" alt="" srcset="" class="float-left">
                    <h4>Mudah!</h4>
                    <p>Mudah dan gak ribet buat kamu generasi supel!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end info panel -->

<!-- title -->
<div class="row">
    <div class="col-md-10 container mt-5">
        <h2 class="title text-center" data-aos="fade-right" data-aos-duration="1500">Jelajahi Game & Mainkan Sekarang!
        </h2>
    </div>
</div>
<br>
<!-- title -->
<div class="row">
    <div class="owl-carousel mt-3 container owl-theme">
        <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1200">
            <div class="b-game-card__cover" style="background-image: url(assets/img/fps.png);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1300">
            <div class="b-game-card__cover" style="background-image: url(assets/img/action.png);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1400">
            <div class="b-game-card__cover" style="background-image: url(assets/img/adventure.png);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1500">
            <div class="b-game-card__cover" style="background-image: url(assets/img/sport.png);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1600">
            <div class="b-game-card__cover" style="background-image: url(assets/img/racinf.png);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1700">
            <div class="b-game-card__cover" style="background-image: url(assets/img/photo6.jpg);"></div>
        </div>
    </div>
</div>
<br>

<!-- title -->
<div class="row topup">
    <div class="col-md-10 container mt-5">
        <h2 class="title text-center" data-aos="zoom-out" data-aos-duration="1200">Top-up voucher game lebih mudah!</h2>
    </div>
    <br>
    <!-- title -->
    <div class="owl-carousel mt-5 container owl-theme">
        <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1200">
            <div class="b-game-card__cover" style="background-image: url(assets/img/mobile-legends.png);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1300">
            <div class="b-game-card__cover" style="background-image: url(assets/img/free-fire.png);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1400">
            <div class="b-game-card__cover" style="background-image: url(assets/img/arena-of-valor.png);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1500">
            <div class="b-game-card__cover" style="background-image: url(assets/img/pubg.png);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1600">
            <div class="b-game-card__cover" style="background-image: url(assets/img/marvel.png);"></div>
        </div>
        <br>
        <br>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6" data-aos-duration="1500" data-aos="fade-right">
            <img src="<?= base_url('assets/') ?>img/hayabusa.png" class="img-fluid" alt="" srcset="">
        </div>
        <div class="col-md-6 my-auto" data-aos-duration="1500" data-aos="fade-left">
            <h1 class="text-center title mt-5">Tertarik bergabung bersama kami?</h1>
            <p class="text-center text-section">Mari bersama mendukung produk indonesia! sebagai millenial kita harus
                senantiasa mendukung program ataupun games yang dibuat oleh anak bangsa!. mari bergabung dengan kami
                untuk mendukung karya karya yang dibuat oleh millenial indonesia! jadikan hobby sebagai titik maju
                bangsa mulai dari sekarang! </p>
            <a href="<?= base_url('welcome/registration') ?>"><button class="btn btn-section btn-block">Daftar
                    Sekarang!</button></a>
        </div>
    </div>
</div>

<div class="container">
    <div class="end-section row mt-5" data-aos-duration="1200" data-aos="zoom-out">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="font-weight-bold">Punya game? yuk promosikan dan publish sekarang!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="<?= base_url('welcome/publisher') ?>">
                        <h5 class="btn btn-light font-weight-bold">Daftar sebagai publisher.</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title font-weight-bold" id="exampleModalCenterTitle">Login ke gameina sekarang.</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?= base_url('assets/'); ?>img/_____2x-removebg-preview.png" height="300px;" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6">
                            <form action="<?= base_url('welcome/index') ?>" method="post">
                                <div class="form-group">
                                    <label class="label-font" for="exampleFormControlInput1">
                                        Email.</label>
                                    <input type="text" value="<?= set_value('email'); ?>" class="form-control" name="email" id="email" placeholder="Masukan email mu disini ..">
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="label-font" for="exampleFormControlInput1">Password.</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password mu disini ..">
                                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ingat saya.
                                    </label>
                                </div>
                                <p class="terms">Dengan login anda menyetujui <i>privasi dan persyaratan ketentuan
                                        hukum kami </i> .
                                    belum punya akun? daftar <a href="<?= base_url('welcome/registration') ?>">
                                        disini.</a>
                                </p>
                                <button class="btn btn-modal btn-block">Login Sekarang!</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>

<script>
    var rellax = new Rellax('.rellax');
</script>