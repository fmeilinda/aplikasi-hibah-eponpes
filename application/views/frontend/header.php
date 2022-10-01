<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Website Resmi Pondok Pesantren Riyadush Solikhin</title>
    <meta content="Merupakan Website Resmi dari Pondok Pesantren Ridhyatul Solikhin - Kabupaten Tegal" name="description">
    <meta content="ponpes,islamic,school,kemenag,pp,sdit,sekolahdasar,islam,pendidikanislam,ifs" name="keywords">

    <!-- SEO -->
    <meta property="og:title" content="PP Ridhyatul Solikhin - Kab. Tegal">
    <meta property="og:description" content="Merupakan Website Resmi dari Pondok Pesantren Ridhyatul Solikhin - Kabupaten Tegal">
    <meta property="og:image" content="<?php echo base_url() ?>assets/frontend/img/p2.jpg">
    <meta property="og:url" content="<?php echo base_url() ?>">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/frontend/img/logo_ponpes.jpg" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>assets/frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Blog CSS Vendor -->
    <link href="<?php echo base_url() ?>assets/blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/blog/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/blog/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/blog/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/blog/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="<?php echo base_url() ?>assets/blog/css/variables.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>assets/frontend/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/blog/css/main.css" rel="stylesheet">

    <script src="<?php echo base_url() ?>assets/vendors/ckeditor/ckeditor.js"></script>

    <!-- Custom CSS -->
    <style>
        .zoom {
            transition: transform .2s;
            height: 150px !important;
        }

        .zoom:hover {
            transform: scale(1.8);
            border-radius: 10px;
        }

        .about .resume-title {
            font-size: 26px;
            font-weight: 700;
            margin-top: 20px;
            margin-bottom: 20px;
            color: #5fcf80;
        }

        .about .resume-item {
            padding: 0 0 20px 20px;
            margin-top: -2px;
            border-left: 2px solid #5fcf80;
            position: relative;
        }

        .about .resume-item ul {
            padding-left: 20px;
        }

        .about .resume-item ul li {
            padding-bottom: 10px;
        }

        .about .resume-item:last-child {
            padding-bottom: 0;
        }

        .about .resume-item::before {
            content: "";
            position: absolute;
            width: 16px;
            height: 16px;
            border-radius: 50px;
            left: -9px;
            top: 0;
            background: #fff;
            border: 2px solid #5fcf80;
        }

        /* Card */
        .card {
            margin-bottom: 30px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
        }

        .card-header,
        .card-footer {
            border-color: #ebeef4;
            background-color: #fff;
            color: #798eb3;
            padding: 15px;
        }

        .card-title {
            padding: 20px 0 15px 0;
            font-size: 18px;
            font-weight: 500;
            color: #012970;
            font-family: "Poppins", sans-serif;
        }

        .card-title span {
            color: #899bbd;
            font-size: 14px;
            font-weight: 400;
        }

        .card-body {
            padding: 0 20px 20px 20px;
        }

        .card-img-overlay {
            background-color: rgba(255, 255, 255, 0.6);
        }

        .about .resume-title {
            font-size: 26px;
            font-weight: 700;
            margin-top: 20px;
            margin-bottom: 20px;
            color: #5fcf80;
        }

        .about .resume-item {
            padding: 0 0 20px 20px;
            margin-top: -2px;
            border-left: 2px solid #5fcf80;
            position: relative;
        }

        .about .resume-item h4 {
            line-height: 18px;
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
            font-family: "Poppins", sans-serif;
            color: #0563bb;
            margin-bottom: 10px;
        }

        .about .resume-item h5 {
            font-size: 16px;
            background: #f7f8f9;
            padding: 5px 15px;
            display: inline-block;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .about .resume-item ul {
            padding-left: 20px;
        }

        .about .resume-item ul li {
            padding-bottom: 10px;
        }

        .about .resume-item:last-child {
            padding-bottom: 0;
        }

        .about .resume-item::before {
            content: "";
            position: absolute;
            width: 16px;
            height: 16px;
            border-radius: 50px;
            left: -9px;
            top: 0;
            background: #fff;
            border: 2px solid #5fcf80;
        }

        #hero {
            background-image: url('<?php echo base_url() ?>assets/images/pp7.jpg');
            width: 100%;
            height: 95vh;
        }

        /* Responsive Media Query */

        /* Untuk PC atau Laptop */
        @media screen and (max-width: 1280px) {
            #hero-desc h1 {
                color: green !important;
            }
        }

        /* Untuk Smartphone */
        @media screen and (max-width: 767px) {
            .get-started-btn {
                display: none !important;
            }

            #hero {
                background-image: url('<?php echo base_url() ?>assets/frontend/img/bg-hero.webp');
                width: 100%;
                height: 95vh;
            }

            #hero-desc>h1 {
                text-align: center !important;
                left: -40px !important;
                color: white !important;
            }

            #hero-desc>h2 {
                text-align: center !important;
                left: -40px !important;
                color: white !important;
            }

            #hero-desc>p {
                text-align: center !important;
                left: -40px !important;
                color: white !important;
            }

            #hero-desc>#btn-daftar {
                position: relative;
                left: -130px !important;
                text-align: center !important;
                background-color: transparent !important;
            }
        }
    </style>

</head>

<body>

    <!-- Bagian Header ( Navbar, Whatsapp Button ) -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="<?php echo base_url('utama') ?>">WEB PONPES</a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="<?php echo base_url('utama') ?>">Home</a></li>
                    <li><a href="<?php echo base_url('utama/blog') ?>">Berita Ponpes</a></li>
                    <li><a href="<?php echo base_url('utama/galeri') ?>">Galeri</a></li>
                    <li><a href="<?php echo base_url('utama/tentangKami') ?>">Tentang kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            <a href="https://wa.me/xxxxx?text=Saya%20tertarik%20dengan%20ponpes%20Anda" class="get-started-btn"><i class="bx bxl-whatsapp"></i> Whatsapp kami</a>

        </div>
    </header>