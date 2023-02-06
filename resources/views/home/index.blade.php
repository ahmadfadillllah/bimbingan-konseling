<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE TITLE -->
    <title>Home - {{ config('app.name') }}</title>
    <!-- FAVI ICON -->
    <link rel="icon" type="image/png" href="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/images/favi.png" sizes="32x32">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/bootstrap/css/bootstrap.min.css">
    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Lobster+Two" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/fonts/linear-fonts.css">
    <link rel="stylesheet" href="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/fonts/font-awesome.css">
    <!-- OWL CAROSEL CSS -->
    <link rel="stylesheet" href="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/owlcarousel/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/owlcarousel/css/owl.theme.css">
    <!-- LIGHTBOX CSS -->
    <link rel="stylesheet" href="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/css/lightbox.min.css">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/css/magnific-popup.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/css/animate.min.css">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/css/style.css">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/css/responsive.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- START PRELOADER -->
    <div class="preloader">
        <div class="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- / END PRELOADER -->
    @include('notif.index')
    <!-- START HOMEPAGE DESIGN AREA -->
    <header id="home" class="welcome-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- START LOGO DESIGN AREA -->
                        <div class="logo">
                            <a href="javascript:void(0);">
                                <p>{{ $informasi->nama }}</p>
                            </a>
                        </div>
                        <!-- END LOGO DESIGN AREA -->
                    </div>
                    <div class="col-md-8">
                        <!-- START MENU DESIGN AREA -->
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#about">Tentang</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#testimonial">Siswa Bermasalah</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#reservation">Hubungi Kami</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END MENU DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-image-area" data-stellar-background-ratio="0.6">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="header-text">
                                    <h3>Selamat datang di</h3>
                                    <h2>{{ config('app.name') }}</h2>
                                    <p>Pengembangan Sistem Informasi Bimbingan Konseling Siswa Menggunakan Metode Extreme Programming.</p>
                                    <a class="slide-btn smoth-scroll" href="{{ route('login') }}">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->

    <!-- START ABOUT US DESIGN AREA -->
    <section id="about" class="about-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Tentang Kami</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h2 class="welcome-heading">Selamat datang!</h2>
                    <p class="text-content">Pengembangan Sistem Informasi Bimbingan Konseling Siswa Menggunakan Metode Extreme Programming.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-12 about-img-section">
                    <img src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/images/about/1.jpg" alt="" height="400">
                </div>
                <!-- START ABOUT US TEXT DESIGN AREA -->
                <div class="col-md-8 col-sm-12">
                    <div class="col-md-6 col-sm-6">
                        <div class="single-project-complete single-project-border">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h2 class="counter-num">{{ $user->count() }}</h2>
                            <h6 class="text-muted">User</h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="single-project-complete single-project-border">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <h2 class="counter-num">{{ $kategori->count() }}</h2>
                            <h6 class="text-muted">Kategori</h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="single-project-complete single-project-border">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            <h2 class="counter-num">{{ $pelanggaran->count() }}</h2>
                            <h6 class="text-muted">Pelanggaran</h6>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="single-project-complete single-project-border">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <h2 class="counter-num">{{ $siswa->count() }}</h2>
                            <h6 class="text-muted">Siswa</h6>
                        </div>
                    </div>
                </div>
                <!-- / END ABOUT US TEXT DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END ABOUT US DESIGN AREA -->

    <!-- START TESTIMONIAL DESIGN AREA -->
    <section id="testimonial" class="testimonial-area section-padding" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title white-title">
                        <h2>Siswa Bermasalah</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-list wow fadeInUp">
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    @foreach ($detail_pelanggaran as $dp)
                    <div class="single-testimonial text-center">
                        <h6 class="text-muted">{{ $dp->siswa->nama_lengkap }}</h6>
                        <h6>{{ $dp->kategori->nama }}</h6>
                        <p>{{ $dp->catatan }}</p>
                    </div>
                    @endforeach
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END TESTIMONIAL DESIGN AREA -->

    <!-- START CONTACT DESIGN AREA -->
    <section id="reservation" class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row contact-form-design-area wow fadeInUp">
                <!-- START CONTACT FORM DESIGN AREA -->
                <div class="opening-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;">

                    <div class="title-box">
                        <i class="fa fa-history"></i>
                        <h3>Jam Kerja</h3>
                    </div>
                    <ul>
                        <li><span>Senin - Jumat</span><br>09:00 am - 16:00 pm</li>
                        <li><span>Sabtu - Minggu / Hari libur</span><br><span class="red">TUTUP</span></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <div class="row">
                            <form action="{{ route('home.contact') }}" method="post">
                                @csrf
                                <div class="form-group col-md-6">
                                    <p>Nama</p>
                                    <input type="text" name="name" class="form-control" id="first-name" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <p>Email</p>
                                    <input type="email" name="email" class="form-control" id="email" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <p>No. Handphone</p>
                                    <input type="text" name="phone_number" class="form-control" id="phone-number" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <p>Subject</p>
                                    <input type="text" name="subject" class="form-control" id="subject" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <p>Message</p>
                                    <textarea rows="6" name="message" class="form-control" id="description" required="required"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">Kirim Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /END  CONTACT DETAILS DESIGN AREA -->
            </div>
            <div class="row">
                <!-- START CONTACT DETAILS DESIGN AREA -->
                <div class="contact-details-area wow fadeInUp" data-wow-delay=".2s">
                    <div class="col-md-4 col-sm-12">
                        <div class="single-contact-details text-center">
                            <span class="lnr lnr-phone-handset"></span>
                            <h4>Nama</h4>
                            <p class="text-muted">Dewi Ayu Purwati Amir</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="single-contact-details text-center">
                            <span class="lnr lnr-envelope"></span>
                            <h4>E-mail</h4>
                            <p class="text-muted">13020180092@umi.ac.id</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="single-contact-details text-center">
                            <span class="lnr lnr-map-marker"></span>
                            <h4>Alamat</h4>
                            <p class="text-muted">FIKOM, UMI</p>
                        </div>
                    </div>
                </div>
                <!-- / END CONTACT DETAILS DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->


    <!-- START FOOTER DESIGN AREA -->
    <footer class="footer-area wow fadeInUp" data-wow-delay="1s">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>{{ config('app.name') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="footer-social-link text-center">
                        <p class="footer-para text-center">Pengembangan Sistem Informasi Bimbingan Konseling Siswa Menggunakan Metode Extreme Programming.</p>
                    </div>
                    <div class="footer-text">
                        <h6>&copy;copyright | {{ config('app.name') }} 2023.Developed by <a href="https://adhyy.my.id">Dewi Ayu Purwati Amir</a></h6>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- / END CONTACT DETAILS DESIGN AREA -->

    <!-- START SCROOL UP DESIGN AREA -->
    <div class="scroll-to-up">
        <div class="scrollup">
            <span class="lnr lnr-chevron-up"></span>
        </div>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- LATEST JQUERY -->
    <script type="text/javascript" src="{{ asset('home') }}/ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- PROGRESS JS  -->
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/js/jquery.appear.js"></script>
    <!-- OWL CAROUSEL JS  -->
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- MIXITUP JS -->
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/js/jquery.mixitup.js"></script>
    <!-- MAGNIFICANT JS -->
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- STEALLER JS -->
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/js/jquery.stellar.min.js"></script>
    <!-- YOUTUBE JS -->
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script type="text/javascript">
        $('.player').mb_YTPlayer();
    </script>
    <!-- COUNTER UP JS -->
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/js/jquery.counterup.min.js"></script>
    <!-- LIGHTBOX JS -->
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/js/lightbox.min.js"></script>
    <!-- WOW JS -->
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/js/wow.min.js"></script>
    <!-- scripts js -->
    <script src="{{ asset('home/demo.dueza.com/spicy-html/spicy/black-color') }}/assets/js/scripts.js"></script>
</body>
</html>
