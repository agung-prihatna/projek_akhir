<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fast Travel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="images/icons/icons.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">FAST TRAVEL</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <a href="https://mail.google.com/mail/?view=cm&to=Kelompok2@gambel.com" class="mb-0" style="color: black;">Kelompok2@gambel.com</a>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <a href="https://api.whatsapp.com/send?phone=6280123****" class="mb-0" style="color: black;">+628 0123 ****</a>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="destinasi.php" class="nav-item nav-link active">Destinasi</a>
                                <a href="Pemesanan.php" class="nav-item nav-link">Booking</a>
                                <div class="nav-item dropdown">
                                    <a href="destinasi.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tours</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="destinasi.php#wisata_alam" class="dropdown-item">Wisata Alam</a>
                                        <a href="destinasi.php#wisata_petualangan" class="dropdown-item">Wisata Petualangan</a>
                                        <a href="destinasi.php#wisata_pantai" class="dropdown-item">Wisata Pantai</a>
                                        <a href="destinasi.php#wisata_sejarah" class="dropdown-item">Wisata Sejarah</a>
                                        <a href="destinasi.php#wisata_hiburan" class="dropdown-item">Wisata Hiburan</a>
                                        <a href="destinasi.php#wisata_safari" class="dropdown-item">Wisata Safari</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class=" mx-4">
                                <a href="admin/login.php" type="button" class="btn btn-outline-warning">LOGIN </a>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Tours</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tours</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->



        <!-- Destinasi Wisata Petualangan Start -->
        <div id="wisata_petualangan" class="container-xxl py-5">
            <div class="container">
                <?php
                include_once("./admin/helper/connection.php");
                $listkategori = mysqli_query($connection, "SELECT * FROM kategori_destinasi");
                while ($kategori = mysqli_fetch_array($listkategori)) {
                    $kategori_id = $kategori['ID_Kategori'];
                    $listdestinasi = mysqli_query($connection, "SELECT * FROM destinasi INNER JOIN kategori_destinasi ON destinasi.ID_Kategori = kategori_destinasi.ID_Kategori WHERE destinasi.ID_Kategori = $kategori_id");
                    $destinasi_count = mysqli_num_rows($listdestinasi);
                ?>
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase mt-5">
                            our tours
                        </h6>
                        <h1 class="mb-5">
                            Explore Our <span class="text-primary"><?php echo $kategori['Nama_Kategori']; ?></span>
                        </h1>
                    </div>
                    <div class="row g-4">
                        <?php
                        while ($destinasi = mysqli_fetch_array($listdestinasi)) {
                        ?>
                            <div class="col-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="img/destinasi/<?php echo $destinasi['Foto']; ?>" style="width: 400px; width: 400px;" alt="" />
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Start From Rp. <?php echo number_format($destinasi['Harga'], 0, ',', '.'); ?></small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0"> <?php echo substr($destinasi['Nama_Destinasi'], 0, 15) ?></h5>
                                            <?php echo substr($destinasi['Lokasi'], 0, 13) ?>
                                        </div>
                                        <p class="text-body mb-3"> <?php echo substr($destinasi['Deskripsi'], 0, 80) ?></p>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="detail_destinasi.php?ID_Destinasi=<?php echo $destinasi['ID_Destinasi']; ?>">View More</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- Destinasi Wisata Petualangan End -->








        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">
                                <span class="text-primary text-uppercase">FINAL PROJEK KELOMPOK 2
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="bg-primary rounded p-4">
                        <a href="index.php">
                            <h1 class="text-white text-uppercase mb-3">FAST TRAVEL</h1>
                        </a>
                        <p class="text-white mb-0">
                            Download
                            <a class="text-dark fw-medium" href="https://htmlcodex.com/hotel-html-template-pro">Hotelier
                                – Premium
                                Version</a>, build a professional website for your hotel business and grab
                            the attention of new visitors upon your site’s launch.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h6 class="section-title text-start text-primary text-uppercase mb-4">
                        Contact
                    </h6>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>FINAL EDUWORK Kelompok 2
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>+628 0123 ****
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>Kelompok2@gambel.com
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="row gy-5 g-4">
                        <div class="col-md-6">
                            <h6 class="section-title text-start text-primary text-uppercase mb-4">
                                Company
                            </h6>
                            <a class="btn btn-link" href="">About Us</a>
                            <a class="btn btn-link" href="">Contact Us</a>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All
                            Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By
                            <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Help</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>