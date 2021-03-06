<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Halftime Order</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link rel="stylesheet" href="<?php echo base_url()?>assets/bah/assets/css/navmenu.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bah/assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bah/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bah/assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bah/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bah/assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bah/assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bah/assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bah/assets/css/responsive.css" />

        <script src="<?php echo base_url()?>assets/bah/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
        <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->




        <nav id="main-nav">
            <ul>
                <li><a <?php echo anchor('dashboard','home');?>></a></li>
                <li><a <?php echo anchor('meja','order now'); ?>></a></li>
                <li><a <?php echo anchor('pesan','menu'); ?>></a></li>
                <li><a href="<?php echo base_url()?>assets/Helpview/Hhelp.html"><span>Help</span></a></li>

            </ul>
            <a href="#" class="cd-close-menu">Close<span></span></a>
        </nav>



        <section id="home" class="home">
            <div class="overlay">
                <div class="container">
                    <div class="div-menu">
                        <header class="cd-header">
                            <a class="cd-menu-trigger" href="#main-nav"><span></span></a>
                        </header>
                    </div>
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="main_home_slider text-center">
                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h1>Welcome</h1>
                                        <div class="whiseparator"></div>
                                            <p class="subtitle">Halftime Order</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

				</div>
            </div>
        </section>



        <section id="creativity" class="creativity wow fadeIn">
            <div class="creativity_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_creativity text-center">
                            <a href=""  class="btn btn-larg"><?php echo anchor('meja','order now'); ?></a>
                            <h5><cd>Click Button atau Scroll untuk Order!</cd></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="heretohelp" class="heretohelp">
            <div class="creativity_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_creativity main_heretohelp text-center">
                            <a href="<?php echo base_url()?>assets/Helpview/Hhelp.html" class="btn btn-larg">Help & Service</a>
                             <h5><cd>Click Button atau Scroll untuk Bantuan!</cd></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="team" class="team">
            <div class="container">
                <div class="row">
                    <div class="main_team sections wow fadeInUp" data-wow-duration="700ms">
                        <div class="head_title text-center">
                            <h2>About Us</h2>
                            <div class="separator"></div>
                            <p>Cafe ini sudah dibangun sekitar tahun 2017. Dibangun oleh pemiliknya yaitu Muhammad Indra Yaman. Cafe ini dibangun awalnya hanya sebagai usaha kecil-kecilan dan tempatnya juga tidak terlalu besar. Namun seiring berkembangnya kami, Cafe ini akhirnya bisa cukup besar dan dikenal hingga sekarang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="contact" class="contact">
            <div class="container-fluid">
                <div class="row">
        <section id="team" class="team">
            <div class="container">
                <div class="row">
                    <div class="main_team sections wow fadeInUp" data-wow-duration="500ms">
                        <div class="head_title text-center">
                        <h2>Contact us & our reservation</h2>
                            <div class="separator"></div>
                            <p>Kalian bisa membooking meja dengan pergi ke tempat langsung dengan alamat yang sudah tertera di bawah dan kemudian membooking meja di kasir. Atau kalian juga bisa menelepon nomor yang sudah tertera di bawah untuk membooking.</p>
                            <p>...</p>
                            <p>Biaya untuk membooking satu meja yaitu sebesar Rp. 30,000.</p>
                        <div class="main_contact_text_area margin-top-110">
                            <img src="<?php echo base_url()?>assets/bah/assets/images/slide01.jpg" width="780" height="629">
                                <div class="col-sm-4 no-padding wow fadeInUp" data-wow-duration="700ms">
                                    <div class="single_message_right_info">
                                    <h4>Location & Contact</h4>
                                    <ul>
                                        <li><a href="">Jl. T. Panglima Nyak Makam, Lambhuk, Ulee Kareng</a></li>
                                        <li><a href="">Banda Aceh</a></li>
                                        <li><a href="">HTO Admin</a></li>
                                        <li><a href="">(+62812-3456-7890)</a></li>
                                    </ul>
                                    <div class="socail_bookmark margin-top-20">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <footer id="footer" class="footer">
            <div class="container">
                <div class="main_footer text-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="footer_logo"></div>
                        </div>
                        <h1><ab>HTO PROJECT</ab></h1>
                        <h4><ab>- 2018 -</ab></h4>
                    </div>
                </div>
            </div>
        </footer>



        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="<?php echo base_url()?>assets/bah/assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url()?>assets/bah/assets/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo base_url()?>assets/bah/assets/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo base_url()?>assets/bah/assets/js/jquery.mixitup.min.js"></script>
        <script src="<?php echo base_url()?>assets/bah/assets/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url()?>assets/bah/assets/js/jquery.magnific-popup.js"></script>
        <script src="<?php echo base_url()?>assets/bah/assets/js/jquery.fancybox.pack.js"></script>

        <script src="<?php echo base_url()?>assets/bah/assets/js/plugins.js"></script>
        <script src="<?php echo base_url()?>assets/bah/assets/js/main.js"></script>



                </div>
            </div>
            </section>
    </body>
</html>
