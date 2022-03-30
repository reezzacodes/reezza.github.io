<?php
include '../config/app.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Muhammad Reza Khafidz">
    <meta name="description"
        content="Website portfolio dari Muhammad Reza Khafidz yang berisi tentang pengalaman bekerja dan berbagai projek yang telah saya kerjakan. Hubungi saya di email: admin@reezza.com">
    <meta name="keywords" content="Reezza, Muhammad Reza Khafidz, Programmer, Coding, Design, Portfolio">

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/custom.css" rel="stylesheet">

    <!--Template Title-->
    <title>Portfolio | <?php echo $judulWebsite; ?></title>

    <!-- Start Template Basic Images -->
    <meta property="og:title" content="Reezza" />
    <meta property="og:image" content="../storage/images/favicon/ms-icon-144x144.png">
    <!-- Facebook and Twitter Integration -->
    <meta property="og:url" content="https://reezza.com" />
    <meta property="og:site_name" content="Reezza" />
    <meta property="og:description"
        content="Reezza adalah sebuah website portfolio dari Muhammad Reza Khafidz yang berisi tentang pengalaman bekerja dan berbagai projek yang telah saya kerjakan. Hubungi saya di email: admin@rezashadow.com" />
    <meta name="twitter:title" content="Reezza" />
    <meta name="twitter:image" content="../storage/images/favicon/ms-icon-144x144.png" />
    <meta name="twitter:url" content="https://twitter.com/r_eezza" />
    <!-- End Template Basic Images -->

    <!--==========Favicon==========-->

    <link rel="apple-touch-icon" sizes="57x57" href="../storage/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../storage/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../storage/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../storage/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../storage/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../storage/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../storage/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../storage/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../storage/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../storage/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../storage/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../storage/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../storage/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../storage/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../storage/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body id="body">
    <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
        <div class="container">
            <a id="brand" class="navbar-brand brandTextColor" href="<?php echo $baseUrl; ?>">
                <img src="../storage/images/favicon/ms-icon-144x144.png" alt="Logo Reezza" width="35" height="35"
                    class="d-inline-block align-text-top"> Reezza
            </a>

            <button class="navbar-toggler primaryTextColor" id="toggle" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <ion-icon class="icon-wh-20" name="grid-outline"></ion-icon>
            </button>

            <div class="collapse navbar-collapse container" id="navbarNavDropdown">
                <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                    <li class="nav-item col-6 col-md-auto">
                        <a id="beranda" class="nav-link primaryTextColor" aria-current="page"
                            href="<?php echo $baseUrl; ?>">
                            <ion-icon class="icon" name="home"></ion-icon>
                            <span class="text-vertical-align-center"> Beranda </span>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a id="portfolio" class="nav-link primaryTextColor" aria-current="page"
                            href="<?php echo $baseUrl; ?>/portfolio">
                            <ion-icon class="icon" name="document-text"></ion-icon>
                            <span class="text-vertical-align-center"> Portfolio </span>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a id="contact" class="nav-link primaryTextColor" aria-current="page"
                            href="<?php echo $baseUrl; ?>/contact">
                            <ion-icon class="icon" name="finger-print"></ion-icon>
                            <span class="text-vertical-align-center"> Contact </span>
                        </a>
                    </li>
                </ul>

                <hr class="d-md-none text-white-50" id="hr">

                <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                    <li class="nav-item col-6 col-md-auto">
                        <div class="darkModeTextColor" id="icon-color">
                            <ion-icon class="icon-wh-20" name="sunny-outline" id="darkMode">
                            </ion-icon>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="content">
        <div class="container">
            <div class="row">
                <div id="text" class="mobile-container primaryTextColor py-5">
                    <div>
                        <h1>
                            Portfolio
                        </h1>

                        <p class="lh-lg py-3">
                            Berikut ini adalah hasil beberapa pekerjaan saya. Halaman ini akan terus diperbaharui ketika
                            saya sudah menyelesaikan pekerjaan
                            lainnya.
                        </p>

                        <h2 class="py-2">
                            As a Programmer
                        </h2>

                        <hr>

                        <div class="row py-3 gx-3 gy-3 font-size-14">
                            <div class="col-sm-6 col-12">
                                <div class="light-card light-card-shadow light-text-white" id="card">
                                    <div class="card-body">
                                        <h5 class="card-title bold-text">Adat Indonesia</h5>
                                        <p class="card-text justify-text lh-lg">Adatindonesia.org adalah portal website
                                            yang
                                            berisikan artikel seputar kebudayaan yang ada di Indonesia, hadir untuk Anda
                                            yang mencintai kekayaan budaya di Indonesia dengan menemukan informasi
                                            menarik
                                            di setiap
                                            daerah.</p>
                                        <a href="https://adatindonesia.org" target="_blank"
                                            class="btn btn-primaryTextColor redBgColor btn-shadow">Kunjungi Website</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-12">
                                <div class="light-card light-card-shadow light-text-white" id="card">
                                    <div class="card-body">
                                        <h5 class="card-title bold-text">Materi Sekolah Indonesia</h5>
                                        <p class="card-text justify-text lh-lg">Materi Sekolah Indonesia adalah tempat
                                            untuk
                                            berbagi materi sekolah mulai dari sd/mi, smp/mts, sma/ma/smk, dan lain-lain.
                                            Tersedia materi untuk guru dan materi untuk siswa. Materi dari sumber yang
                                            terpercaya.
                                        </p>
                                        <a href="https://materisekolah.id" target="_blank"
                                            class="btn btn-primaryTextColor redBgColor btn-shadow">Kunjungi Website</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-12">
                                <div class="light-card light-card-shadow light-text-white" id="card">
                                    <div class="card-body">
                                        <h5 class="card-title bold-text">Astramaya</h5>
                                        <p class="card-text justify-text lh-lg">Astramaya deliver good valuable services
                                            to both our partners and clients are poured into work ethics of
                                            Professionalism, Productivity.
                                        </p>
                                        <a href="https://astramaya.com" target="_blank"
                                            class="btn btn-primaryTextColor redBgColor btn-shadow">Kunjungi Website</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-12">
                                <div class="light-card light-card-shadow light-text-white" id="card">
                                    <div class="card-body">
                                        <h5 class="card-title bold-text">Berita Papua</h5>
                                        <p class="card-text justify-text lh-lg">Portal berita harian seluruh papua yang
                                            menyajikan informasi terkini dari berbagai peristiwa unik, menarik hingga
                                            mengulas berita nasional.
                                        </p>
                                        <a href="https://beritapapua.id" target="_blank"
                                            class="btn btn-primaryTextColor redBgColor btn-shadow">Kunjungi Website</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="py-2 mt-4">
                            As a Drone Pilot
                        </h2>

                        <hr>

                        <div class="row row-cols-1 row-cols-md-2 py-3 gx-3 gy-3 font-size-14">
                            <div class="col">
                                <div class="light-card light-card-shadow light-text-white" id="card">
                                    <img src="../storage/images/portfolio/portfolio-1.jpg" class="card-img-top"
                                        alt="Tugu Yogyakarta" data-bs-toggle="modal" data-bs-target="#portfolio-1">
                                    <div class="card-body">
                                        <h5 class="card-title">Tugu Yogyakarta</h5>
                                        <p class="card-text">Tugu Yogyakarta adalah sebuah tugu atau monumen yang sering
                                            dipakai sebagai simbol atau lambang dari Kota Yogyakarta.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnail Image -->
                            <div class="modal fade" id="portfolio-1" tabindex="-1" aria-labelledby="portfolio-1Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content img-thumbnail rounded">
                                        <img src="../storage/images/portfolio/portfolio-1.jpg" class="img-fluid"
                                            alt="Tugu Yogyakarta">
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="light-card light-card-shadow light-text-white" id="card">
                                    <img src="../storage/images/portfolio/portfolio-2.jpg" class="card-img-top"
                                        alt="Taman Impian Jaya Ancol" data-bs-toggle="modal"
                                        data-bs-target="#portfolio-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Taman Impian Jaya Ancol</h5>
                                        <p class="card-text">Ancol Taman Impian
                                            atau biasa disebut Ancol sudah ditujukan sebagai sebuah kawasan wisata
                                            terpadu oleh Pemerintah Provinsi DKI Jakarta.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnail Image -->
                            <div class="modal fade" id="portfolio-2" tabindex="-1" aria-labelledby="portfolio-2Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content img-thumbnail rounded">
                                        <img src="../storage/images/portfolio/portfolio-2.jpg" class="img-fluid"
                                            alt="Taman Impian Jaya Ancol">
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="light-card light-card-shadow light-text-white" id="card">
                                    <img src="../storage/images/portfolio/portfolio-3.jpg" class="card-img-top"
                                        alt="Gunung Botak Manokwari Selatan" data-bs-toggle="modal"
                                        data-bs-target="#portfolio-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Gunung Botak Manokwari Selatan</h5>
                                        <p class="card-text">Gunung Botak terletak di Desa Momi Waren, Distrik Ransiki
                                            Kabupaten Manokwari Selatan.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnail Image -->
                            <div class="modal fade" id="portfolio-3" tabindex="-1" aria-labelledby="portfolio-3Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content img-thumbnail rounded">
                                        <img src="../storage/images/portfolio/portfolio-3.jpg" class="img-fluid"
                                            alt="Gunung Botak Manokwari Selatan">
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="light-card light-card-shadow light-text-white" id="card">
                                    <img src="../storage/images/portfolio/portfolio-4.jpg" class="card-img-top"
                                        alt="Gunung Bromo" data-bs-toggle="modal" data-bs-target="#portfolio-4">
                                    <div class="card-body">
                                        <h5 class="card-title">Gunung Bromo</h5>
                                        <p class="card-text">Gunung Bromo juga disebut Kaldera Tengger adalah sebuah
                                            gunung berapi aktif di Jawa Timur, Indonesia.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnail Image -->
                            <div class="modal fade" id="portfolio-4" tabindex="-1" aria-labelledby="portfolio-4Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content img-thumbnail rounded">
                                        <img src="../storage/images/portfolio/portfolio-4.jpg" class="img-fluid"
                                            alt="Gunung Bromo">
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="light-card light-card-shadow light-text-white" id="card">
                                    <img src="../storage/images/portfolio/portfolio-5.jpg" class="card-img-top"
                                        alt="Taman Budaya Garuda Wisnu Kencana" data-bs-toggle="modal"
                                        data-bs-target="#portfolio-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Taman Budaya Garuda Wisnu Kencana</h5>
                                        <p class="card-text">Taman Budaya Garuda Wisnu Kencana atau kerap disebut dengan
                                            GWK adalah sebuah
                                            taman wisata budaya di bagian selatan pulau Bali.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnail Image -->
                            <div class="modal fade" id="portfolio-5" tabindex="-1" aria-labelledby="portfolio-5Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content img-thumbnail rounded">
                                        <img src="../storage/images/portfolio/portfolio-5.jpg" class="img-fluid"
                                            alt="Taman Budaya Garuda Wisnu Kencana">
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="light-card light-card-shadow light-text-white" id="card">
                                    <img src="../storage/images/portfolio/portfolio-6.jpg" class="card-img-top"
                                        alt="Dermaga Wisata Rumah Keong Belitung" data-bs-toggle="modal"
                                        data-bs-target="#portfolio-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Dermaga Wisata Rumah Keong Belitung</h5>
                                        <p class="card-text">Rumah Keong sendiri adalah sebuah bangunan yang menyerupai
                                            cangkang keong, yang dibangun dengan menggunakan rotan.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnail Image -->
                            <div class="modal fade" id="portfolio-6" tabindex="-1" aria-labelledby="portfolio-6Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content img-thumbnail rounded">
                                        <img src="../storage/images/portfolio/portfolio-6.jpg" class="img-fluid"
                                            alt="Dermaga Wisata Rumah Keong Belitung">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>

    <footer>
        <div class="container primaryTextColor" id="footer">
            <div class="d-flex flex-row">
                <div class="mx-auto">
                    Made with ❤️
                </div>
            </div>
            <div class="d-flex flex-row mb-3">
                <div class="p-2 mx-auto">Powered By <a id="footer-powered" class="primaryTextColor text-decoration-none"
                        href="<?php echo $baseUrl; ?>"> Muahammad Reza
                        Khafidz
                    </a></div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/popper.min.js"></script>

    <!--Ionic Icons JS-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!--Custom JS-->
    <script src="../assets/js/custom.js"></script>
</body>

</html>