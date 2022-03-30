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
        content="Website contact dari Muhammad Reza Khafidz yang berisi tentang kontak untuk menghubungi saya. Hubungi saya di email: admin@reezza.com">
    <meta name="keywords" content="Reezza, Muhammad Reza Khafidz, Programmer, Coding, Design, Portfolio">

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/custom.css" rel="stylesheet">

    <!--Template Title-->
    <title>Contact | <?php echo $judulWebsite; ?></title>

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
                        <p class="h1">
                            Contact 👨‍💻
                        </p>

                        <p class="lh-lg py-3">
                            Jika anda tertarik untuk bekerjasama dengan saya, anda bisa menghubungi saya melalui email
                            <a href="mailto:admin@rezashadow.com" id="highlighted-text"
                                class="email-text highlighted-text">admin@rezashadow.com</a> <br>
                            Anda juga bisa menghubungi saya via kontak yang tertera dibawah.
                            <hr>
                            <ion-icon class="icon" name="logo-facebook"></ion-icon> <a id="contact-me"
                                href="https://web.facebook.com/127.0.0.1.reezza" target="_blank"
                                class="primaryTextColor text-decoration-none text-vertical-align-center"> Facebook
                            </a><br>
                            <ion-icon class="icon" name="logo-twitter"></ion-icon> <a id="contact-me"
                                href="https://twitter.com/r_eezza"
                                class="primaryTextColor text-decoration-none text-vertical-align-center"
                                target="_blank"> Twitter
                            </a><br>
                            <ion-icon class="icon" name="logo-instagram"></ion-icon> <a id="contact-me"
                                href="https://www.instagram.com/r.eezz.a" target="_blank"
                                class="primaryTextColor text-decoration-none text-vertical-align-center"> Instagram
                            </a><br>
                            <ion-icon class="icon" name="logo-youtube"></ion-icon> <a id="contact-me"
                                href="https://www.youtube.com/channel/UC4qKMcmRYUsdj5BJTN7e23w" target="_blank"
                                class="primaryTextColor text-decoration-none text-vertical-align-center"> Youtube
                            </a><br>
                            <ion-icon class="icon" name="logo-github"></ion-icon> <a id="contact-me"
                                href="https://github.com/reezzacodes" target="_blank"
                                class="primaryTextColor text-decoration-none text-vertical-align-center"> Github
                            </a><br>
                            <ion-icon class="icon" name="logo-steam"></ion-icon> <a id="contact-me"
                                href="https://steamcommunity.com/id/naturecoding" target="_blank"
                                class="primaryTextColor text-decoration-none text-vertical-align-center"> Steam
                            </a><br>
                        </p>
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