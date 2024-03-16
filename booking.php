<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bangkit Barbershop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include('config.php');
    $query = "SELECT * FROM booking";
    $result = mysqli_query($conn, $query);
    ?>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand"><span>BANGKIT</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.html" class="nav-item nav-link">Beranda</a>
                    <a href="price.html" class="nav-item nav-link">Harga</a>
                    <a href="portfolio.html" class="nav-item nav-link">Galeri</a>
                    <a href="booking.php" class="nav-item nav-link active">Pemesanan</a>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>BOOKING</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Contact Start -->
    <div class="section-header text-center" style="margin-top: 50px;">
        <p>FORM PEMESANAN BANGKIT BARBERSHOP</p>
    </div>
    <div class="contact" style="margin-bottom: 90px;">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form role="form" action="insert.php" method="post">
                                <div class="form-group">
                                    <input type="text" id="name" name="nama_bk" placeholder="Nama" required="required" class="form-control" data-validation-required-message="Silahkan masukan nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="number" name="nomerhp_bk" placeholder="Nomer HP" required="required" class="form-control" data-validation-required-message="Silahkan masukan nomer HP">
                                </div>
                                <!-- <div class="form-group">
                                    <input type="text" id="service" name="service_bk" placeholder="Service" required="required" class="form-control" data-validation-required-message="Silahkan masukan service yang anda pilih">
                                </div> -->
                                <div class="form-group">
                                    <input type="time" id="waktu" name="waktu_bk" required="required" class="form-control" data-validation-required-message="Silahkan masukan waktu booking">
                                </div>
                                <div class="form-group">
                                    <input type="date" id="tanggal" name="tanggal_bk" required="required" class="form-control" data-validation-required-message="Silahkan masukan tanggal booking">
                                </div>
                                <!-- <div class="form-group">
                                    <textarea class="form-control" id="massage" name="pesan_bk" placeholder="Pesan" required="required" class="form-control" data-validation-required-message="Silahkan masukan pesan"></textarea>
                                </div> -->
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton" name="submit">Booking Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-contact">
                                <h2>Alamat Barbershop</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Jogjakarta tercintahh</p>
                                <p><i class="fa fa-phone-alt"></i>0834 5845 4857</p>
                                <p><i class="fa fa-envelope"></i>Bangkitbarber@gmail.com</p>
                                <div class="footer-social">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://linkedin/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UCg7kU1QYOiVyhV1GnmgOuBA"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a>Bangkit Barbershop</a>, All Right Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>